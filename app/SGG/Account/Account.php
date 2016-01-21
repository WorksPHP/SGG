<?php

namespace App\SGG\Account;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';

    protected $garded = [
        "id"
    ];

    protected $fillable = ["name", "user_id"];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
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
