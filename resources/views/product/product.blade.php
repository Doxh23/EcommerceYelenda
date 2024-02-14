@extends("base")


@section("content")

    <div class="w-8/12 bg-teal-900 mx-auto">

        <div class="infos w-full  flex flex-row">
            <div class="bg-red-500 w-6/12 h-auto">
                <img src="{{asset("storage/".$data->image_path)}}" class="w-80 h-80" alt="">
            </div>
            <div class="bg-blue-600 w-6/12 h-auto flex flex-col justify-end">
                <h4>{{$data->brand->name}} {{$data->name}}</h4>
                <p>{{$data->price}} €</p>

                <p>brewery : {{$data->brewing->name}}</p>
                <p>alcohol content : {{$data->degree}}%</p>
                <p>containing : {{$data->containing->name}}</p>
                <p>flavor : {{$data->flavor->name}}</p>

            </div>
        </div>
        <div class="description bg-gray-500 w-full h-96"></div>
        <div class="comment"></div>

    </div>

@endsection
