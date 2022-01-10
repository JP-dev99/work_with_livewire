<div>
    @foreach ($users as $user)
        <div>{{$user->name}} : {{now()}} </div>
    @endforeach

    {{$users->links()}}
</div>
