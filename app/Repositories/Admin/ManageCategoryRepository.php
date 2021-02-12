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

    public function getCategoryById($id)
    {
        return $this->category->where("id",$id)->first();
    }
    public function create($attributes)
    {
        return $this->category->create($attributes);
    }
}
