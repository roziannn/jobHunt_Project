<?php

namespace App\Traits;

trait Searchable
{
    function seacrh($query, array $searchableFields)
    {
        if (request()->has('search')) {
            return $query->where(function ($subquery) use ($searchableFields) {
                foreach ($searchableFields as $field) {
                    $subquery->orWhere($field, 'like', '%' . request('search') . '%');
                }
            });
        }

        return;
    }
}
