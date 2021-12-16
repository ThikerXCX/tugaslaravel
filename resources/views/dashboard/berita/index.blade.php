<x-mainDashboard title="Berita">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Halaman Berita</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-primary mb-2">Tambah Berita</a>
            <table id="example" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($berita as $i)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $i->judul_berita }}</td>
                            <td>{{ $i->category->name }}</td>
                            <td>
                                <a href="/berita/{{ $i->slug }}" class="btn btn-info"><i class="far fa-eye nav-icon"></i></a>
                                <a href="/berita/{{ $i->id }}/edit" class="btn btn-info"><i class="far fa-edit nav-icon"></i></a>
                                <a href="/berita/{{ $i->id }}/destroy" class="btn btn-info"><i class="fas fa-trash nav-icon"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-mainDashboard>
