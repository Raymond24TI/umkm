<x-layout> <form method="POST" action="_{{route('login.attempt')}}">
    @csrf
    <input type="email" name="" id="" placeholder="Email"/>
    <input type="password" name="" id="" placeholder="Password"/>
    <button type="submit">Submit</button>
</form>
</x-layout>
