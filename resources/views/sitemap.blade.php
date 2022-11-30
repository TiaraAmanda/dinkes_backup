@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="position-relative h-150">
                <h4>Sitemap</h4>
                <br>
                <span style="font-family: verdana; font-size: medium;"><a
                        href="https://dinkes.jatimprov.go.id/">Beranda</a></span>
                <div><span style="font-family: verdana; font-size: medium;"><a href="#">Institusi</a></span></div>
                <div><span style="font-family: verdana; font-size: medium;"><a
                            href="https://dinkes.jatimprov.go.id/"><span>&nbsp;&nbsp; &nbsp;</span>Visi<br />
                            <span>&nbsp;&nbsp; &nbsp;</span>Misi<br /> <span>&nbsp;&nbsp; &nbsp;</span>Tujuan<br />
                            <span>&nbsp;&nbsp; &nbsp;</span>Kebijakan<br /> <span>&nbsp;&nbsp; &nbsp;</span>Struktur
                            Organisasi</a><br /><a
                            href="https://dinkes.jatimprov.go.id/index.php?r=site/berita_detail&amp;id=11">
                            <span>&nbsp;&nbsp; &nbsp;</span>Profil Pejabat</a><br /><a
                            href="http://ppid.dinkes.jatimprov.go.id/">PPID</a><br /><a
                            href="https://dinkes.jatimprov.go.id/">Sitemap</a><br /><a
                            href="https://dinkes.jatimprov.go.id/index.php?r=site/berita_detail&amp;id=6">Kontak</a></span>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
