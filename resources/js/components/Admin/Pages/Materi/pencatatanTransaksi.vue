<template>
  <v-card height="100%">
    <v-card-text>
        <p class="title font-weight-regular-bold">Pencatatan Transaksi (Pembuatan Jurnal)</p>
    </v-card-text>
    <v-card-text>Persamaan Akuntansi</v-card-text>
    <v-flex text-xs-center>
        <img src="/materi_img/persamaanTransaksi.png" alt="Persanaab akuntansi" position="center" height="auto">
    </v-flex>
    <v-card-text v-text="persamaanAkuntansi"></v-card-text>
    <v-flex text-xs-center>
        <img src="/materi_img/pencatatan_transaksi_1.jpg" alt="pencatatantransaksi1" position="center" height="auto"> 
    </v-flex>
    <v-card-text v-text="enggalJaya"></v-card-text>
    <v-flex text-xs-center>
        <img src="/materi_img/pencatatan_transaksi_2.jpg" alt="pencatatanTransaksiEnggalJaya" position="center" height="auto">
    </v-flex>
    <v-card-text>
        <p class="title font-weight-regular-bold">Perjunalan Transaksi</p>
        <p class="title font-weight-regular-bold">1. Transaksi Setoran Ekuitas</p>
        <p>Transaksi yang berupa setoran ekuitas pemilik ke perusahaan. Setoran dapat berbentuk uang tunai, perlengkapan, kendaraan, mesin, peralatan dan barang modal lainnya.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_3.jpg" alt="pencatatanTransaksi3" position="center" height="auto">
        </v-flex>
        <p>Contoh Transaksi:</p>
        <p>Tanggal 1 Desember 2018, pemilik perusahaan menyerahkan modal dan uang kas senilai Rp30.000.000,00 Pencatatan transaksi diatas adalah sebagai berikut:</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_4.jpg" alt="pencatatanTransaksi4" position="center" height="auto">
        </v-flex>
    </v-card-text>
    <v-card-text>
        <p class="title font-weight-regular-bold">2. Transaksi Pembelian Aset</p>
        <p>Transaksi pembelian aset merupakan transakasi pembelian aset untuk mendukung aktivitas kegiatan perusahaan. Pembelian dapat secara tunai atau secara kredit (utang).</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_5.jpg" alt="pencatatanTransaksi5">
        </v-flex>
        <p>Contoh Transaksi:</p>
        <p>Tanggal 2 Desember 2018, perusahaan membeli peralatan seharga Rp12.000.000,00 dengan pembayaran kredit.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_5b.jpg" alt="pencatatanTransaksi5b">
        </v-flex>
    </v-card-text>
    <v-card-text>
        <p class="title font-weight-regular-bold">3. Transaksi Beban dibayar Dimuka</p>
        <p>Transaksi beban dibayar dimuka terjadi karena perusahaan telah membayar uang untuk menggunakan sesuatu yang belum digunakan atau perusahaan belum memanfaatkanya. Kas akan berkurang, dan aset lancar (yang belum digunakan) maka akan bertambah. Akun dalam aset lancar tersebut antara lain: Sewa dibayar dimuka, Asuransi dibayar dimuka, Iklan dibayar dimuka, dan lain-lain. Ada dua cara pencatatan yaitu dengan pendekatan neraca dan pendekatan Laba/Rugi. Pendekatan neraca mencatat sebagai aset, sedangkan pendekatan laba rugi mencatat sebagai beban.</p>
        <p>Contoh Transaksi:</p>
        <p>Tanggal 2 Desember 2018,perusahaan membayar sewa bangunan untuk satu tahun kedepan senilai Rp12.000.000,00.</p>
        <p>Jurnal untuk mencatat transaksi berikut adalah</p>
        <p>1. Pencatatan menggunakan pendekatan laba/rugi(diakui sebagai beban)</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_6.jpg" alt="pencatatanTransaksi6">
        </v-flex>
        <p>2. Pencatatan menggunakan pendekatan neraca (diakui sebagai aset)</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_6b.jpg" alt="pencatatanTransaksi6b">
        </v-flex>
    </v-card-text>
    <v-card-text>
        <p class="title font-weight-regular-bold">4. Transaksi pendapatan diterima Dimuka</p>
        <p>Transaksi ini terjadi karena perusahaan telah menerima uang tetapi belum melakukan perkerjaan tersebut, hal ini menyebabkan kas (uang) perusahaan bertambah serta Pendapatan diterima dimuka (utang pendapatan juga bertambah. Pendapatan ini dapat dicatat menggunakan pendekatan laba rugi dan pendekatan neraca.</p>
        <p>Contoh Transaksi:</p>
        <p>Tanggal 2 Desember 2018 , perusahaan mendapatkan uang untuk pembayaran jasa servis  selama 3 bulan kedepan oleh Tuan Akbar senilai Rp4.500.000,00.</p>
        <p>Pecatatan transaksi tersebut adalah:</p>
        <p>a) Pencatatan dengan pendekatan laba/rugi(diakui sebagai Pendapatan)</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_7.jpg" alt="pencatatanTransaksi7">
        </v-flex>
        <p>b) Pencatatan dengan pendekatan neraca (diakui sebagai utang)</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_7b.jpg" alt="pencatatanTransaksi7b">
        </v-flex>
    </v-card-text>
    <v-card-text>
        <p class="title font-weight-regular-bold">5. Transaksi Pendapatan Jasa (Tunai dan Kredit)</p>
        <p>Transaksi pendapatan jasa terjadi karena perusahaan memberikan jasa kepada pelanggan. Pembayaran bisa di lakukan dengan 2 cara yaitu secara tunai dan secara kredit( utang).</p>
        <p>Contoh transaksi pendapatan secara tunai:</p>
        <p>Tanggal 5 Desember 2018, Tuan Andri membayar jasa servis ke perusahaan secara tunai senilai Rp10.000.000,00</p>
        <p>Pencatatan transaksi diatas adalah sebagai berikut:</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_8.jpg" alt="pencatatanTransaksi8">
        </v-flex>
        <p>Contoh transaksi pendapatan secara kredit:</p>
        <p>Tanggal 6 Desember 2018 ,perusahaan memberikan jasa servis kendaraan ke Tuan Sari senilai Rp2.000.000,00 dibayar tunai sebesar Rp1.000.000,00 sisanya 1 minggu lagi.</p>
        <p>Pencatatan transaksi diatas adalah sebagai berikut:</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_8b.jpg" alt="pencatatanTransaksi8b">
        </v-flex>
    </v-card-text>
    <!-- 6 -->
    <v-card-text>
        <p class="title font-weight-regular-bold">6. Transaksi Pembayaran Piutang dari Pelanggan</p>
        <p>Transaksi pembayaran piutang terjadi karena perusahaan memberikan jasa servis yang pembayarannya secara kredit (utang),kemudian melakukan pembayaran saat jatuh tempo.</p>
        <p>Contoh transaksi:</p>
        <p>Tanggal 12 Desember 2018 ,Tuan Sari melunasi hutang pada tanggal 6 desember senilai Rp1.000.000,00</p>
        <p>Pencatatan transaksi diatas adalah sebagai berikut:</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_9.jpg" alt="pencatatanTransaksi9">
        </v-flex>
    </v-card-text>
    <!-- 7 -->
    <v-card-text>
        <p class="title font-weight-regular-bold">7. Transaksi Penjualan Aset</p>
        <p>Transaksi penjualan aset perusahaan dapat berupa tanah,bangunan,mesin,kendaraan, peralatan dan lain-lain.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_10.jpg" alt="pencatatanTransaksi10">
        </v-flex>
        <p>Pengisian nominal harga/nominal aset saat menjual harus sesuai saat perolehan (saat membeli). Isikan nominal ke dalam kas atau piutang.</p>
        <p>Contoh transaksi:</p>
        <p>Tanggal 29 Desember 2018, perusahaan menjual aset tetap berupa kendaraan operasional kantor dengan harga Rp110.000.000,00 secara tunai. Kendaraan ini dibeli pada 30 September 2015 lalu, harga beli saat itu Rp200.000.000,00. Penyusutan aset di hitung menggunakan metode garis lurus dengan taksiran umur manfaat 10 tahun.</p>
        <p>Penyelesaian:</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_10b.jpg" alt="PencatatanTransaksi10b">
            <p>Jurnal yang harus dibuat untuk mencatat beban penyusutan:</p>
            <img src="/materi_img/pencatatan_transaksi_10c.jpg" alt="">
            <p>Jurnal untuk mencatat transaksi penjualan kendaraan tersebut adalah:</p>
            <img src="/materi_img/pencatatan_transaksi_10d.jpg" alt="">
            <p>Apabila kendaraan dijual dengan harga Rp125.000.000,00 (lebih tinggi dari nilai buku) maka penjurnalnya adalah:</p>
            <img src="/materi_img/pencatatan_transaksi_10e.jpg" alt="">
        </v-flex>
    </v-card-text>
    <!-- 8 -->
    <v-card-text>
        <p class="title font-weight-regular-bold">8. Transaksi Pinjaman dari Pihak Luar(Utang)</p>
        <p>Transaksi utang merupakan transaksi oleh pihak luar memberikan pinjaman ke perusahaan sesuai dengan ketentuan yang disepakati.</p>
        <p>Saat terjadi pinjaman:</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_11.jpg" alt="">
        </v-flex>
        <p>Contoh Transaksi:</p>
        <p>Pada tanggal 13 Desember 2018, perusahaan memperoleh pinjaman dari bank sebesar Rp50.000.000,00 secara tunai.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_11b.jpg" alt="pencatatanTransaksi11b">
        </v-flex>
        <p>Saat pelunasan utang maupun pembayaran angsuran</p>
        <p>Transaksi ini meliputi pembayaran utang maupun pembayaran angsuran ke pihak luar</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_11c.jpg" alt="pencatatanTransaksi11c">
        </v-flex>
        <p>Contoh Transaksi:</p>
        <p>Tanggal 15 Desember 2018, perusahaan melunasi hutang ke pihak luar atas pembelian peralatan (tanggal 20 September 2018) sebesar Rp10.000.000,00</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_11d.jpg" alt="pencatatanTransaksi11d">
        </v-flex>
    </v-card-text>
    <!-- 9 -->
    <v-card-text>
        <p class="title font-weight-regular-bold">9. Transaksi Pembayaran Beban</p>
        <p>Pembayaran beban merupakan kewajiban yang harus dibayarkan karena telah menggunakan jasa atau barang tertentu. Pembayaran beban meliputi beban operasional maupun beban non operasional kecuali (beban dibayar dimuka). Pembayaran beban dapat dilakukan secara tunai, kredit, maupun uang pribadi pemilik perusahaan.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_12.jpg" alt="pencatatanTransaksi12">
        </v-flex>
        <p>Contoh transaksi:</p>
        <p>Tanggal 24 Desember 2018, perusahaan membayar gaji karyawan sebesar Rp5.000.000,00, dengan ketentuhan : Rp2.000.000,00 dibayar dengan uang perusahaan, Rp2.000.000,00 dibayar akhir bulan, dan sisanya Rp1.000.000,00 dibayar menggunkan uang pribadi pemilik.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_12b.jpg" alt="pencatatanTransaksi12">
        </v-flex>        
    </v-card-text>
    <!-- 10 -->
    <v-card-text>
        <p class="title font-weight-regular-bold">10. Transaksi Pengembalian Ekuitas/Prive</p>
        <p>Pengembalian ekuitas pada perseorangan atau persekutuan, dilakukan oleh pemilik untuk mengambil barang/ jasa untuk keperluan pribadi (prive)</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_13.jpg" alt="pencatatanTransaksi13">
        </v-flex>
        <p>Contoh transaksi:</p>
        <p>Tanggal 26 Desember 2018, pemilik mengambil uang perusahaan untuk kepentingan pribadi sebesar Rp1.500.000,00 dan uang tersebut tidak dikembalikan ke perusahaan lagi.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_13b.jpg" alt="pencatatanTransaksi13b">
        </v-flex>
        <p>Tanggal 26 Desember 2018, pemilik menggunakan jasa perusahaan untuk kepentingan pribadi sebesar Rp3.000.000,00. Pemilik tidak mengembalikan uang dan dianggap sebagai prive.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_13c.jpg" alt="pencatatanTransaksi13c">
        </v-flex>        
    </v-card-text>
    <!-- 11 -->
    <v-card-text>
        <p class="title font-weight-regular-bold">11. Transaksi Barter</p>
        <p>Transaksi barter adalah pertukaran barang atau jasa. Pertukadan dapat meliputi pertukaran aset tetap dengan aset tetap, aset lancar dengan aset lancar, beban ditukar dengan pendapatan, utang ditukar dengan pendapatan, dan lain-lain.</p>
        <p>Contoh Tranasksi</p>
        <p>Tanggal 28 Desember 2018, perusahaan melakukan barter jasa dengan PT. Indo Servis untuk servis kendaraan senilai Rp800.000,00. </p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_14.jpg" alt="pencatatanTransaksi14">
        </v-flex>
        <p>Tanggal 30 Desember 2018, perusahaan membayar gaji yang masih terutang kepada karyawan dengan jasa servis sebesar Rp1.000.000,00.</p>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_14b.jpg" alt="pencatatanTransaksi14b">
        </v-flex>
        <p>Berdasarkan transaksi diatas berikut adalah jurnal umum secara keseluruhan.</p>
        <v-flex text-xs-center>
            <p class="title">Enggal Jaya</p>
            <p class="title">Jurnal Umum</p>
            <p>Untuk Periode Desember 2018 (dalam rupiah)</p>
            <img src="/materi_img/pencatatan_transaksi_14c.jpg" alt="pencatatanTransaksi14c">
            <p>Setelah membuat jurnal langkah selanjutnya memposting (pemindah bukuan) ke  buku besar. Akun akun yang terdapat dalam jurnal maupun akun-akun yang digunakan perusahaan selama satu periode dipersiapakan.</p>
            <p>Rekapitulasi Data Jurnal Umum</p>
            <img src="/materi_img/pencatatan_transaksi_14d.jpg" alt="">
        </v-flex>
        <v-flex text-xs-center>
            <img src="/materi_img/pencatatan_transaksi_14e.jpg" alt="">
            <br>
            <img src="/materi_img/pencatatan_transaksi_14f.jpg" alt="">
            <br>
            <img src="/materi_img/pencatatan_transaksi_14g.jpg" alt="">
            <br>
            <img src="/materi_img/pencatatan_transaksi_14h.jpg" alt="">
            <br>
            <img src="/materi_img/pencatatan_transaksi_14i.jpg" alt="">
            <br>
            <img src="/materi_img/pencatatan_transaksi_14j.jpg" alt="">
        </v-flex> 
    </v-card-text>
</v-card>
</template>

<script>
export default {
    data: () => ({
        persamaanAkuntansi: 'Penggunaan dana dan pemerolehan dana harus selalu seimbang , jika terjadi ketidakseimbangan diantaranya terjadi kesalahan dalam pengelolaan dana, baik sumber maupun penggunanya.Pencatatan transaksi dicatat sesuai dengan karakteristik akun sebagai berikut: ',
        enggalJaya: 'Berikut contoh serangkaian transaksi yang terjadi pada jasa servis kendaraan “Enggal Jaya” selama periode bulan desember 2018, dengan neraca saldo awal periode sebagai berikut:',
    })
}
</script>

<style>

</style>