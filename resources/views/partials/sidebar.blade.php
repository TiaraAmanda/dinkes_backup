    <!-- Side Bar -->
    <div class="col-lg-4">
        <!-- Recent Post Start -->
        <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                <h3 class="mb-0">Kabar Terkini</h3>
            </div>

            @foreach ($kabarsidebar as $item)
                <div class="d-flex rounded overflow-hidden mb-3">
                    <img class="img-fluid" src="/storage/{{ $item->image }}"
                        style="width: 80px; height: 80px; object-fit: cover;" alt="">
                    <a href="/{{ $item->slug }}" class="h7 fw d-flex align-items-center bg-light px-3 mb-0"
                        style="width: 300px;">{{ Str::limit($item->judul, 50) }}
                    </a>
                </div>
            @endforeach

        </div>
        <!-- Recent Post End -->
        <!-- Hari Besar Start -->
        <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                <h3 class="mb-0">Hari Besar</h3>
            </div>

            @foreach ($agenda as $item)
                <div class="d-flex rounded overflow-hidden mb-3">
                    <div class="h7 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"
                        style="grid-gap: 1rem; width:400px;">
                        <p style="margin-top:1rem">
                            <i class="fa-solid fa-calendar-days fa-2x"></i>
                        </p>
                        {{ $item->tanggal_agenda }} <br>
                        {{ $item->nama_agenda }}

                    </div>

                </div>
            @endforeach

        </div>
        <!-- Hari Besar End -->
    </div>
