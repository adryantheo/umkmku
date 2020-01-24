<?php

use Illuminate\Database\Seeder;


class KodeAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kodeAkun = 
        [
            ['kode_akun' => 1101, 'nama_akun' => "Kas", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1102, 'nama_akun' => "Kas di Bank", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1103, 'nama_akun' => "Piutang Usaha", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1104, 'nama_akun' => "Piutang Sewa", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1105, 'nama_akun' => "Sewa Dibayar Dimuka", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1106, 'nama_akun' => "Iklan Dibayar Dimuka", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1107, 'nama_akun' => "Listrik Dibayar Dimuka", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1108, 'nama_akun' => "Asuransi Dibayar Dimuka", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1109, 'nama_akun' => "Perlengkapan", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1110, 'nama_akun' => "Alat Tulis Kantor", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null ],
            //Aset Tetap
            ['kode_akun' => 1201, 'nama_akun' => "Bangunan", 'deleteable' => false, 'created_at' => new DateTime, 'updated_at' => null],
            ['kode_akun' => 1202,'nama_akun' => "Kendaraan", 'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 1203,'nama_akun' => "Tanah",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 1204,'nama_akun' => "Mesin",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 1205,'nama_akun' => "Peralatan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Utang Jangka Pendek
            ['kode_akun' => 2101,'nama_akun' => "Utang Usaha",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2102,'nama_akun' => "Utang Gaji",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2103,'nama_akun' => "Utang Beban",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2104,'nama_akun' => "Utang Wesel",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2105,'nama_akun' => "Utang Bunga",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2106,'nama_akun' => "Utang Pajak",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2107,'nama_akun' => "Pendapatan Diterima Dimuka",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2108,'nama_akun' => "Pendapatan Sewa Diterima Dimuka",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Utang Jangka Panjang
            ['kode_akun' => 2201,'nama_akun' => "Utang Bank",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2202,'nama_akun' => "Utang Hipotek",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Modal
            ['kode_akun' => 3101,'nama_akun' => "Modal Pemilik",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 3102,'nama_akun' => "Hibah",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 3103,'nama_akun' => "Sumbangan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Pendapatan Operasional
            ['kode_akun' => 4101,'nama_akun' => "Pendapatan Jasa",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 4102,'nama_akun' => "Pendapatan Sewa",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Pendapatan Non Operasional
            ['kode_akun' => 3104,'nama_akun' => "Ikthisar Laba/Rugi",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 3105,'nama_akun' => "Laba Penjualan Aset",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 3106,'nama_akun' => "Rugi Penjualan Aset",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 4201,'nama_akun' => "Pendapatan Bunga",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 4202,'nama_akun' => "Pendapatan Lain-lain",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Beban Operaisonal
            ['kode_akun' => 5101,'nama_akun' => "Beban Gaji",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5102,'nama_akun' => "Beban Sewa",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5103,'nama_akun' => "Beban Perlengkapan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5104,'nama_akun' => "Beban Listrik",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5105,'nama_akun' => "Beban Air",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5106,'nama_akun' => "Beban Telepon",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5107,'nama_akun' => "Beban Iklan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5108,'nama_akun' => "Beban Asuransi",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5109,'nama_akun' => "Beban Pemeliharaan Mesin",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5110,'nama_akun' => "Beban Pemeliharaan Kendaraan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5111,'nama_akun' => "Beban Penyusutan Mesin",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5112,'nama_akun' => "Beban Penyusutan Bangunan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5113,'nama_akun' => "Beban Penyusutan Peralatan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5114,'nama_akun' => "Beban Penyusutan Kendaraan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Beban Non Operasional
            ['kode_akun' => 5201,'nama_akun' => "Beban Bunga",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5202,'nama_akun' => "Beban Pajak",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5203,'nama_akun' => "Beban Administrasi Bank",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5204,'nama_akun' => "Beban Kerugian Piutang Tak Tertagih",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Pengembalian Ekuitas
            ['kode_akun' => 6101,'nama_akun' => "Prive Pemilik",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 6102,'nama_akun' => "Deviden",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            //Akun Lain-Lain
            ['kode_akun' => 7101,'nama_akun' => "Akumulasi Penyusutan Mesin",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 7102,'nama_akun' => "Akumulasi Penyusutan Bangunan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 7103,'nama_akun' => "Akumulasi Penyusutan Peralatan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 7104,'nama_akun' => "Akumulasi Penyusutan Kendaraan",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 7105,'nama_akun' => "Cadangan Kerugian Piutang",'deleteable' => false,'created_at' => new DateTime,'updated_at' => null],

        ];
        
        DB::table('kode_akuns')->insert($kodeAkun);
    }
}
