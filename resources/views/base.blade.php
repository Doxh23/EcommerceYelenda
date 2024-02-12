<!doctype html>
<html lang="en">
<head>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="relative text-white bg-[#001233]">
<nav class="bg-[#ff5c50]">
    <ul class="flex flex-row gap-12 justify-center items-center text-xl h-12">
        <li><a href="{{route("welcome")}} "
               class="hover:font-bold {{request()->routeIs("welcome")? "underline" : "" }}">

                home</a>
        </li>
        <li><a href="{{route("product.index")}}"
               class=" hover:font-bold {{request()->routeIs("product.index")? "underline" : "" }}">
                products</a></li>

        @guest

            <li><a href="{{route("auth.login")}}"
                   class="hover:font-bold {{request()->routeIs("auth.login")? "underline" : "" }}">
                    login</a>
            </li>
            <li><a href="{{route("auth.register")}}"
                   class="hover:font-bold {{request()->routeIs("auth.register")? "underline" : "" }}">
                    register</a></li>
        @endguest



        @auth
            <form action="{{route("auth.logout")}}" method="post">
                @csrf
                @method('DELETE')
                <button>deconnexion</button>
            </form>
        @endauth

    </ul>
</nav>
{{--transform translate-x-1/2 translate-y-1/2--}}

@if( session("failed"))
    <div x-data="{show:true}" x-show="show" x-init="setTimeout(() => show = false, 5000)" x-transition
         class="border border-red-700 mt-10  w-2/4  bg-red-700 rounded pl-2 shadow-sm shadow-black absolute left-1/2 transform -translate-x-1/4 ">{{session("failed")}}</div>
@elseif(session("success"))
    <div x-data="{show:true}" x-show="show" x-init="setTimeout(() => show = false, 3000)" x-transition
         class="border border-green-700-700 mt-8 w-8/12 mx-auto bg-green-700 rounded pl-2 shadow-sm shadow-black absolute  translate-x-1/4 ">{{session("success")}} </div>
@endif
<main class="min-h-[calc(100vh-48px)]  grid">
    @yield("content")
</main>

</body>
</html>
