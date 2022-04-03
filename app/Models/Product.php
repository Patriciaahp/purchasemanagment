<?php

namespace App\Models;

use App\Filters\QueryFilter;
use App\ProductQuery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'quantity'];

    public function newEloquentBuilder($query)
    {
        return new ProductQuery($query);
    }
    public function scopeFilterBy($query, QueryFilter $filters, array $data)
    {
        return $filters->applyto($query, $data);
    }
}
