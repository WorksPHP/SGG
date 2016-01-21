<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SGG\Account\AccountInterface;
use App\SGG\User\UserRepository;

class AccountController extends Controller
{

    protected $account;

    public function __construct(AccountInterface $account, UserRepository $user)
    {
        $this->account = $account;
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listAccount()
    {
        $user = $this->user->getUser();
        $page = "Lista de Contas";
        return view('dashboard.account.list',['page' => $page, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = "Adicionando Conta";
        return view('dashboard.account.new', ['page'=>$page]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $this->user->getUserId();
        $this->account->saveAccount($request, $user_id);
        return $this->listAccount();
    }

    public function edit($id)
    {
        $page = "Editar Contas";
        $account = $this->account->findById($id);
        return view('dashboard.account.edit', ['page' => $page,'account' => $account]);
    }

    public function update(Request $request)
    {
        $this->account->updateAccount($request);
        return $this->listAccount();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->account->deleteAccount($id);

        return $this->listAccount();
    }
}
