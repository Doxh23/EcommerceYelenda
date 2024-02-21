<a href="{{route("cart")}}" x-data="{open:false}" @mouseleave="open = false" @mouseenter="open =true"> <img

        class="w-10 h-fit"
        src="/storage/cart.svg"
        alt="">
    <div class="absolute bg-teal-900 w-4 h-4 top-0 -left-1 text-[12px] text-center  rounded-full">
        {{$cartNbr}}
    </div>
    <div x-show="open" class="absolute overflow-scroll scrollbar-hide bg-white w-56 h-80 -bottom-[800%] left-[-430%]"
         x-transition>
        <livewire:cart-modal/>
    </div>


</a>
