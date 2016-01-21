<?php
namespace App\SGG\Budget;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Builder as EloquentQueryBuilder;
use Illuminate\Database\Query\Builder;
use App\SGG\Budget\BudgetInterface as BudgetI;
use App\SGG\Budget\Budget as BudgetM;


class BudgetRepository implements BudgetI
{
    /**
     * @return EloquentQueryBuilder|QueryBuilder
     */
    protected function newQuery()
    {
        return BudgetM::query();
    }

    public function searchBudget($colum, $value)
    {
        return $this->newQuery()->where($colum,'=',$value);
    }

    public function findById($id)
    {
        return $this->newQuery()->where('id','=',$id)->with('items')->get();
    }

    public function getAll($user_id)
    {
        return BudgetM::all();
        //return $this->newQuery()->all();
    }

    public function saveBudget($request, $user_id)
    {
        $budget = new BudgetM();
        $budget->name = ucfirst($request->input('name'));
        $budget->user_id = $user_id;
        $budget->month = strtoupper($request->input('month'));
        $budget->save();

        return $budget;
    }

    public function getSumBudgetList($user_id)
    {
        return $this->newQuery()->with('items')->where('user_id', '=', $user_id)->get();
    }

    public function getByMonth($mes, $user_id)
    {
        $teste = DB::table('budgets')
            ->join('items', 'budgets.id', '=', 'items.budget_id')
            ->where('budgets.user_id', $user_id)
            ->whereMonth('budgets.created_at', '=', $mes);

        return $teste;
    }

    public function sumValueItems($orcamentos)
    {
        $valor = 0;
        foreach($orcamentos as $orc)
        {
            foreach($orc->items as $item)
            {
                $valor[$orc->id] += $item->value;
                //$valor += $item->value;
            }
        }

        return $valor;
    }
}