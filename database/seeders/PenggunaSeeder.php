<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;

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
            'password'=>bcrypt('5100032780483110001'),
            'nama'=>'Ulpa Rahmawati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483110002',
            'username'=>'niar',
            'password'=>bcrypt('5100032780483110002'),
            'nama'=>'Niar Sadidah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483120001',
            'username'=>'agni',
            'password'=>bcrypt('5100032780483120001'),
            'nama'=>'M Agni Musthofa Al-Gifari',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483120002',
            'username'=>'rusli',
            'password'=>bcrypt('5100032780483120002'),
            'nama'=>'Rusli Hamzah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483130001',
            'username'=>'basit',
            'password'=>bcrypt('5100032780483130001'),
            'nama'=>'Muhammad Abdul Basit',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483130002',
            'username'=>'jajang',
            'password'=>bcrypt('5100032780483130002'),
            'nama'=>'Jajang Hermawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140001',
            'username'=>'adam',
            'password'=>bcrypt('5100032780483140001'),
            'nama'=>'Adam Firdaus Sujada',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140002',
            'username'=>'susi',
            'password'=>bcrypt('5100032780483140002'),
            'nama'=>'Susi Islamiati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140003',
            'username'=>'bidin',
            'password'=>bcrypt('5100032780483140003'),
            'nama'=>'Dinda Nur Rosyidah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140004',
            'username'=>'umi',
            'password'=>bcrypt('5100032780483140004'),
            'nama'=>'Mia Ummi Salamah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140005',
            'username'=>'brengsek',
            'password'=>bcrypt('5100032780483140005'),
            'nama'=>'Asep Yusuf Maulana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140006',
            'username'=>'jana',
            'password'=>bcrypt('5100032780483140006'),
            'nama'=>'Jana Abdul Mannan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140007',
            'username'=>'wahyu',
            'password'=>bcrypt('5100032780483140007'),
            'nama'=>'Muhammad Dadi Wahyuddin',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140009',
            'username'=>'syifa',
            'password'=>bcrypt('5100032780483140009'),
            'nama'=>'Syifa Nafisa Fadila Rohman',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483140010',
            'username'=>'merry',
            'password'=>bcrypt('5100032780483140010'),
            'nama'=>'Dede Meri Siti Maryam',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150001',
            'username'=>'hilman',
            'password'=>bcrypt('5100032780483150001'),
            'nama'=>'Hilman Abdurrahman',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150002',
            'username'=>'lastri',
            'password'=>bcrypt('5100032780483150002'),
            'nama'=>'Lastri Sulastri',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150003',
            'username'=>'econ',
            'password'=>bcrypt('5100032780483150003'),
            'nama'=>'Muhammad Wildan Fauzi Zimam',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150004',
            'username'=>'uyeng',
            'password'=>bcrypt('5100032780483150004'),
            'nama'=>'Muhammad Farhan Syabana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483150005',
            'username'=>'bilqis',
            'password'=>bcrypt('5100032780483150005'),
            'nama'=>'Bilqis Hildaziya Mumtaz',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160001',
            'username'=>'rahma',
            'password'=>bcrypt('5100032780483160001'),
            'nama'=>'Rahmalia Wati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160002',
            'username'=>'rifal',
            'password'=>bcrypt('5100032780483160002'),
            'nama'=>'Muhammad Rifal',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160003',
            'username'=>'assyifa',
            'password'=>bcrypt('5100032780483160003'),
            'nama'=>'Assyifa Nurul Azma',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160004',
            'username'=>'nurlingga',
            'password'=>bcrypt('5100032780483160004'),
            'nama'=>'Syifa Nurlingga',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160005',
            'username'=>'juy',
            'password'=>bcrypt('5100032780483160005'),
            'nama'=>'Wahyu Khoirul Fikri',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160006',
            'username'=>'imel',
            'password'=>bcrypt('5100032780483160006'),
            'nama'=>'Nimal Malika',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160007',
            'username'=>'faiq',
            'password'=>bcrypt('5100032780483160007'),
            'nama'=>'Faiq Fiilmillah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483160008',
            'username'=>'asep',
            'password'=>bcrypt('5100032780483160008'),
            'nama'=>'Asep Ramdan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170001',
            'username'=>'zaky',
            'password'=>bcrypt('5100032780483170001'),
            'nama'=>'Muhammad Zaki Abdullah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170002',
            'username'=>'rexy',
            'password'=>bcrypt('5100032780483170002'),
            'nama'=>'Rexy Aditya Gunawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170003',
            'username'=>'rika',
            'password'=>bcrypt('5100032780483170003'),
            'nama'=>'Rika Rahayu',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170004',
            'username'=>'dani',
            'password'=>bcrypt('5100032780483170004'),
            'nama'=>'Ahmad Murdanil Arif',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170005',
            'username'=>'sendi',
            'password'=>bcrypt('5100032780483170005'),
            'nama'=>'Sendi Kirana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170006',
            'username'=>'nala',
            'password'=>bcrypt('5100032780483170006'),
            'nama'=>'Nala Latifah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170007',
            'username'=>'bi_anis',
            'password'=>bcrypt('5100032780483170007'),
            'nama'=>'Siti Rosmayanti Annisa',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170008',
            'username'=>'mikus',
            'password'=>bcrypt('5100032780483170008'),
            'nama'=>'Mia Kusmiati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170009',
            'username'=>'gabriel',
            'password'=>bcrypt('5100032780483170009'),
            'nama'=>'Gabriel Alhirosi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170010',
            'username'=>'hapid',
            'password'=>bcrypt('5100032780483170010'),
            'nama'=>'Abdul Hapid',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170011',
            'username'=>'beta',
            'password'=>bcrypt('5100032780483170011'),
            'nama'=>'Appan Septiana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170012',
            'username'=>'dzikri',
            'password'=>bcrypt('5100032780483170012'),
            'nama'=>'Muhammad Dzikri',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170013',
            'username'=>'zulfa',
            'password'=>bcrypt('5100032780483170013'),
            'nama'=>'Zulfa Tazkiatulhuda',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170014',
            'username'=>'dian',
            'password'=>bcrypt('5100032780483170014'),
            'nama'=>'Dian Darmawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483170015',
            'username'=>'syamil',
            'password'=>bcrypt('5100032780483170015'),
            'nama'=>'Muhammad Syamil Muhajir',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180001',
            'username'=>'pipit',
            'password'=>bcrypt('5100032780483180001'),
            'nama'=>'Pipit Nur Azizah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180002',
            'username'=>'aida',
            'password'=>bcrypt('5100032780483180002'),
            'nama'=>'Aida',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180003',
            'username'=>'aldy',
            'password'=>bcrypt('5100032780483180003'),
            'nama'=>'Aldy Muhammad Hikam',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180004',
            'username'=>'paqot',
            'password'=>bcrypt('5100032780483180004'),
            'nama'=>'Annisa',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180005',
            'username'=>'lulu',
            'password'=>bcrypt('5100032780483180005'),
            'nama'=>'Lutfiah Latifatul Huda',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'51000327804831800055',
            'username'=>'papau',
            'password'=>bcrypt('51000327804831800055'),
            'nama'=>'Neng Siti Fauziah Nailalmuna',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180006',
            'username'=>'maki',
            'password'=>bcrypt('5100032780483180006'),
            'nama'=>'Maki Asyari',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180007',
            'username'=>'amir',
            'password'=>bcrypt('5100032780483180007'),
            'nama'=>'Amir Nur Wahid',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180008',
            'username'=>'dj',
            'password'=>bcrypt('5100032780483180008'),
            'nama'=>'Roby Dikri Jaelani',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180009',
            'username'=>'alya',
            'password'=>bcrypt('5100032780483180009'),
            'nama'=>'Alya Rahmawati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180010',
            'username'=>'nida',
            'password'=>bcrypt('5100032780483180010'),
            'nama'=>'Nidaul Hasanah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180011',
            'username'=>'goday',
            'password'=>bcrypt('5100032780483180011'),
            'nama'=>'Nandar Mulyana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180012',
            'username'=>'mufti',
            'password'=>bcrypt('5100032780483180012'),
            'nama'=>'Mufti Sunan Alfarabi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180013',
            'username'=>'mumuh',
            'password'=>bcrypt('5100032780483180013'),
            'nama'=>'Mumuh Muharrom',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180014',
            'username'=>'aci',
            'password'=>bcrypt('5100032780483180014'),
            'nama'=>'Astri Fauziah Hindasah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180015',
            'username'=>'ciwong',
            'password'=>bcrypt('5100032780483180015'),
            'nama'=>'Ridwan Febriansyah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180016',
            'username'=>'laisya',
            'password'=>bcrypt('5100032780483180016'),
            'nama'=>'Laisya Qonita Gunawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180017',
            'username'=>'uwid',
            'password'=>bcrypt('5100032780483180017'),
            'nama'=>'Widya Wulandari',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180018',
            'username'=>'mira',
            'password'=>bcrypt('5100032780483180018'),
            'nama'=>'Mira Maulida',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180019',
            'username'=>'puput',
            'password'=>bcrypt('5100032780483180019'),
            'nama'=>'Putri Najia Zayyina Zamila',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180020',
            'username'=>'thibbi',
            'password'=>bcrypt('5100032780483180020'),
            'nama'=>'Thibbi Qolbi Affandy',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180021',
            'username'=>'hazmi',
            'password'=>bcrypt('5100032780483180021'),
            'nama'=>'Muhammad Hazmi Muktafa',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180022',
            'username'=>'haura',
            'password'=>bcrypt('5100032780483180022'),
            'nama'=>'Haura Nimatul Udzma',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180023',
            'username'=>'zidan',
            'password'=>bcrypt('5100032780483180023'),
            'nama'=>'Abdillah Zidan Khadafi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180024',
            'username'=>'asepluthfi',
            'password'=>bcrypt('5100032780483180024'),
            'nama'=>'Asep Luthfi Fauzan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180025',
            'username'=>'naji',
            'password'=>bcrypt('5100032780483180025'),
            'nama'=>'Muhammad Najiyulloh',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180026',
            'username'=>'hana',
            'password'=>bcrypt('5100032780483180026'),
            'nama'=>'Hana Nurhasanah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180027',
            'username'=>'hilma',
            'password'=>bcrypt('5100032780483180027'),
            'nama'=>'Hilma Adila Zulaikho',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180028',
            'username'=>'hubba',
            'password'=>bcrypt('5100032780483180028'),
            'nama'=>'Hubbanillah Haseena Kamal',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483180029',
            'username'=>'ikliema',
            'password'=>bcrypt('5100032780483180029'),
            'nama'=>'Ikliema Alya',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'51000327804831800299',
            'username'=>'cece',
            'password'=>bcrypt('51000327804831800299'),
            'nama'=>'Malha Aqila Zulaikho',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190001',
            'username'=>'syifanurulhaq',
            'password'=>bcrypt('5100032780483190001'),
            'nama'=>'Syifa Nurul Haq',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190002',
            'username'=>'hilwa',
            'password'=>bcrypt('5100032780483190002'),
            'nama'=>'Hilma Mutmainnatul Huda',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190003',
            'username'=>'windi',
            'password'=>bcrypt('5100032780483190003'),
            'nama'=>'Windi Afifah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190004',
            'username'=>'euis',
            'password'=>bcrypt('5100032780483190004'),
            'nama'=>'Euis Patul Hasanah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190005',
            'username'=>'siti',
            'password'=>bcrypt('5100032780483190005'),
            'nama'=>'Siti Nuraeni',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190006',
            'username'=>'bopak',
            'password'=>bcrypt('5100032780483190006'),
            'nama'=>'Ahmad Fadlan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190007',
            'username'=>'diana',
            'password'=>bcrypt('5100032780483190007'),
            'nama'=>'Diana Putri Handini',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190008',
            'username'=>'giska',
            'password'=>bcrypt('5100032780483190008'),
            'nama'=>'Giska Ayu Puspitasari',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190009',
            'username'=>'alvi',
            'password'=>bcrypt('5100032780483190009'),
            'nama'=>'Alvi Aziz Natasyah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190010',
            'username'=>'fasya',
            'password'=>bcrypt('5100032780483190010'),
            'nama'=>'Muhammad Fasya Danial',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190011',
            'username'=>'ramdani',
            'password'=>bcrypt('5100032780483190011'),
            'nama'=>'Dani Ramdani',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190012',
            'username'=>'dzikriinsan',
            'password'=>bcrypt('5100032780483190012'),
            'nama'=>'Dzikri Insan Tri Mulyana',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190013',
            'username'=>'alfin',
            'password'=>bcrypt('5100032780483190013'),
            'nama'=>'Muhammad Alfin Nurul Azmi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190014',
            'username'=>'daud',
            'password'=>bcrypt('5100032780483190014'),
            'nama'=>'Daud Hidayat',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190015',
            'username'=>'fauzi',
            'password'=>bcrypt('5100032780483190015'),
            'nama'=>'Fauzi Muhammad Azhar',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190016',
            'username'=>'kemed',
            'password'=>bcrypt('5100032780483190016'),
            'nama'=>'Ahmad Syahid Albanani',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483190017',
            'username'=>'aspar',
            'password'=>bcrypt('5100032780483190017'),
            'nama'=>'Aspar Aspin Asralian',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200001',
            'username'=>'ira',
            'password'=>bcrypt('5100032780483200001'),
            'nama'=>'Ira Rismasari Parisi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200002',
            'username'=>'wardini',
            'password'=>bcrypt('5100032780483200002'),
            'nama'=>'Wardini',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200003',
            'username'=>'dalva',
            'password'=>bcrypt('5100032780483200003'),
            'nama'=>'Dalva Zahri Aulia',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200004',
            'username'=>'firda',
            'password'=>bcrypt('5100032780483200004'),
            'nama'=>'Firda Nurfadilah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200005',
            'username'=>'dini',
            'password'=>bcrypt('5100032780483200005'),
            'nama'=>'Dini Rohmayani',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200006',
            'username'=>'zidny',
            'password'=>bcrypt('5100032780483200006'),
            'nama'=>'Zidny Mubarok Affandy',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200007',
            'username'=>'hafair',
            'password'=>bcrypt('5100032780483200007'),
            'nama'=>'Muhammad Hafair',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200008',
            'username'=>'wasilah',
            'password'=>bcrypt('5100032780483200008'),
            'nama'=>'Wasilah Wulandari Syaban',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200009',
            'username'=>'alif',
            'password'=>bcrypt('5100032780483200009'),
            'nama'=>'Ahmad Alif Faturrohman',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200010',
            'username'=>'dafa',
            'password'=>bcrypt('5100032780483200010'),
            'nama'=>'Dafa Darul Rifqi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200011',
            'username'=>'lutfia',
            'password'=>bcrypt('5100032780483200011'),
            'nama'=>'Lutfia Afifah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200012',
            'username'=>'tole',
            'password'=>bcrypt('5100032780483200012'),
            'nama'=>'Muhammad Rizqi',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200013',
            'username'=>'hawaya',
            'password'=>bcrypt('5100032780483200013'),
            'nama'=>'Hawaya Najma Nabila Rohimah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200014',
            'username'=>'sahil',
            'password'=>bcrypt('5100032780483200014'),
            'nama'=>'Muhammad Sahil Makarim',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200015',
            'username'=>'dimas',
            'password'=>bcrypt('5100032780483200015'),
            'nama'=>'Dimas Adittya',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200016',
            'username'=>'sitifatimah',
            'password'=>bcrypt('5100032780483200016'),
            'nama'=>'Siti Fatimah Hamzah',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200017',
            'username'=>'yanti',
            'password'=>bcrypt('5100032780483200017'),
            'nama'=>'Yanti Sumiyati',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200018',
            'username'=>'sandi',
            'password'=>bcrypt('5100032780483200018'),
            'nama'=>'Sandi Habiburrohman',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'5100032780483200019',
            'username'=>'candra',
            'password'=>bcrypt('5100032780483200019'),
            'nama'=>'Candra Idris Darmawan',
            'is_admin'=>false
        ] );
        
        Pengguna::create( [
            'nis'=>'123321',
            'username'=>'admin',
            'password'=>bcrypt('admin123321'),
            'nama'=>'Admin',
            'is_admin'=>true
        ] );
    }
}
