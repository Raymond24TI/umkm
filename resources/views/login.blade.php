<x-layout> <form method="POST" action="_{{ route('login.attempt')}}">
    <input type="email" placeholder="email">
    <input type="password" placeholder="password">
    <button type="submit">Submit</button>
</form>
</x-layout>
