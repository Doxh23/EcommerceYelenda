<div>


    <form action="" method="post" wire:submit="submit" class="flex flex-col w-full mx-auto gap-4">
        <div class="flex w-80 flex-col mx-auto gap-4 ">
            <label for="nickname" class="text-center">nickname</label>
            <input placeholder="nickname" type="text" name="nickname" id="nickname" wire:model="nickname"
                   class=" placeholder-black  w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("nickname"))
                @foreach($errors->get("nickname") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>
        <div class="flex w-80 flex-col mx-auto gap-4 ">
            <label for="password" class="text-center">password</label>
            <input placeholder="password" type="text" name="password" id="password" wire:model="password"
                   class=" placeholder-black  w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("password"))

                @foreach($errors->get("password")[0] as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <div class="flex w-80 flex-col mx-auto gap-4 ">
            <label for="email" class="text-center">email</label>
            <input placeholder="email" type="text" name="email" id="email" wire:model="email"
                   class=" placeholder-black  w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("email"))
                @foreach($errors->get("email") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <div class="flex w-80 flex-col mx-auto gap-4 ">
            <label for="name" class="text-center">name</label>
            <input placeholder="name" type="text" name="name" id="name" wire:model="name"
                   class=" placeholder-black  w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("name"))
                @foreach($errors->get("name") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <div class="flex w-80 flex-col mx-auto gap-4 ">
            <label for="surname" class="text-center">surname</label>
            <input placeholder="surname" type="text" name="surname" id="surname" wire:model="surname"
                   class=" placeholder-black w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("surname"))
                @foreach($errors->get("surname") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <div class="flex w-80 flex-col mx-auto gap-4 ">
            <label for="address" class="text-center">address</label>
            <input placeholder="address" type="text" name="address" id="address" wire:model="address"
                   class=" placeholder-black  w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("address"))
                @foreach($errors->get("address") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <div class="flex w-80 flex-col mx-auto w-80 gap-4 ">
            <label for="city" class="text-center">city</label>
            <input placeholder="city" type="text" name="city" id="city" wire:model="city"
                   class=" placeholder-black  w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("city"))
                @foreach($errors->get("city") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <div class="flex w-80 flex-col mx-auto gap-4 ">
            <label for="code_postal" class="text-center">postal code</label>
            <input placeholder="code_postal" type="text" name="code_postal" id="code_postal" wire:model="code_postal"
                   class=" placeholder-black  w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("code_postal"))
                @foreach($errors->get("code_postal") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <div class="flex w-80 flex-col mx-auto gap-4 ">
            <label for="phone" class="text-center">phone</label>
            <input placeholder="phone" type="text" name="phone" id="phone" wire:model="phone"
                   class=" placeholder-black  w-full border border-blue-500 rounded-2xl text-black">
            @if($errors->get("phone"))
                @foreach($errors->get("phone") as $err)
                    <span>{{$err}}</span>
                @endforeach
            @endif
        </div>


        <button>submit</button>

    </form>
</div>
