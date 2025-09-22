<x-layout>
    <form method="POST" action="{{ route('login.attempt') }}">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3 style="color: rgb(110, 73, 26)">Welcome member!</h3>
        <input type="email" name="email" id="" placeholder="Email" />
        <input type="password" name="password" id="" placeholder="Password" />
        <button type="submit">Submit</button>
        <a href="{{ route('register') }}" class="btn">
            don't have account?? register!
        </a>
    </form>
</x-layout>
