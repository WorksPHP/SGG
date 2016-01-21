<?php
namespace App\SGG\Category;

use App\SGG\Category\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository
{
    public function allCategories()
    {
        return Category::all();
    }
}