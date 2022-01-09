<x-mainDashboard>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <h1 class="m-0">Edit Form</h1>
                </div>
            </div>
        </div>
        <x-formberita></x-formberita>
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
        console.log(berita);
    </script>
    @endslot
</x-mainDashboard>