<div class="bg-gray-500 flex flex-col w-[95%] mx-auto ">
    <div class="h-40 flex justify-left  items-center">
        <H3>salutttttttttttt</H3>
    </div>
    <div class="w-full h-full flex flex-row">
        <div class="bg-blue-800 w-3/12 h-full "></div>
        <div class="bg-red-800 w-9/12 h-full ">
            <div class="w-full h-20 bg-green-500"></div>
            <div
                class="grid grid-cols-[repeat(auto-fill,minmax(260px,1fr))] pt-6 gap-y-8 px-8  text-center items-center justify-center">
                @foreach($data as $item)
                    <div
                        class=" relative  w-56 h-64 place-self-center bg-contain  "
                        style="background-image: url('{{asset("/storage/beers/1_test_test.jpg")}}')">

                        <div
                            class="flex-col z-1 text-white  z-[2] flex justify-end h-full p-6  text-left border border-gray-600 font-semibold text-xl ">
                            <h4>{{$item->name}}</h4>
                            <p>{{$item->category->name}} + {{$item->quantity}}cl</p>
                            <p>{{$item->flavor->name}}</p>
                            <p>prix</p>
                            <div class="flex justify-end">
                                <button> add to cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

</div>
