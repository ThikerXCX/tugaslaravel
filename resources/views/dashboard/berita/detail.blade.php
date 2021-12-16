<x-mainDashboard title="Detail">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="card-body">
                <article>
                    <h4 class="mb-3">{{ $berita->judul_berita }}</h4><hr style="background-color: white">
                    <p>{{ $berita->isi_berita }}</p>
                    <a href="{{ route('berita') }}" class="btn btn-success">Kembali ke berita utama</a>
                    <a href="/berita/{{ $berita->id }}/edit" class="btn btn-info"><i class="far fa-edit nav-icon"></i></a>
                    <a href="/berita/{{ $berita->id }}/destroy" class="btn btn-info"><i class="fas fa-trash nav-icon"></i></a>
                </article>
            </div>
        </div>
    </div>
</x-mainDashboard>