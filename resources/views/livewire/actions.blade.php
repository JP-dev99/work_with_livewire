<div>
    Meu valor é
    <input wire:model="input" type="text">

    <button wire:click="clearInput">Clear Input</button>
    <br><br>
    <button wire:click="setValue('Luiz')">Set value</button>
    <br>
    <button wire:mouseenter="setValue('Mouse Over')">Over</button>

    <form action="#" wire:submit.prevent="submit">
        <button>Enviar</button>
    </form>

    <button wire:click="$set('input', 'Alterado diretamente')">Trocar diretamente</button>

</div>
