<x-mainDashboard>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Form</h1>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card card-prymary">
                <div class="card-header">
                    <h3 class="card-title">Update</h3>
                </div>
                <form action="/berita/{{ $berita->slug }}/edit" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul_berita">Judul berita</label>
                            <input type="text" name="judul_berita" id="judul_berita" value="{{ $berita->judul_berita }}" placeholder="Judul berita" class="form-control">
                            @error('judul_berita')
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" readonly name="slug" value="{{ $berita->slug }}" id="slug" placeholder="slug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="custom-select rounded-0" id="category_id" name="category_id">
                                <option disabled selected>Pilih Category</option>
                                @foreach($category as $i)
                                    @if($i->id == $berita->category_id)
                                    <option selected value="{{ $i->id }}">{{ $i->name }}</option>
                                    @endif
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
                            <textarea name="isi_berita" id="summernote">{{ $berita->isi_berita }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @slot('js')
    <script>
        $('#judul_berita').on('change',function(e){
            $.get("{{ route('berita.check') }}",
            {'judul_berita': $(this).val()},
            function(data){
                $('#slug').val(data.slug);
            });
        });
        $(function() {
            $('#summernote').summernote();
        });
    </script>
    @endslot
</x-mainDashboard>