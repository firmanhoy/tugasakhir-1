{{-- about --}}    
{{-- form saran --}}
@extends('user.index')
@section('content')
<section class="page-section" id="saran">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">K O A R</h2>
        <hr class="divider" />
        
        <div class="mb-3">
            <label for="nomorinduk" class="form-label">NIS / NIP</label>
            <input type="number" class="form-control" id="nomorinduk" placeholder="NIS untuk siswa | NIP untuk guru">
        </div>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
            </div>
            <div class="col-md-6">
                <label for="namajurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="namajurusan" placeholder="Nama Jurusan">
            </div>
            </form> 
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3"></textarea>
            </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Kartu Pengenal</label>
            <input class="form-control" type="file" id="foto">
        </div>
            {{-- <button type="submit" class="btn btn-primary"">Submit</button> --}}
            <a href="/tiket" class="btn btn-primary">Submit</a>

        {{-- <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Sturdy Themes</h3>
                    <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Up to Date</h3>
                    <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Ready to Publish</h3>
                    <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Made with Love</h3>
                    <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                </div>
            </div>
        </div> --}}

    </div>
</section>
@endsection