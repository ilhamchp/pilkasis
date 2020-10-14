<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kandidat::create( [
            'nis'=>'5100032780483130002',
            'no_kandidat'=>'1',
            'jk_kandidat'=>true,
            'visi'=>'Revolui Miftahul Huda Al-Hadi Dalam Bingkai Husnudzon | Revolusi Ekonomi | Revolusi Akhlaq',
            'misi'=>'1. Menyiapkan Fasilitas untuk menggapai Kualitas\r\n2. Memperkaya Keilmuan dan Perekonomian Pesantren\r\n3. Membentuk Santri Berilmu dan Berkarya',
            'foto'=>'1602134395050_Slide1[1].PNG'
        ] );
        
        Kandidat::create( [
            'nis'=>'5100032780483140007',
            'no_kandidat'=>'2',
            'jk_kandidat'=>true,
            'visi'=>'ROIS: Rawat, Objektif, Integritas, Solidaritas',
            'misi'=>'1. Meningkatkan Pemahaman dan Kepedulian\r\n2. Menjalin Hubungan Antar Pesantren yang Sukses\r\n3. Membiasakan 4S (Senyum, Sapa, Salam, Santun)',
            'foto'=>'1602134395050_Slide2[1] (1).PNG'
        ] );
        
        Kandidat::create( [
            'nis'=>'5100032780483120001',
            'no_kandidat'=>'3',
            'jk_kandidat'=>true,
            'visi'=>'Peningkatan santri yang berakhlaqul karimah',
            'misi'=>'1. Memaksimalkan Program yang sudah ada\r\n2. Mengoptimalkan Peran dan Fungsi Kepengurusan Pesantren\r\n3. Sikap Tadzim dan Disiplin',
            'foto'=>'1602134395050_Slide3[1].PNG'
        ] );
        
        Kandidat::create( [
            'nis'=>'5100032780483140006',
            'no_kandidat'=>'4',
            'jk_kandidat'=>true,
            'visi'=>'Peningkatan santri yang berkualitas | Peningkatan Sumber Daya Santri | Penyaluran Minat dan Bakat',
            'misi'=>'1. Melatih Kecekatan dalam Menyelesaikan Tugas\r\n2. Menciptakan Jiwa Kepemimpinan Yang bertanggung jawab, tegas, terampil dan bijaksana',
            'foto'=>'jana.PNG'
        ] );
        
        Kandidat::create( [
            'nis'=>'5100032780483110001',
            'no_kandidat'=>'5',
            'jk_kandidat'=> false,
            'visi'=>'Islami, Berprestasi,  Mandiri, Berakhlaqul Karimah',
            'misi'=>'1. Menumbuhkembangkan sikap  dan amaliyah melalui kegiatan pesantren\r\n2. Menerapkan Manajemen Partisipatif dengan melibatkan warga pesantren dan komite pesantren serta instansi terkait',
            'foto'=>'ulpa.PNG'
        ] );
        
        Kandidat::create( [
            'nis'=>'5100032780483110002',
            'no_kandidat'=>'6',
            'jk_kandidat'=> false,
            'visi'=>'Menjadikan Pesantren Lebih Unggul dalam Kedisiplinan',
            'misi'=>'1. Merealisasikan program yang belum terealisasikan\r\n2. meningkatkan kedisiplinan dan tata tertib\r\n3. menyediakan saran dan prasarana santri\r\n4. ramah lingkungan',
            'foto'=>'niar.PNG'
        ] );
    }
}
