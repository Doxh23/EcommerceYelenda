<div class="bg-blue-800">
    <form action="{{route("auth.login")}}" method="post">
        <label for="email">
            email
        </label>
        <input type="text" wire:model="email">
        <label for="password">
            password
        </label>
        <input type="text" wire:model="password">
    </form>
</div>
