<template>
<div style="width: 100%">
    <v-layout justify-center align-center>
        <div class="ml-4">
            <div class="headline font-weight-bold mb-1">Materi</div>
        </div>        
    </v-layout>   
    <br>
    <v-tabs 
    fixed-tabs
    v-model="activeTab"
    color="transparent"
    slide-color="primary"
    >
            <v-tab
                v-for="(item, i) in tabItems"
                :key="i" ripple
                :href="`#tab-${i}`"
            >
                {{item.name}}
            </v-tab>
            <!-- pengenalan akutansi -->
            <v-tab-item value="tab-0">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Apa yang dimaksud dengan akuntansi?</p>
                        </v-card-text>
                        <v-card-text v-text="pengenalanAkuntansi"></v-card-text>
                         <v-card-text>
                            <p class="title font-weight-regular-bold">Siklus Akuntansi</p>
                        </v-card-text>
                        <v-card-text v-text="pengenalanAkuntansi"></v-card-text>
                        <v-flex text-xs-center>
                            <img src="/materi_img/siklus.png" alt="siklus akuntansi" position="justify" height="auto">
                        </v-flex>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- elemen dan akun" -->
            <v-tab-item value="tab-1">
                <v-layout row wrap>
                    <v-card height="100%" width="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Elemen dan Akun-Akun dalam Akuntansi</p>
                        </v-card-text>
                        <v-card-text v-text="elemenAkuntansi"></v-card-text>
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Akun</p>
                        </v-card-text>
                        <v-card-text v-text="akunAkuntansi"></v-card-text>
                        <v-layout justify-center>
                            <table style="width: 90%">
                            <tr>
                                <th>Elemen</th>
                                <th>Nama Akun</th>
                                <th>Pengertian</th>
                            </tr>
                            <tr>
                                <th>Aset</th>
                                <th>Aset Lancar</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Kas</td>
                                <td>Aset yang disetarakan dengan uang tunai. Kas ini adalah uang tunai yang dimiliki perusahaan. Contoh kas ditangan, kas dibank, kas kecil</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Piutang Usaha/ Dagang</td>
                                <td>Aset yang berbrntuk janji kepada pelanggan untuk menyerahkan asert (berupa uang, barang, ataupun jasa) ke perusahaaan dimasa mendatang. Akun ini muncul karena penjualan kredit</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Perlengkapan</td>
                                <td>Aset yang digunakan untuk mendukung kegiatan operasional perusahaan yang memiliki masa manfaat kurang dari satu tahun, seperti pensil,pulpen,tinta, kertas.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sewa dibayar Dimuka</td>
                                <td>Pembayaran dimuka untuk sewa. Biasanya selama jangka waktu tertentu ke depan. Karena perusahaan belum menggunakan (misal :kendaraan) maka dianggap sebagai aset. Setelah digunakan baru diakui sebagai biaya sewa kendaraan.</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Aset Tetap</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Tanah</td>
                                <td>Aset tetap(lazimya tidak mengalami penyusutan) yang digunkan untuk perusahaan dan tidak untuk dijual</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bangunan</td>
                                <td>Aset tetap yang mengalami penyusutan digunkan untuk kegiatan perusahaan dan tidak untuki dijual</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Mesin</td>
                                <td>Aset tatap yang mengalami penyusutan yang diguankan  untuk kegiatan produksi dan tidak untuk dijual</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Peralatan</td>
                                <td>Aset yang digunakan untuk mendukung kegiatan operasional perusahaan yang memiliki masa manfaat lebih dari satu tahun seperti alat tulis kantor</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Merk</td>
                                <td>Aset tidak berwujud yang dimiliki perusahaan  yang merupakan citra produk dan memiliki kekuatan hukum.</td>
                            </tr>
                            <tr>
                                <th>Utang</th>
                                <th>Utang Lancar</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Utang Usaha</td>
                                <td>Pinjaman yang terjadi karena pembelian secara kredit</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Utang Gaji</td>
                                <td>Pinjaman pada karyawan karena perusahaan telah mengunakan jasa mereka namun belum membayar upah</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Utang Wesel</td>
                                <td>Pinjaman dengan pihak luar dengan perjanjian tertulis</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Pendapatan diterima dimuka</td>
                                <td>Penerimaan dimuka berupa kas (uang tunai) atau barang untuk penyediaan barang dan jasa dimasa yang akan datang. Contoh: Belum melakukan pekerjaan tetapi sudah menerima uang (uang muka) berarti masih punya utang</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Utang Jangka Panjang</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Utang bank</td>
                                <td>Pinjaman yang diperoleh dari bank yang memiliki jatuh tempo lebih dari satu tahun</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Utang hipotek</td>
                                <td>Pinjaman dari pihak luar dengan jaminan aset tetap dan masa jatuh tempo lebih dari satu tahun</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Utang obligasi</td>
                                <td>Utang yang diperoleh melalui penjualan surat obligasi</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>Ekuitas</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Modal saham</td>
                                <td>Setoran pemilik (pemegang saham) senilai nominal yang tercantum dalam saham</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Modal pemilik</td>
                                <td>Setoran modal berupa uang, barang, atau jasa ke perusahaan oleh pemilik</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Laba ditahan</td>
                                <td>Laba perusahaan yang tidak dibagikan ke pemilik (pemegang saham). Laba ditahan biasanya ada di perusahaan perseroan</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>Pendapatan</th>
                                <th>Pendapatan Operasional</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Pendapatan Usaha</td>
                                <td>Pendapatan yang diperoleh perusahaan dengan menjual jasa atau melakukan pekerjaan untuk pelanggan. Contoh: pendapatan jasa, pendapatn servis, pendapatan sewa</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Penjualan</td>
                                <td>Pendapatan yang diperoleh perusahaan dengan menjual barang.</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Pendapatan non-operasional</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Pendapatan lain-lain</td>
                                <td>Pendapatan yang diperoleh perusahaan yang bukan berasal dari kegiatan utama atau pendapatan dari aktivitas investasi. Contoh nya adalah pendapatan bunga</td>
                            </tr>
                            <tr>
                                <th>Biaya</th>
                                <th>Biaya Operasional</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Biaya Gaji</td>
                                <td>Pembayaran kepada karyawan karena perusahaan telah menggunakan jasa karyawan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Biaya utilitas</td>
                                <td>Pembayaran biaya karena perusahaan telah menggunakan air, listrik, telepon</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Biaya Penyusutan</td>
                                <td>Pengakuan biaya atas penurunan nilai aset tetap yang dimiliki perusahaan seperti mesin,gedung,kendaraan.</td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>Biaya non-operasional</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Kerugian Penjualan aset</td>
                                <td>Pengakuan rugi akibat harga jual nilai aset tetap dibawah nilai buku aset tersebut</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Kerugian piutang tak tertagih</td>
                                <td>Pengakuan rugi karena tidak tertagihnya piutang perusahaan kepada pelanggan</td>
                            </tr>
                            <tr>
                                <th>Pengembalian Ekuitas</th>
                                <td>Prive</td>
                                <td>Pengambilan barang dan atau jasa oleh pemilik perusahaan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Deviden</td>
                                <td>Pengembalian laba (perseroan) berupa uang, jasa, atau barang dari perusahaan</td>
                            </tr>
                            <tr>
                                <th>Akun Laba Rugi</th>
                                <td>Ikhtisar laba rugi</td>
                                <td>Menampung selisih lebih/kurang antara pendapatan dan biaya</td>
                            </tr>
                            <tr></tr>
                            </table>
                        </v-layout>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Kode Akun -->
            <v-tab-item value="tab-2">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Kode Akun</p>
                        </v-card-text>
                        <v-card-text v-text="kodeAkun"></v-card-text>
                        <v-flex text-xs-center>
                            <img src="/materi_img/kodeAkun.png" alt="kode akun">
                        </v-flex>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Pencatatan Transaksi -->
            <v-tab-item value="tab-3">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Pencatatan Transaksi (Pembuatan Jurnal)</p>
                        </v-card-text>
                        <v-card-text>Persamaan Akuntansi</v-card-text>
                        <v-flex text-xs-center>
                            <img src="/materi_img/persamaanTransaksi.png" alt="Persanaab akuntansi" position="center" height="auto">
                        </v-flex>
                        <v-card-text v-text="persamaanAkuntansi"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Penyesuiaan -->
            <v-tab-item value="tab-4">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Penyesuaian:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Manfaat" -->
            <v-tab-item value="tab-5">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Manfaat:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Jurnal Penutup -->
            <v-tab-item value="tab-6">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Jurnal Penutup:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
    </v-tabs>
