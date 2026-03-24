<h1>Products from DB</h1>

@foreach($products as $product)
    <p>{{ $product->name }} - {{ $product->price }}</p>
@endforeach