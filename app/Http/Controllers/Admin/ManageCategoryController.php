<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ManageCategoryService;
use App\Services\Indexable;
use Illuminate\Http\Request;

class ManageCategoryController extends Controller
{
    use Indexable;

    private $table;
    private $categoryService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ManageCategoryService $categoryService)
    {
        $this->table = 'categories';
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $parameters = $this->getParameters($request);
        $records = $this->categoryService->getAll(config('app.nbrPages.back.'.$this->table),$parameters);

        $links = $records->appends($parameters)->links('pagination');

        if ($request->ajax())
        {
            return response()->json([
                'table' => view('admin.categories.tables',['categories'=>$records])->render(),
                'pagination' => $links->toHtml(),
            ]);
        }
        return view('admin.categories.index',['categories'=>$records,'links'=>$links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->categoryService->create($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryService->findById($id);
        return view("admin.categories.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->categoryService->update($request, $id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
