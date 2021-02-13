<?php

namespace App\Repositories\Admin;

use App\Models\admin\Category;

class ManageCategoryRepository
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAll($nbrPages, $parameters)
    {
        return  $this->category::when(($parameters['search'] != ''),function ($query) use ($parameters) {
            $query->where(function ($q) use ($parameters){
                $q->where('name','like','%'.$parameters['search'].'%')
                    ->orwhere('id','=',$parameters['search']);
            });
        })
            ->when($parameters['order'] != '',function ($query) use ($parameters){
                $query->orderBy($parameters['order'],$parameters['direction']);
            })->paginate($nbrPages);
    }

    public function getCategoryById($id)
    {
        return $this->category->where("id",$id)->first();
    }

    public function create($attributes)
    {
        return $this->category->create($attributes);
    }
}
