<?php

namespace App\Http\Controllers;

use App\SGG\Item\ItemInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SGG\Budget\BudgetInterface;
use App\SGG\User\UserRepository as UserRepository;
use App\SGG\Category\CategoryRepository;

class BudgetController extends Controller
{
    public function __construct(BudgetInterface $budget, UserRepository $user, CategoryRepository $category, ItemInterface $item)
    {
        $this->budget = $budget;
        $this->user = $user;
        $this->category = $category;
        $this->item = $item;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listBudget()
    {

        $page = "Lista de Orçamentos";
        $user_id = $this->user->getUserId();
        $orcamentos = $this->budget->getAll($user_id);
        $items = $this->budget->getSumBudgetList($user_id);

        return view('dashboard.budget.list', ['page' => $page, 'orcamentos' => $orcamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newBudget()
    {
        $page = "Novo Orçamentos";

        return view('dashboard.budget.new', ['page' => $page]);
    }

    public function storeBudget(Request $request)
    {
        $user_id = $this->user->getUserId();

        $budget = $this->budget->saveBudget($request, $user_id);

        return redirect()->route('orcamento_edit', ['id' => $budget->id]);
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = "Editar Orçamento";
        $user_id = $this->user->getUserId();
        $items = $this->item->getItemsByBudget($id);
        $categories = $this->category->allCategories();
        //dd($items->budgets()->id);

        return view('dashboard.budget.edit',['page' => $page, 'items' => $items, 'categories' => $categories, 'budget' => $id]);
    }

    public function addItem($id)
    {
        $page = "Adicionar Itens no Orçamento";
        $categories = $this->category->allCategories();

        return view('dashboard.budget.budget_item_add', ['page' => $page, 'categories' => $categories, 'budget' => $id]);
    }

    public function storeItem(Request $request)
    {
        //dd($request->all());
        $this->item->saveItem($request);

        return redirect()->route('orcamento_edit', ['id' => $request->input('budget')]);
    }

    public function deleteItem($id)
    {
        $page = "Editar Item do Orçamento";

        $item = $this->item->deleteById($id);
        dd($item);
        return  back()->withInput();//view('dashboard.budget.budget_edit_item', ['page' => $page, 'item' => $item]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
