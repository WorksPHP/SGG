<?php
namespace App\SGG\Item;

use App\SGG\Item\Item;
use App\SGG\Item\ItemInterface;
use Illuminate\Database\Eloquent\Model;
use App\SGG\User\UserRepository;

class ItemRepository implements ItemInterface
{

    /**
     * @return EloquentQueryBuilder|QueryBuilder
     */
    protected function newQuery()
    {
        return Item::query();
    }

    public function getAll($budget)
    {
        return $this->newQuery()->where('budget_id', $budget)->get();
    }

    public function getById($id)
    {
        return $this->newQuery()->find($id);
    }

    public function getItemsByBudget($id)
    {
        //$this->item->newQuery()->with('categories', 'budgets')->where('id',$id)->get();

        return $this->newQuery()->with('categories', 'budgets')->where('budget_id',$id)->get();
    }

    public function saveItem($request)
    {
        $item = new Item();
        $item->name = ucfirst($request->input('name'));
        $item->value = $request->input('value');
        $item->budget_id = $request->input('budget');
        $item->category_id = $request->input('category');
        $item->save();
    }

    public function deleteById($id)
    {
        return $this->newQuery()->where('id', $id)->delete();
    }
}
