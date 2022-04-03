<?php

namespace App\Filters;

use Illuminate\Support\Carbon;

class ProductFilter extends QueryFilter
{
    public function rules():array{
        return [
            'search' => 'filled',
        ];
    }
    public function search($query, $search)
    {
        return $query->where(function($query) use ($search) {
            $query->where('name', 'LIKE', "%{$search}%");
        });
    }
}
