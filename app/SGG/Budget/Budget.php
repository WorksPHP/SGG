<?php
namespace App\SGG\Budget;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'budgets';

    protected $fillable = ["name"];

    protected $guarded = ["id"];

    public $timestemps = true;


    public function items()
    {
        return $this->hasMany('App\SGG\Item\Item');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo Users
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }


    /**
     * @param $value created_at DB
     * @return date formated
     */
    public function getCreatedAtAttribute($value)
    {
        return ($value != '0000-00-00') ? date("d/m/Y", strtotime($value)) : null;
    }
}