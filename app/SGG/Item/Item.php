<?php
namespace App\SGG\Item;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = ["name", "value", "category_id", "budget_id"];

    protected $guarded = ["id"];

    public $timestemps = false;

    public function budgets()
    {
        return $this->belongsTo('App\SGG\Budget\Budget', 'budget_id');
    }

    public function categories()
    {
        return $this->belongsTo('App\SGG\Category\Category', 'category_id');
    }
}
