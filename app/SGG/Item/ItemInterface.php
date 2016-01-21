<?php
namespace App\SGG\Item;

interface ItemInterface
{
    public function getAll($budget);
    public function getById($id);
    public function getItemsByBudget($id);
    public function deleteById($id);
    public function saveItem($request);
}