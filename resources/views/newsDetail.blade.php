<x-main title="News Detail">
    <div>
        <article>
            <h2 class="mb-5">{{ $newsPost->judul_berita }}</h2>
            <p>By. Muhamad Rifki dalam kategori -> {{ $newsPost->category->nama }}</p>
            {{ !! $newsPost->isi_berita }}
            <a href="/news"> kembali</a>
        </article>
    </div>
</x-main>
