<div>
    <h2>Hola</h2>
    <input wire:model="search" type="text">
@foreach($products as $product)
    {{$product->name}}

    @endforeach
</div>
