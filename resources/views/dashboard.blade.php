<x-layout-dashboard>
    <section id="hero">
        <h1>Selamat datang, {{ Auth::user()->name }}</h1>
        <h3>di Website UMKM Kerajinan Eksklusif</h3>
        <a href="{{ route('produk.show', 'produk') }}">
            <button class="btn">Lihat Produk</button>
        </a>
    </section>

    <section id="about">
        <h2>Tentang Kami</h2>
        <p>
            UMKM Kerajinan Eksklusif hadir untuk melestarikan seni dan budaya lokal
            melalui karya tangan berkualitas tinggi.
            Kami percaya bahwa setiap produk buatan tangan memiliki cerita,
            dan kami ingin membagikannya kepada dunia.
        </p>
    </section>

    <section id="contact">
        <h2>Kontak Kami</h2>
        <p>Email: Kelompok1@gmail.com</p>
    </section>
</x-layout-dashboard>
