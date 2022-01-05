<div>
    <input wire:model.debounce.2000ms="name" type="text" name="name">
    Meu nome é {{$name}}

    <br>

    Mostrar idade
    <input wire:model="show" type="checkbox">

    @if($show)
    Minha idade é {{$age}}
    @endif

    <hr>

    Dado selecionado {{$select}}
    <select wire:model="select" name="" id="">
        <option>PHP</option>
        <option>Livewire</option>
        <option>Laravel</option>
    </select>
</div>
