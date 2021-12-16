<x-mainDashboard title="Dashboard">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"
                                ><i class="fas fa-user"></i
                            ></span>
                            <div class="info-box-content">
                                <span class="info-box-text">User</span>
                                <span class="info-box-number">
                                    {{ $users->count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"
                                ><i class="fas fa-newspaper"></i
                            ></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Post</span>
                                <span class="info-box-number">
                                    {{ $berita->count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-mainDashboard>
