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
        <table class="border" style="width: 90%">
        <tr>
            <th class="padding border">Elemen</th>
            <th class="padding border">Nama Akun</th>
            <th class="padding border">Pengertian</th>
        </tr>
        <tr>
            <th class="padding border">Aset</th>
            <th class="padding border">Aset Lancar</th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Kas</td>
            <td class="padding border">Aset yang disetarakan dengan uang tunai. Kas ini adalah uang tunai yang dimiliki perusahaan. Contoh kas ditangan, kas dibank, kas kecil</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Piutang Usaha/ Dagang</td>
            <td class="padding border">Aset yang berbrntuk janji kepada pelanggan untuk menyerahkan asert (berupa uang, barang, ataupun jasa) ke perusahaaan dimasa mendatang. Akun ini muncul karena penjualan kredit</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Perlengkapan</td>
            <td class="padding border">Aset yang digunakan untuk mendukung kegiatan operasional perusahaan yang memiliki masa manfaat kurang dari satu tahun, seperti pensil,pulpen,tinta, kertas.</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Sewa dibayar Dimuka</td>
            <td class="padding border">Pembayaran dimuka untuk sewa. Biasanya selama jangka waktu tertentu ke depan. Karena perusahaan belum menggunakan (misal :kendaraan) maka dianggap sebagai aset. Setelah digunakan baru diakui sebagai biaya sewa kendaraan.</td>
        </tr>
        <tr>
            <th class="padding border"></th>
            <th class="padding border">Aset Tetap</th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Tanah</td>
            <td class="padding border">Aset tetap(lazimya tidak mengalami penyusutan) yang digunkan untuk perusahaan dan tidak untuk dijual</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Bangunan</td>
            <td class="padding border">Aset tetap yang mengalami penyusutan digunkan untuk kegiatan perusahaan dan tidak untuki dijual</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Mesin</td>
            <td class="padding border">Aset tatap yang mengalami penyusutan yang diguankan  untuk kegiatan produksi dan tidak untuk dijual</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Peralatan</td>
            <td class="padding border">Aset yang digunakan untuk mendukung kegiatan operasional perusahaan yang memiliki masa manfaat lebih dari satu tahun seperti alat tulis kantor</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Merk</td>
            <td class="padding border">Aset tidak berwujud yang dimiliki perusahaan  yang merupakan citra produk dan memiliki kekuatan hukum.</td>
        </tr>
        <tr>
            <th class="padding border">Utang</th>
            <th class="padding border">Utang Lancar</th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Utang Usaha</td>
            <td class="padding border">Pinjaman yang terjadi karena pembelian secara kredit</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Utang Gaji</td>
            <td class="padding border">Pinjaman pada karyawan karena perusahaan telah mengunakan jasa mereka namun belum membayar upah</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Utang Wesel</td>
            <td class="padding border">Pinjaman dengan pihak luar dengan perjanjian tertulis</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Pendapatan diterima dimuka</td>
            <td class="padding border">Penerimaan dimuka berupa kas (uang tunai) atau barang untuk penyediaan barang dan jasa dimasa yang akan datang. Contoh: Belum melakukan pekerjaan tetapi sudah menerima uang (uang muka) berarti masih punya utang</td>
        </tr>
        <tr>
            <th class="padding border"></th>
            <th class="padding border">Utang Jangka Panjang</th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Utang bank</td>
            <td class="padding border">Pinjaman yang diperoleh dari bank yang memiliki jatuh tempo lebih dari satu tahun</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Utang hipotek</td>
            <td class="padding border">Pinjaman dari pihak luar dengan jaminan aset tetap dan masa jatuh tempo lebih dari satu tahun</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Utang obligasi</td>
            <td class="padding border">Utang yang diperoleh melalui penjualan surat obligasi</td>
        </tr>
        <tr>
            <th class="padding border"></th>
            <th class="padding border"></th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <th class="padding border">Ekuitas</th>
            <th class="padding border"></th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Modal saham</td>
            <td class="padding border">Setoran pemilik (pemegang saham) senilai nominal yang tercantum dalam saham</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Modal pemilik</td>
            <td class="padding border">Setoran modal berupa uang, barang, atau jasa ke perusahaan oleh pemilik</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Laba ditahan</td>
            <td class="padding border">Laba perusahaan yang tidak dibagikan ke pemilik (pemegang saham). Laba ditahan biasanya ada di perusahaan perseroan</td>
        </tr>
        <tr>
            <th class="padding border"></th>
            <th class="padding border"></th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <th class="padding border">Pendapatan</th>
            <th class="padding border">Pendapatan Operasional</th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Pendapatan Usaha</td>
            <td class="padding border">Pendapatan yang diperoleh perusahaan dengan menjual jasa atau melakukan pekerjaan untuk pelanggan. Contoh: pendapatan jasa, pendapatn servis, pendapatan sewa</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Penjualan</td>
            <td class="padding border">Pendapatan yang diperoleh perusahaan dengan menjual barang.</td>
        </tr>
        <tr>
            <th class="padding border"></th>
            <th class="padding border">Pendapatan non-operasional</th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Pendapatan lain-lain</td>
            <td class="padding border">Pendapatan yang diperoleh perusahaan yang bukan berasal dari kegiatan utama atau pendapatan dari aktivitas investasi. Contoh nya adalah pendapatan bunga</td>
        </tr>
        <tr>
            <th class="padding border">Biaya</th>
            <th class="padding border">Biaya Operasional</th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Biaya Gaji</td>
            <td class="padding border">Pembayaran kepada karyawan karena perusahaan telah menggunakan jasa karyawan</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Biaya utilitas</td>
            <td class="padding border">Pembayaran biaya karena perusahaan telah menggunakan air, listrik, telepon</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Biaya Penyusutan</td>
            <td class="padding border">Pengakuan biaya atas penurunan nilai aset tetap yang dimiliki perusahaan seperti mesin,gedung,kendaraan.</td>
        </tr>
        <tr>
            <th class="padding border"></th>
            <th class="padding border">Biaya non-operasional</th>
            <th class="padding border"></th>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Kerugian Penjualan aset</td>
            <td class="padding border">Pengakuan rugi akibat harga jual nilai aset tetap dibawah nilai buku aset tersebut</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Kerugian piutang tak tertagih</td>
            <td class="padding border">Pengakuan rugi karena tidak tertagihnya piutang perusahaan kepada pelanggan</td>
        </tr>
        <tr>
            <th class="padding border">Pengembalian Ekuitas</th>
            <td class="padding border">Prive</td>
            <td class="padding border">Pengambilan barang dan atau jasa oleh pemilik perusahaan</td>
        </tr>
        <tr>
            <td class="padding border"></td>
            <td class="padding border">Deviden</td>
            <td class="padding border">Pengembalian laba (perseroan) berupa uang, jasa, atau barang dari perusahaan</td>
        </tr>
        <tr>
            <th class="padding border">Akun Laba Rugi</th>
            <td class="padding border">Ikhtisar laba rugi</td>
            <td class="padding border">Menampung selisih lebih/kurang antara pendapatan dan biaya</td>
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

<style scoped>
.border {
  border: 1px solid black;
}
.padding {
  padding: 15px;
}
</style>