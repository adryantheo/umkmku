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
            ['kode_akun' => 1101, 'nama_akun' => "Kas", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1102, 'nama_akun' => "Kas di Bank", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1103, 'nama_akun' => "Piutang Usaha", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1104, 'nama_akun' => "Piutang Sewa", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1105, 'nama_akun' => "Sewa Dibayar Dimuka", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1106, 'nama_akun' => "Iklan Dibayar Dimuka", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1107, 'nama_akun' => "Listrik Dibayar Dimuka", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1108, 'nama_akun' => "Asuransi Dibayar Dimuka", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1109, 'nama_akun' => "Perlengkapan", 'created_at' => new DateTime, 'updated_at' => null ],
            ['kode_akun' => 1110, 'nama_akun' => "Alat Tulis Kantor", 'created_at' => new DateTime, 'updated_at' => null ],
            //Aset Tetap
            ['kode_akun' => 1201, 'nama_akun' => "Bangunan", 'created_at' => new DateTime, 'updated_at' => null],
            ['kode_akun' => 1202,'nama_akun' => "Kendaraan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 1203,'nama_akun' => "Tanah",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 1204,'nama_akun' => "Mesin",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 1205,'nama_akun' => "Peralatan",'created_at' => new DateTime,'updated_at' => null],
            //Utang Jangka Pendek
            ['kode_akun' => 2101,'nama_akun' => "Utang Usaha",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2102,'nama_akun' => "Utang Gaji",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2103,'nama_akun' => "Utang Beban",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2104,'nama_akun' => "Utang Wesel",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2105,'nama_akun' => "Utang Bunga",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2106,'nama_akun' => "Utang Pajak",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2107,'nama_akun' => "Pendapatan Diterima Dimuka",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2108,'nama_akun' => "Pendapatan Sewa Diterima Dimuka",'created_at' => new DateTime,'updated_at' => null],
            //Utang Jangka Panjang
            ['kode_akun' => 2201,'nama_akun' => "Utang Bank",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 2202,'nama_akun' => "Utang Hipotek",'created_at' => new DateTime,'updated_at' => null],
            //Modal
            ['kode_akun' => 3101,'nama_akun' => "Modal Pemilik",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 3102,'nama_akun' => "Hibah",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 3103,'nama_akun' => "Sumbangan",'created_at' => new DateTime,'updated_at' => null],
            //Pendapatan Operasional
            ['kode_akun' => 4101,'nama_akun' => "Pendapatan Jasa",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 4102,'nama_akun' => "Pendapatan Sewa",'created_at' => new DateTime,'updated_at' => null],
            //Pendapatan Non Operasional
            ['kode_akun' => 3104,'nama_akun' => "Ikthisar Laba/Rugi",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 3105,'nama_akun' => "Laba Penjualan Aset",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 3106,'nama_akun' => "Rugi Penjualan Aset",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 4201,'nama_akun' => "Pendapatan Bunga",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 4202,'nama_akun' => "Pendapatan Lain-lain",'created_at' => new DateTime,'updated_at' => null],
            //Beban Operaisonal
            ['kode_akun' => 5101,'nama_akun' => "Beban Gaji",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5102,'nama_akun' => "Beban Sewa",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5103,'nama_akun' => "Beban Perlengkapan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5104,'nama_akun' => "Beban Listrik",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5105,'nama_akun' => "Beban Air",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5106,'nama_akun' => "Beban Telepon",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5107,'nama_akun' => "Beban Iklan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5108,'nama_akun' => "Beban Asuransi",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5109,'nama_akun' => "Beban Pemeliharaan Mesin",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5110,'nama_akun' => "Beban Pemeliharaan Kendaraan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5111,'nama_akun' => "Beban Penyusutan Mesin",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5112,'nama_akun' => "Beban Penyusutan Bangunan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5113,'nama_akun' => "Beban Penyusutan Peralatan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5114,'nama_akun' => "Beban Penyusutan Kendaraan",'created_at' => new DateTime,'updated_at' => null],
            //Beban Non Operasional
            ['kode_akun' => 5201,'nama_akun' => "Beban Bunga",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5202,'nama_akun' => "Beban Pajak",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5203,'nama_akun' => "Beban Administrasi Bank",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 5204,'nama_akun' => "Beban Kerugian Piutang Tak Tertagih",'created_at' => new DateTime,'updated_at' => null],
            //Pengembalian Ekuitas
            ['kode_akun' => 6101,'nama_akun' => "Prive Pemilik",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 6102,'nama_akun' => "Deviden",'created_at' => new DateTime,'updated_at' => null],
            //Akun Lain-Lain
            ['kode_akun' => 7101,'nama_akun' => "Akumulasi Penyusutan Mesin",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 7102,'nama_akun' => "Akumulasi Penyusutan Bangunan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 7103,'nama_akun' => "Akumulasi Penyusutan Peralatan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 7104,'nama_akun' => "Akumulasi Penyusutan Kendaraan",'created_at' => new DateTime,'updated_at' => null],
            ['kode_akun' => 7105,'nama_akun' => "Cadangan Kerugian Piutang",'created_at' => new DateTime,'updated_at' => null],

        ];
        
        DB::table('kode_akuns')->insert($kodeAkun);
    }
}
