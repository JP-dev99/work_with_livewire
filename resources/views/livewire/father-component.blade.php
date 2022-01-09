<div>
    @foreach($users as $user)
    <div>
        @livewire('son-component', ['user' => $user], key($user->id))
        {{-- <button wire:click="removeUser('{{$user->id}}')"> Remove </button> --}}
    </div>
    @endforeach
            {{ $users->links() }}
        <hr>

        <button wire:click='$refresh'>Refresh father Component  </button> : {{now()}} <br>
        <button wire:click='updateSon'> Refresh all Components </button> : {{now()}}
</div>
