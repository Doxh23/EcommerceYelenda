<div class=" flex flex-col w-[95%] mx-auto ">
    <div class="h-40 flex justify-left  items-center">
        <H3>salutttttttttttt</H3>
    </div>


    <div class="w-full h-full flex flex-row">
        <div class=" w-3/12 h-full max-w-80  border shadow-2xl ">
            <ul>
                @foreach($brandData as $item)
                    <label for="{{$item->name}}">{{$item->name}}</label>
                    <input type="radio" wire:click="setBrand" value="{{$item->name}}" class="text-black"
                           wire:model="brand"
                           name="brand"
                           id="{{$item->name}}">
                @endforeach
            </ul>
        </div>
        <div class=" w-full h-full ">
            <div class="w-full  h-20 flex justify-center">
                <input type="text" class="text-black w-80 h-8" wire:model.live="search">
            </div>
            <div
                class="grid grid-cols-[repeat(auto-fill,minmax(260px,1fr))] pt-6 gap-y-8 px-8  text-center items-center justify-center">
                @foreach($data as $item)
                    <div onclick="window.location='{{route("product.product",["id"=>$item->id])}}'"
                         class=" relative  w-56 h-96 place-self-center border
                    border-gray-600  ">

                        <div class="  h-2/4 w-full bg-contain bg-no-repeat bg-center "
                             style="background-image: url('{{asset("/storage/beers/1_test_test.jpg")}}')"></div>
                        <div
                            class=" flex-col z-1 text-white z-[2] flex justify-end h-2/4 p-6 text-left  font-semibold text-xl
                        ">
                            <h4>{{$item->name}}</h4>
                            <p>{{$item->category->name}} + {{$item->quantity}}cl</p>
                            <p>{{$item->flavor->name}}</p>
                            <p>{{$item->price}} €</p>
                            <div class="flex justify-end">
                                <a href="">add to card</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

</div>

