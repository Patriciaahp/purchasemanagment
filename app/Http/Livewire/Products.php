<?php

namespace App\Http\Livewire;

use App\Filters\ProductFilter;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\Integer;

class Products extends Component
{
    use WithPagination;

    public string $search;
    public integer $per_page=10;

    protected $queryString = [
        'search' => ['except'=> ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    protected function getProducts(ProductFilter $productFilter)
    {
        $products = Product::query()->filterBy($productFilter, array_merge([
            'search' => $this->search,
        ]))
            ->paginate($this->per_page);
        $products->appends($productFilter->valid());

        return $products;
    }
    public function render(ProductFilter $productFilter): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

         return view('livewire.products', ['products' => $this->getProducts($productFilter)]);
    }
}
