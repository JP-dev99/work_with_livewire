<div>
    @foreach($users as $user)
    <div>
        @livewire('son-component', ['user' => $user], key($user->id))
        {{-- <button wire:click="removeUser('{{$user->id}}')"> Remove </button> --}}
    </div>
    @endforeach

        <hr>

        <button wire:click='$refresh'>Refresh Component pai </button> : {{now()}}
        <button wire:click='atualizaFilho'> Refresh Componentes filhos </button> : {{now()}}
</div>
