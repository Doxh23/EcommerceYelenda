<!doctype html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="text-white bg-[#001233]">
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
<div class="border border-red-700 mt-8 w-8/12 mx-auto">test</div>
@if( session("failed"))

@elseif(session("success"))
    <div class="border border-red-700">{{session("success")}} </div>
@endif
<main class="min-h-[calc(100vh-48px)]  grid">
    @yield("content")
</main>

</body>
</html>
