<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">


    <div class="carousel-inner">

        <div class="carousel-item active">
            <img class="w-100" src="storage/{{ $slider[0]->image }}" alt="Image"
                style="max-height: 700px; width:auto;">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                        {{ $slider[0]->nama_bidang }}</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $slider[0]->judul }}</h1>
                    <a href="/{{ $slider[0]->slug }}"
                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca
                        Selengkapnya</a>
                    {{-- <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> --}}
                </div>
            </div>
        </div>


        @foreach ($slider->skip(1) as $item)
            <div class="carousel-item">
                <img class="w-100" src="/storage/{{ $item->image }}" alt="Image"
                    style="max-height: 700px; width:auto;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                            {{ $item->nama_bidang }}</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ strip_tags(Str::limit($item->judul, 50)) }}
                        </h1>
                        <a href="/{{ $item->slug }}"
                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- Navbar & Carousel End -->



<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->
