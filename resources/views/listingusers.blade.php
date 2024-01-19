@if($user)
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>


@else
    <p>No authenticated user.</p>
@endif
