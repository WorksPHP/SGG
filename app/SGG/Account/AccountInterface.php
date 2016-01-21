<?php

namespace App\SGG\Account;


interface AccountInterface
{
    public function allAccounts($user_id);
    public function findById($id);
    public function findByUser($name_user);
    public function findByName($name);
    public function saveAccount($request, $user_id);
    public function updateAccount($request);
    public function deleteAccount($id);
}