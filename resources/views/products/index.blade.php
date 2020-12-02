<div class="container">
    <div style="text-align: center">

        @foreach($product as $products)
            <h1>{{ $products->name }}</h1>
            <p>
                Price: <b>{{$products->getPrice()}}</b>
                Size: <b>{{$products->getSize()}}</b>
                Description: <b>{{$products->getDescription()}}</b>
            </p>

            <ul>
                @foreach($products->deliveries as $delivery)
                    <li>{{$delivery->name}} {{$delivery->getPrice()}}</li>
                @endforeach
            </ul>
            <p>
            <form action="products/{{$products->id}}" method="get">
                <button type="submit">Show</button>
            </form>
            </p>
        @endforeach
        <br>
        <p>
        <div style="display: inline-block;text-align: left; border: 1px solid #718096;padding: 10px;border-radius: 10px">
            <form action="products/create" method="post">
                @csrf
                <input name="name" type="text" id="name">
                <label for="name">Product name</label><br>
                <input name="description" type="text" id="description">
                <label for="description">Product description</label><br>
                <input name="size" type="text" id="size">
                <label for="size">Product size</label><br>
                <input name="price" type="text" id="price">
                <label for="price">Product price</label><br><br>

                <button type="submit">Create</button>
            </form>
        </div>
        </p>
    </div>
</div>
