<div class="card-body">
    <div class="card card-prymary">
        <div class="card-header">
            <h3 class="card-title">tambah</h3>
        </div>
        <form action="{{ route('berita.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul_berita">Judul berita</label>
                    <input type="text" name="judul_berita" id="judul_berita" value="{{ $berita->judul_berita  ?? ''}}" placeholder="Judul berita" class="form-control">
                    @error('judul_berita')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" readonly name="slug" id="slug" placeholder="slug" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="custom-select rounded-0" id="category_id" name="category_id">
                        <option disabled selected>Pilih Category</option>
                        @foreach($category as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="isiberita">Isi Berita</label>
                    @error('isiberita')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    <textarea name="isi_berita" id="summernote"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
</div>
<script>
    $(function() {
        $('#summernote').summernote();
    });
</script>