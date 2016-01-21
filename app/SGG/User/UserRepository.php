<?php
namespace App\SGG\User;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserRepository
{
    public function getUser()
    {
        return User::find(\Auth::user()->id);
    }

    public function getUserId()
    {
        return \Auth::user()->id;
    }

    public function deleteUser()
    {
        return "delete user and itens relationals";
    }
}