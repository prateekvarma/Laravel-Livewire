<div>
    <input wire:model="name" type="text">
    Hello, are you {{ $name }}

    <button wire:click="changeName">Change name</button>
</div>
