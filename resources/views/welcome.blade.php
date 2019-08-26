<h1>
    Users are listed as follows:
    <ul>
        @foreach($users as $user)
            <li>{{$user['firstName']}} {{$user['lastName']}}</li>
        @endforeach
    </ul>
</h1>