<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::create( [
            'nis'=>'5100032780483110001',
            'username'=>'ulpa',
            'password'=>Hash::make('5100032780483110001'),
            'nama'=>'Ulpa Rahmawati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483110002',
            'username'=>'niar',
            'password'=>Hash::make('5100032780483110002'),
            'nama'=>'Niar Sadidah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483120001',
            'username'=>'agni',
            'password'=>Hash::make('5100032780483120001'),
            'nama'=>'M Agni Musthofa Al-Gifari',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483120002',
            'username'=>'rusli',
            'password'=>Hash::make('5100032780483120002'),
            'nama'=>'Rusli Hamzah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483130001',
            'username'=>'basit',
            'password'=>Hash::make('5100032780483130001'),
            'nama'=>'Muhammad Abdul Basit',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483130002',
            'username'=>'jajang',
            'password'=>Hash::make('5100032780483130002'),
            'nama'=>'Jajang Hermawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140001',
            'username'=>'adam',
            'password'=>Hash::make('5100032780483140001'),
            'nama'=>'Adam Firdaus Sujada',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140002',
            'username'=>'susi',
            'password'=>Hash::make('5100032780483140002'),
            'nama'=>'Susi Islamiati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140003',
            'username'=>'bidin',
            'password'=>Hash::make('5100032780483140003'),
            'nama'=>'Dinda Nur Rosyidah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140004',
            'username'=>'umi',
            'password'=>Hash::make('5100032780483140004'),
            'nama'=>'Mia Ummi Salamah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140005',
            'username'=>'brengsek',
            'password'=>Hash::make('5100032780483140005'),
            'nama'=>'Asep Yusuf Maulana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140006',
            'username'=>'jana',
            'password'=>Hash::make('5100032780483140006'),
            'nama'=>'Jana Abdul Mannan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140007',
            'username'=>'wahyu',
            'password'=>Hash::make('5100032780483140007'),
            'nama'=>'Muhammad Dadi Wahyuddin',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140009',
            'username'=>'syifa',
            'password'=>Hash::make('5100032780483140009'),
            'nama'=>'Syifa Nafisa Fadila Rohman',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140010',
            'username'=>'merry',
            'password'=>Hash::make('5100032780483140010'),
            'nama'=>'Dede Meri Siti Maryam',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150001',
            'username'=>'hilman',
            'password'=>Hash::make('5100032780483150001'),
            'nama'=>'Hilman Abdurrahman',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150002',
            'username'=>'lastri',
            'password'=>Hash::make('5100032780483150002'),
            'nama'=>'Lastri Sulastri',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150003',
            'username'=>'econ',
            'password'=>Hash::make('5100032780483150003'),
            'nama'=>'Muhammad Wildan Fauzi Zimam',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150004',
            'username'=>'uyeng',
            'password'=>Hash::make('5100032780483150004'),
            'nama'=>'Muhammad Farhan Syabana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150005',
            'username'=>'bilqis',
            'password'=>Hash::make('5100032780483150005'),
            'nama'=>'Bilqis Hildaziya Mumtaz',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160001',
            'username'=>'rahma',
            'password'=>Hash::make('5100032780483160001'),
            'nama'=>'Rahmalia Wati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160002',
            'username'=>'rifal',
            'password'=>Hash::make('5100032780483160002'),
            'nama'=>'Muhammad Rifal',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160003',
            'username'=>'assyifa',
            'password'=>Hash::make('5100032780483160003'),
            'nama'=>'Assyifa Nurul Azma',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160004',
            'username'=>'nurlingga',
            'password'=>Hash::make('5100032780483160004'),
            'nama'=>'Syifa Nurlingga',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160005',
            'username'=>'juy',
            'password'=>Hash::make('5100032780483160005'),
            'nama'=>'Wahyu Khoirul Fikri',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160006',
            'username'=>'imel',
            'password'=>Hash::make('5100032780483160006'),
            'nama'=>'Nimal Malika',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160007',
            'username'=>'faiq',
            'password'=>Hash::make('5100032780483160007'),
            'nama'=>'Faiq Fiilmillah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160008',
            'username'=>'asep',
            'password'=>Hash::make('5100032780483160008'),
            'nama'=>'Asep Ramdan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170001',
            'username'=>'zaky',
            'password'=>Hash::make('5100032780483170001'),
            'nama'=>'Muhammad Zaki Abdullah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170002',
            'username'=>'rexy',
            'password'=>Hash::make('5100032780483170002'),
            'nama'=>'Rexy Aditya Gunawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170003',
            'username'=>'rika',
            'password'=>Hash::make('5100032780483170003'),
            'nama'=>'Rika Rahayu',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170004',
            'username'=>'dani',
            'password'=>Hash::make('5100032780483170004'),
            'nama'=>'Ahmad Murdanil Arif',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170005',
            'username'=>'sendi',
            'password'=>Hash::make('5100032780483170005'),
            'nama'=>'Sendi Kirana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170006',
            'username'=>'nala',
            'password'=>Hash::make('5100032780483170006'),
            'nama'=>'Nala Latifah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170007',
            'username'=>'bi_anis',
            'password'=>Hash::make('5100032780483170007'),
            'nama'=>'Siti Rosmayanti Annisa',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170008',
            'username'=>'mikus',
            'password'=>Hash::make('5100032780483170008'),
            'nama'=>'Mia Kusmiati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170009',
            'username'=>'gabriel',
            'password'=>Hash::make('5100032780483170009'),
            'nama'=>'Gabriel Alhirosi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170010',
            'username'=>'hapid',
            'password'=>Hash::make('5100032780483170010'),
            'nama'=>'Abdul Hapid',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170011',
            'username'=>'beta',
            'password'=>Hash::make('5100032780483170011'),
            'nama'=>'Appan Septiana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170012',
            'username'=>'dzikri',
            'password'=>Hash::make('5100032780483170012'),
            'nama'=>'Muhammad Dzikri',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170013',
            'username'=>'zulfa',
            'password'=>Hash::make('5100032780483170013'),
            'nama'=>'Zulfa Tazkiatulhuda',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170014',
            'username'=>'dian',
            'password'=>Hash::make('5100032780483170014'),
            'nama'=>'Dian Darmawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170015',
            'username'=>'syamil',
            'password'=>Hash::make('5100032780483170015'),
            'nama'=>'Muhammad Syamil Muhajir',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180001',
            'username'=>'pipit',
            'password'=>Hash::make('5100032780483180001'),
            'nama'=>'Pipit Nur Azizah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180002',
            'username'=>'aida',
            'password'=>Hash::make('5100032780483180002'),
            'nama'=>'Aida',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180003',
            'username'=>'aldy',
            'password'=>Hash::make('5100032780483180003'),
            'nama'=>'Aldy Muhammad Hikam',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180004',
            'username'=>'paqot',
            'password'=>Hash::make('5100032780483180004'),
            'nama'=>'Annisa',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180005',
            'username'=>'lulu',
            'password'=>Hash::make('5100032780483180005'),
            'nama'=>'Lutfiah Latifatul Huda',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'51000327804831800055',
            'username'=>'papau',
            'password'=>Hash::make('51000327804831800055'),
            'nama'=>'Neng Siti Fauziah Nailalmuna',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180006',
            'username'=>'maki',
            'password'=>Hash::make('5100032780483180006'),
            'nama'=>'Maki Asyari',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180007',
            'username'=>'amir',
            'password'=>Hash::make('5100032780483180007'),
            'nama'=>'Amir Nur Wahid',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180008',
            'username'=>'dj',
            'password'=>Hash::make('5100032780483180008'),
            'nama'=>'Roby Dikri Jaelani',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180009',
            'username'=>'alya',
            'password'=>Hash::make('5100032780483180009'),
            'nama'=>'Alya Rahmawati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180010',
            'username'=>'nida',
            'password'=>Hash::make('5100032780483180010'),
            'nama'=>'Nidaul Hasanah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180011',
            'username'=>'goday',
            'password'=>Hash::make('5100032780483180011'),
            'nama'=>'Nandar Mulyana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180012',
            'username'=>'mufti',
            'password'=>Hash::make('5100032780483180012'),
            'nama'=>'Mufti Sunan Alfarabi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180013',
            'username'=>'mumuh',
            'password'=>Hash::make('5100032780483180013'),
            'nama'=>'Mumuh Muharrom',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180014',
            'username'=>'aci',
            'password'=>Hash::make('5100032780483180014'),
            'nama'=>'Astri Fauziah Hindasah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180015',
            'username'=>'ciwong',
            'password'=>Hash::make('5100032780483180015'),
            'nama'=>'Ridwan Febriansyah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180016',
            'username'=>'laisya',
            'password'=>Hash::make('5100032780483180016'),
            'nama'=>'Laisya Qonita Gunawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180017',
            'username'=>'uwid',
            'password'=>Hash::make('5100032780483180017'),
            'nama'=>'Widya Wulandari',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180018',
            'username'=>'mira',
            'password'=>Hash::make('5100032780483180018'),
            'nama'=>'Mira Maulida',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180019',
            'username'=>'puput',
            'password'=>Hash::make('5100032780483180019'),
            'nama'=>'Putri Najia Zayyina Zamila',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180020',
            'username'=>'thibbi',
            'password'=>Hash::make('5100032780483180020'),
            'nama'=>'Thibbi Qolbi Affandy',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180021',
            'username'=>'hazmi',
            'password'=>Hash::make('5100032780483180021'),
            'nama'=>'Muhammad Hazmi Muktafa',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180022',
            'username'=>'haura',
            'password'=>Hash::make('5100032780483180022'),
            'nama'=>'Haura Nimatul Udzma',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180023',
            'username'=>'zidan',
            'password'=>Hash::make('5100032780483180023'),
            'nama'=>'Abdillah Zidan Khadafi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180024',
            'username'=>'asepluthfi',
            'password'=>Hash::make('5100032780483180024'),
            'nama'=>'Asep Luthfi Fauzan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180025',
            'username'=>'naji',
            'password'=>Hash::make('5100032780483180025'),
            'nama'=>'Muhammad Najiyulloh',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180026',
            'username'=>'hana',
            'password'=>Hash::make('5100032780483180026'),
            'nama'=>'Hana Nurhasanah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180027',
            'username'=>'hilma',
            'password'=>Hash::make('5100032780483180027'),
            'nama'=>'Hilma Adila Zulaikho',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180028',
            'username'=>'hubba',
            'password'=>Hash::make('5100032780483180028'),
            'nama'=>'Hubbanillah Haseena Kamal',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180029',
            'username'=>'ikliema',
            'password'=>Hash::make('5100032780483180029'),
            'nama'=>'Ikliema Alya',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'51000327804831800299',
            'username'=>'cece',
            'password'=>Hash::make('51000327804831800299'),
            'nama'=>'Malha Aqila Zulaikho',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190001',
            'username'=>'syifanurulhaq',
            'password'=>Hash::make('5100032780483190001'),
            'nama'=>'Syifa Nurul Haq',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190002',
            'username'=>'hilwa',
            'password'=>Hash::make('5100032780483190002'),
            'nama'=>'Hilma Mutmainnatul Huda',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190003',
            'username'=>'windi',
            'password'=>Hash::make('5100032780483190003'),
            'nama'=>'Windi Afifah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190004',
            'username'=>'euis',
            'password'=>Hash::make('5100032780483190004'),
            'nama'=>'Euis Patul Hasanah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190005',
            'username'=>'siti',
            'password'=>Hash::make('5100032780483190005'),
            'nama'=>'Siti Nuraeni',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190006',
            'username'=>'bopak',
            'password'=>Hash::make('5100032780483190006'),
            'nama'=>'Ahmad Fadlan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190007',
            'username'=>'diana',
            'password'=>Hash::make('5100032780483190007'),
            'nama'=>'Diana Putri Handini',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190008',
            'username'=>'giska',
            'password'=>Hash::make('5100032780483190008'),
            'nama'=>'Giska Ayu Puspitasari',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190009',
            'username'=>'alvi',
            'password'=>Hash::make('5100032780483190009'),
            'nama'=>'Alvi Aziz Natasyah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190010',
            'username'=>'fasya',
            'password'=>Hash::make('5100032780483190010'),
            'nama'=>'Muhammad Fasya Danial',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190011',
            'username'=>'ramdani',
            'password'=>Hash::make('5100032780483190011'),
            'nama'=>'Dani Ramdani',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190012',
            'username'=>'dzikriinsan',
            'password'=>Hash::make('5100032780483190012'),
            'nama'=>'Dzikri Insan Tri Mulyana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190013',
            'username'=>'alfin',
            'password'=>Hash::make('5100032780483190013'),
            'nama'=>'Muhammad Alfin Nurul Azmi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190014',
            'username'=>'daud',
            'password'=>Hash::make('5100032780483190014'),
            'nama'=>'Daud Hidayat',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190015',
            'username'=>'fauzi',
            'password'=>Hash::make('5100032780483190015'),
            'nama'=>'Fauzi Muhammad Azhar',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190016',
            'username'=>'kemed',
            'password'=>Hash::make('5100032780483190016'),
            'nama'=>'Ahmad Syahid Albanani',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190017',
            'username'=>'aspar',
            'password'=>Hash::make('5100032780483190017'),
            'nama'=>'Aspar Aspin Asralian',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200001',
            'username'=>'ira',
            'password'=>Hash::make('5100032780483200001'),
            'nama'=>'Ira Rismasari Parisi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200002',
            'username'=>'wardini',
            'password'=>Hash::make('5100032780483200002'),
            'nama'=>'Wardini',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200003',
            'username'=>'dalva',
            'password'=>Hash::make('5100032780483200003'),
            'nama'=>'Dalva Zahri Aulia',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200004',
            'username'=>'firda',
            'password'=>Hash::make('5100032780483200004'),
            'nama'=>'Firda Nurfadilah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200005',
            'username'=>'dini',
            'password'=>Hash::make('5100032780483200005'),
            'nama'=>'Dini Rohmayani',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200006',
            'username'=>'zidny',
            'password'=>Hash::make('5100032780483200006'),
            'nama'=>'Zidny Mubarok Affandy',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200007',
            'username'=>'hafair',
            'password'=>Hash::make('5100032780483200007'),
            'nama'=>'Muhammad Hafair',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200008',
            'username'=>'wasilah',
            'password'=>Hash::make('5100032780483200008'),
            'nama'=>'Wasilah Wulandari Syaban',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200009',
            'username'=>'alif',
            'password'=>Hash::make('5100032780483200009'),
            'nama'=>'Ahmad Alif Faturrohman',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200010',
            'username'=>'dafa',
            'password'=>Hash::make('5100032780483200010'),
            'nama'=>'Dafa Darul Rifqi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200011',
            'username'=>'lutfia',
            'password'=>Hash::make('5100032780483200011'),
            'nama'=>'Lutfia Afifah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200012',
            'username'=>'tole',
            'password'=>Hash::make('5100032780483200012'),
            'nama'=>'Muhammad Rizqi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200013',
            'username'=>'hawaya',
            'password'=>Hash::make('5100032780483200013'),
            'nama'=>'Hawaya Najma Nabila Rohimah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200014',
            'username'=>'sahil',
            'password'=>Hash::make('5100032780483200014'),
            'nama'=>'Muhammad Sahil Makarim',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200015',
            'username'=>'dimas',
            'password'=>Hash::make('5100032780483200015'),
            'nama'=>'Dimas Adittya',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200016',
            'username'=>'sitifatimah',
            'password'=>Hash::make('5100032780483200016'),
            'nama'=>'Siti Fatimah Hamzah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200017',
            'username'=>'yanti',
            'password'=>Hash::make('5100032780483200017'),
            'nama'=>'Yanti Sumiyati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200018',
            'username'=>'sandi',
            'password'=>Hash::make('5100032780483200018'),
            'nama'=>'Sandi Habiburrohman',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200019',
            'username'=>'candra',
            'password'=>Hash::make('5100032780483200019'),
            'nama'=>'Candra Idris Darmawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'123321',
            'username'=>'admin',
            'password'=>Hash::make('admin123321'),
            'nama'=>'Admin',
            'is_admin'=>true
        ] );
    }
}
