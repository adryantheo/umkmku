<template>
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
</template>

<script>
export default {
    data: ()=> ({
       elemenAkuntansi: 'Dalam akuntansi terdapat enam elemen penting, antara lain: Aset, Utang, Ekuitas, Pendapatan, Beban/Biaya, Pengembalian Ekuitas.',
       akunAkuntansi: 'Akun merupakan komponen suatu elemen laporan keuangan.', 
    })
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