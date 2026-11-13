<header class="header">
    <h1>Zonasi & Rak Gudang</h1>

    <div class="header-user">
        <span class="nama-user">{{ auth()->user()->name }} ({{ auth()->user()->role }})</span>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="tombol-logout">Logout</button>
        </form>

        <img src="{{ asset('Asset/user_icon.svg') }}" alt="profil" class="icon-profile">
    </div>
</header>