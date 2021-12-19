<x-mainDashboard title="Detail">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="card-body">
                <article>
                    <h4 class="mb-3">{{ $berita->judul_berita }}</h4><hr style="background-color: white">
                    <div>{{ $berita->isi_berita }}</div>
                    <a href="{{ route('berita') }}" class="btn btn-success">Kembali ke berita utama</a>
                    <a href="/berita/{{ $berita->id }}/edit" class="btn btn-warning"><i class="far fa-edit nav-icon"></i></a>
                    <form action="{{ route('berita.destroy',['id' => $berita->id]) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash nav-icon"></i></button>
                    </form>
                </article>
            </div>
        </div>
    </div>
</x-mainDashboard>