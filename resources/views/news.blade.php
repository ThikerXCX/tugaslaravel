<x-main title="News">
    <div class="container mt-4">
        @foreach($news as $newsPost)
        <article>
            <h2><a href="/news/{{ $newsPost->slug }}">{{ $newsPost->judul_berita }}</a></h2>
            <p>{{ $newsPost->excerpt }}</p>
        </article>
        @endforeach
    </div>
</x-main>
