<?php


namespace App\MenuFilters;


use Illuminate\Support\Facades\Auth;
use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

class AdminMenuFilter implements FilterInterface
{

    public function transform($item, Builder $builder)
    {
        if (isset($item['roles']) && !Auth::user()->hasAnyRole($item['roles'])) {
            return false;
        }
        return $item;
    }
}