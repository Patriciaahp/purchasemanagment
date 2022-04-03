<div>

    @foreach($products as $product)
      <table>
         <tr>
             {{$product->name}}
         </tr>
      </table>

    @endforeach
</div>
