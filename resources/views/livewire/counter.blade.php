<div>
    <h2 class="font-bold text-4xl text-center pb-4">A simple counter</h2>
    <div class="text-center">
        <h1>{{ $count }}</h1>
        <button wire:click="increment">+</button>
    </div>

    <div x-data="{ show: 0 }">
        <button @click="show = 1">Open Dropdown</button>

        <ul x-show="show" @click.away="show = 0">
            Dropdown Body
        </ul>
    </div>

</div>
