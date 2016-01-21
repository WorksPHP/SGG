<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SGG\Account\AccountInterface;
use App\SGG\User\UserRepository;


class HomeController extends Controller
{


    public function __construct(AccountInterface $account, UserRepository $users)
    {
        $this->account = $account;
        $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = "Dashboard";
        $user = $this->users->getUser();
        $accounts = $user->accounts()->get();
        //dd($accounts);
        return view('dashboard.index', ['page' => $page, 'contas' => $accounts]);
    }

    public function about()
    {
        return "sobre a SGG";
    }
   
}
