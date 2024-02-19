@extends("base")


@section("content")

    <div class="w-8/12  mx-auto pt-8 flex flex-col gap-20">

        <div class="infos w-full  flex flex-row">
            <div class=" w-6/12 h-auto ">
                
                <img src="{{asset("storage/".$beer->image_path)}}" class="w-80 h-80 mx-auto" alt="">
            </div>
            <div
                class=" w-6/12 h-auto flex flex-col justify-end text-2xl justify-center shadow shadow-sky-50 gap-4 pl-4">
                <h4>{{$beer->brand->name}} {{$beer->name}}</h4>
                <p>{{$beer->price}} €</p>

                <p>brewery : {{$beer->brewing->name}}</p>
                <p>alcohol content : {{$beer->degree}}%</p>
                <p>containing : {{$beer->containing->name}}</p>
                <p>flavor : {{$beer->flavor->name}}</p>
                <div class="sales">

                    @if($beer->stock > 0)
                        <div id="myComponent" x-data=" { quantity: 0,stock:{{$beer->stock-1}}  }">
                            <button @click="quantity > 0 ? quantity-- : 0">-</button>
                            <button @click="quantity < 100 && quantity <= stock  ? quantity++ : quantity">
                                +
                            </button>


                            <form id="addToCartForm"
                                  x-bind:action=`/cart/addToCart/{{$beer->id}}/${quantity}`
                                  method="POST">
                                @csrf


                                <input class="text-black" type="number" name="qty" x-model="quantity" min="0"
                                       x-bind:max="Math.min(100,stock)"
                                       @input="quantity = Math.min(quantity, Math.min(stock, 100))">


                                <button type="submit" @click="test">Envoyer</button>
                            </form>


                        </div>
                    @else
                        <p>out of stock</p>
                    @endif
                </div>


            </div>
        </div>
        <div class="description  w-full h-96">
            <h1 class="my-20 text-6xl">Description</h1>

            <p>
            <h2 class="text-3xl"> Introducing "Et"</h2>
            a new addition to our collection of craft beers. Brewed by Heineken, "Et" is a hoppy
            brew
            with a rich flavor profile. Using the traditional maceration method and aged in casks, this blonde beer
            boasts a tank time of 53 days, ensuring optimum taste and quality. With an alcohol content of 98.16
            degrees,
            "Et" offers a bold and distinctive taste experience.
            </p>
            <p>
            <h2 class="text-3xl"> Description:</h2>

            "Et" offers a tantalizing blend of flavors, with notes of hops and malt balanced perfectly. Its
            refreshing
            taste is complemented by a subtle sweetness, making it an ideal choice for any occasion. Whether you're
            enjoying it with friends or savoring a quiet moment alone, "Et" promises to delight your senses with
            every
            sip.
            </p>
            <p>
                Price: $26.46
                Quantity: 41 bottles available
                Stock: 572 bottles

                Grab your bottle of "Et" today and elevate your beer-drinking experience to new heights!
            </p>
        </div>
        <div class="comment mb-20"></div>

    </div>
    <script>


    </script>
@endsection