</div>
</template>

<script>
export default {
    data: () => ({
        activeTab: null,
        pengenalanAkuntansi: 'Akuntansi adalah sistem informasi yang mengukur aktivitas bisnis,mengolah data menjadi laporan dan mengkomunikasikan hasilnya kepadapara pengambil keputusan. Akuntansi digunakan oleh perusahaan untukmenghasilkan informasi keuangan dalam wujud laporan keuangan.Akuntansi dapat digunakan untuk perusahaan jasa, dagang, maupun manufaktur (memproduksi barang). Adapun pihak-pihak pemakai informasi akuntansi antara lain pemilik, kreditur (pemberi pinjaman), pemerintah,investor, maupun karyawan perusahaan.',
        siklusAkuntansi: 'Siklus akuntansi merupakan proses pencatatan akuntansi mulai dari analisis bukti transaksi sampai pada neraca saldo awal periode.',
        elemenAkuntansi: 'Dalam akuntansi terdapat enam elemen penting, antara lain: Aset, Utang, Ekuitas, Pendapatan, Beban/Biaya, Pengembalian Ekuitas.',
        akunAkuntansi: 'Akun merupakan komponen suatu elemen laporan keuangan.',
        kodeAkun:'Kode akun merupakan kode, lambang, simbol dari akun/rekening transaksi perusahaan. Penggunaan kode akun bertujuan untuk memepermudah dalam pencatatan transaksi mulai dari penjurnalan sampai dengan pembuatan laporan keuangan. Kode akun yang lazim digunakan adalah sebagai berikut: Aset (diawali dengan angka 1), utang (diawali dengan angka 2), ekuitas (diawali dengan angka 3), pendapatan (diawali dengan angka 4), biaya/beban (diawali dengan angka 5), pengembalian ekuitas (diawali dengan angka 6), akun lain-lain (diawali dengan angka 7).',
        persamaanAkuntansi: 'Penggunaan dana dan pemerolehan dana harus selalu seimbang , jika terjadi ketidakseimbangan diantaranya terjadi kesalahan dalam pengelolaan dana, baik sumber maupun penggunanya.Pencatatan transaksi dicatat sesuai dengan karakteristik akun sebagai berikut: ',
        tabItems: [
            {name: "Pengenalan Akutansi"},
            {name: "Elemen dan Akun-Akun Dalam Laporan Keuangan"},
            {name: "Kode Akun"},
            {name: "Pencatatan Transaksi Kedalam Jurnal"},
            {name: "Penyesuaian"},
            {name: "Macam-Macam dan Manfaat Laporan Keuangan"},
            {name: "Jurnal Penutup dan Pembalik"},
        ],
    }),
    
}
</script>
<style>
table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 15px;
}
</style>