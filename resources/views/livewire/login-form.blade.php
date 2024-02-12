<div class="w-8/12 h-8/12">
    <form action="" method="post" wire:submit="submit()"
          class="flex flex-col w-full mx-auto gap-4">


        <div class="flex flex-col mx-auto gap-4 ">
            <label for="nickname" class="text-center">nickname</label>
            <input placeholder="nickname" type="text" name="nickname" id="nickname" wire:model="nickname"
                   class=" placeholder-black  w-80 border border-blue-500 rounded-2xl text-black">
            @if($errors->get("nickname"))
                @foreach($errors->get("nickname") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>

        <div class="flex mx-auto flex-col gap-4">
            <label for="password" class="text-center">password</label>
            <input placeholder="password" type="password" name="password" id="password" wire:model="password"
                   class=" placeholder-black border border-blue-500 w-80 rounded-2xl text-black">
            @if($errors->get("password"))
                @foreach($errors->get("password") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <button> se connecter</button>


    </form>
</div>
