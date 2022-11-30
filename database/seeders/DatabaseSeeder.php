<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bidang;

use App\Models\Profil;
use App\Models\Kabkota;
use App\Models\Pejabat;
use App\Models\Institusi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Bidang::create([
            'nama_bidang' => 'Sekretariat',
            'slug' => 'sekretariat'
        ]);
        Bidang::create([
            'nama_bidang' => 'Bidang Kesehatan Masyarakat',
            'slug' => 'bidang-kesehatan-masyarakat'
        ]);
        Pejabat::create([
            'posisi_jabatan' => 'Kepala Dinas Kesehatan',
        ]);
        Pejabat::create([
            'posisi_jabatan' => 'Sekretariat',
        ]);
        Pejabat::create([
            'posisi_jabatan' => 'Bidang Kesehatan Masyarakat',
        ]);
        Pejabat::create([
            'posisi_jabatan' => 'Bidang Pencegahan dan Pengendalian Penyakit',
        ]);
        Pejabat::create([
            'posisi_jabatan' => 'Bidang Pelayanan Kesehatan',
        ]);

        Kabkota::create([
            'kd_kabkota' => '35.10',
            'nama_kabkota' => 'Banyuwangi'
        ]);

        User::create([
            'username' => 'bagas',
            'nama' => 'Bagas Roberto',
            'email' => 'roberto.bagas7@gmail.com',
            'password' => bcrypt('111111')
        ]);

        Profil::create([
            'halaman_profil' => 'Visi Misi'
        ]);
        Profil::create([
            'halaman_profil' => 'Tujuan'
        ]);
        Profil::create([
            'halaman_profil' => 'Motto'
        ]);
        Profil::create([
            'halaman_profil' => 'Kebijakan'
        ]);
        Profil::create([
            'halaman_profil' => 'Struktur Organisasi'
        ]);
        Profil::create([
            'halaman_profil' => 'Profil Pejabat'
        ]);
        Profil::create([
            'halaman_profil' => 'Maklumat'
        ]);

        User::factory(3)->create();

    }
}
