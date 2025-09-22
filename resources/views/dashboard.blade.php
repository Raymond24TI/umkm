<x-layout>
    <h1>Welcome {{ Auth::user()->name }} to the Private Dashboard.</h1>

    <div style="margin-top:20px;">
        <a href="{{ route('produk.index') }}">
            <button type="button">Produk Kita</button>
        </a>
    </div>

    <center>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Log out</button>
        </form>
    </center>
</x-layout>
