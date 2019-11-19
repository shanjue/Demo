<?php

namespace App\DataTables\Scopes;

use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Contracts\DataTableScope;

class ActiveUser implements DataTableScope
{
    /**
     * Apply a query scope.
     *
     * @param \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
     * @return mixed
     */
    public function apply($query)
    {
        if (Auth::user()) {
            $query->whereHas('users',function($query){
                $query->where('active',1);
            });
        }
    }
}
