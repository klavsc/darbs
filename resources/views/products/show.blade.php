 <div style="text-align: center">
    <div>
        Product name {{ $product->name }}
    <div>
        Product description {{ $product->description }}
    <div>
        Product size {{ $product->size }}
    <div>
        Product price  {{ $product->price }}
    </div>
    @foreach($product->deliveries as $delivery)
        <input type="radio" id="order" name="{{ $delivery->firm }}" value="{{ $delivery->id }}">
        <label for="delivery">{{ $delivery->firm . ',' . $delivery->price }}</label><br>
    @endforeach

        <form action="/products/{{$product->id}}/delete" method="get">
            <button style="color: red" type="submit">Delete</button>
        </form>

            <form action="/products/{{$product->id}}/update" method="post">

                @csrf
                <input name="name" type="text" id="name">
                <label for="name">Product name</label><br>
                <input name="description" type="text" id="description">
                <label for="description">Product description</label><br>
                <input name="size" type="text" id="size">
                <label for="size">Product size</label><br>
                <input name="price" type="text" id="price">
                <label for="price">Product price</label><br><br>

                <button type="submit">Update</button>
            </form>
</div>


