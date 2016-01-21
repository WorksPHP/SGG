<?php
namespace App\SGG\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    protected $fillable = ["name"];

    protected $guarded = ["id"];

    public $timestemps = false;

    public function items()
    {
        return $this->hasMany('App\SGG\Item\Item');
    }
}
