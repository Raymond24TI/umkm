<x-layout>
    <form method="POST" action="{{ route('login.attempt')}}">
    @csrf
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <input type="email" name="email" id="" placeholder="Email"/>
    <input type="password" name="password" id="" placeholder="Password"/>
    <button type="submit">Submit</button>
</form>
</x-layout>
