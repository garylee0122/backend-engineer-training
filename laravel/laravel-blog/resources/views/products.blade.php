<h1>Products</h1>

@foreach($products as $product)
    <p>{{ $product['name'] }} - {{ $product['price'] }}</p>
@endforeach