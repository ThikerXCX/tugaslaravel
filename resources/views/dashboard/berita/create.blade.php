<x-mainDashboard>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <h1 class="m-0">Halaman Berita</h1>
                </div>
            </div>
        </div>
        <x-formberita></x-formberita>
    </div>
    <script>
        $('#judul_berita').on('change',function(e){
            $.get("{{ route('berita.check') }}",
            {'judul_berita': $(this).val()},
            function(data){
                $('#slug').val(data.slug);
            });
        });
    </script>
</x-mainDashboard>