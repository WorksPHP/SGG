<?php
namespace App\SGG\Account;

use Illuminate\Database\Eloquent\Builder as EloquentQueryBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use App\SGG\Account\AccountInterface as AccountI;
use App\SGG\Account\Account as AccountM;
use App\SGG\User\UserRepository as UserRepository;

class AccountRepository implements AccountI
{

    /**
     * @return EloquentQueryBuilder|QueryBuilder
     */
    protected function newQuery()
    {
            return AccountM::query();
    }

    public function searchAccount($colum, $value)
    {
        return $this->newQuery()->where($colum,'=',$value);
    }

    public function allAccounts($user_id)
    {
        //return $this->newQuery()->with('users')->get();
        return $this->newQuery()->where('user_id', '=', $user_id)->get();
    }

    /**
     * @param $name
     * @return AccountRepository by user
     */
    public function findByUser($name_user)
    {
        return "name user";
    }

    /**
     * @param $name
     * @return AccountRepository by name
     */
    public function findByName($name)
    {
        $account_name = $this->newQuery()->where('name', 'like', '%'.$name.'%')->orderBy('name', 'asc')->get();
        return $account_name;
    }

    /**
     * @param $name
     * @return AccountRepository by id
     */
    public function findById($id, $fail = true)
    {
        if ($fail):
            return $this->newQuery()->findOrFail($id);
        endif;
        return $this->newQuery()->find($id);
    }

    private function forUser($id)
    {
        return $this->newQuery()->where('user_id', "=", $id)->get();
    }

    public function saveAccount($request, $user_id)
    {
        $account = new AccountM();
        $account->name = ucfirst($request->input('name'));
        $account->user_id = $user_id;
        $account->save();

        return $account;
    }

    public function updateAccount($request)
    {
        $account = $this->newQuery()->find($request->input('id'));
        $account->name = ucfirst($request->input('name'));
        $account->save();

        return $account;
    }

    public function deleteAccount($id)
    {
        $account = AccountM::find($id);
        $account->delete();
    }
}