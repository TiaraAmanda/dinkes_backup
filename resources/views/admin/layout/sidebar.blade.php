<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="/assets/images/avatar-blank.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" aria-expanded="true">
                        <span>
                            {{ auth()->user()->nama }}
                            <span class="user-level">Admin</span>

                        </span>
                    </a>


                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="/dashboard" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>

                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Halaman Website</h4>
                </li>
                <li class="nav-item">
                    <a href="/institusi">
                        <i class="fas fa-pen-square"></i>
                        <p>Institusi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms2">
                        <i class="fas fa-clipboard-list"></i>
                        <p>PPID</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms2">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/ppid/sejarah">
                                    <span class="sub-item">Sejarah</span>
                                </a>
                            </li>
                            <li>
                                <a href="/ppid/struktur-tupoksi">
                                    <span class="sub-item">Struktur Tupoksi dan SK</span>
                                </a>
                            </li>
                            <li>
                                <a href="/ppid/tata-cara-permohonan">
                                    <span class="sub-item">Tata Cara Permohonan</span>
                                </a>
                            </li>
                            <li>
                                <a href="/ppid/daftar-informasi-publik">
                                    <span class="sub-item">Daftar Informasi Publik</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms3">
                        <i class="fas fa-file-alt"></i>
                        <p>Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms3">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Poling</span>
                                </a>
                            </li>
                            <li>
                                <a href="/data/agenda">
                                    <span class="sub-item">Agenda</span>
                                </a>
                            </li>
                            <li>
                                <a href="/data/artikel">
                                    <span class="sub-item">Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a href="/data/berita">
                                    <span class="sub-item">Berita</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms4">
                        <i class="fas fa-sticky-note"></i>
                        <p>Data & Informasi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms4">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/datainformasi/dokumen-publikasi">
                                    <span class="sub-item">Dokumen & Publikasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="/datainformasi/peraturan-aturan">
                                    <span class="sub-item">Peraturan & Aturan</span>
                                </a>
                            </li>
                            <li>
                                <a href="/datainformasi/laporan-kinerja">
                                    <span class="sub-item">Laporan Kinerja</span>
                                </a>
                            </li>
                            <li>
                                <a href="/datainformasi/saka-bakti-husada">
                                    <span class="sub-item">Saka Bakti Husada</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/admin/public-corner">
                        <i class="fas fa-inbox"></i>
                        <p>Public Corner</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms6">
                        <i class="fas fa-pen-square"></i>
                        <p>Survey</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms6">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/survey/surveystrttk">
                                    <span class="sub-item">Survey Kepuasan Pelayanan STRTTK</span>
                                </a>
                            </li>
                            <li>
                                <a href="/survey/surveypuskesmas">
                                    <span class="sub-item">Survey Kepuasan Masyarakat</span>
                                </a>
                            </li>
                            <li>
                                <a href="/survey/surveykebutuhan">
                                    <span class="sub-item">Survey Kebutuhan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/survey/pelaporan">
                        <i class="fas fa-file-alt"></i>
                        <p>Pelaporan Pelanggaran</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Konfigurasi Admin</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms5">
                        <i class="fas fa-cogs"></i>
                        <p>Konfigurasi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms5">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/konfig/user">
                                    <span class="sub-item">User</span>
                                </a>
                            </li>
                            <li>
                                <a href="/konfig/bidang">
                                    <span class="sub-item">Bidang</span>
                                </a>
                            </li>
                            <li>
                                <a href="/konfig/sosial-media">
                                    <span class="sub-item">Sosial Media</span>
                                </a>
                            </li>
                            <li>
                                <a href="/konfig/popup">
                                    <span class="sub-item">Ubah Popup</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/ubah-password">
                        <i class="fas fa-cog"></i>
                        <p>Ubah Password</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
