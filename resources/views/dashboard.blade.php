<x-layout>
<h1>Welcome {{Auth::user()->name}} to the Private Dashboard.</h1>
<center>
<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit">Log out</button>
</form>
</center>
</x-layout>
