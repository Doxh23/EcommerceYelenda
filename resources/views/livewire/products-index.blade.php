<div>
    @foreach($data as $item)
        <li>{{$item->name}}</li>
    @endforeach
    <button wire:click="refresh">refresh</button>
</div>
