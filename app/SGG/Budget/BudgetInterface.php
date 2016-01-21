<?php
namespace App\SGG\Budget;

interface BudgetInterface
{
    public function getAll($user_id);
    public function searchBudget($colum, $value);
    public function findById($id);
    public function saveBudget($request, $user_id);
    public function getSumBudgetList($user_id);
    public function getByMonth($mes, $user_id);
    public function sumValueItems($orcamentos);
}