<div>
    <div>
        @foreach($users as $user)
            @livewire('son-component', ['user' => $user], key($user->id))
            {{-- <button wire:click="removeUser('{{$user->id}}')"> Remove </button> --}}
        @endforeach

        {{ $users->links() }}
</div>
