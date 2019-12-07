<template>
  <v-card height="100%">
    <v-card-text>
        <p class="title font-weight-regular-bold">Apa yang dimaksud dengan akuntansi?</p>
    </v-card-text>
    <v-card-text v-text="pengenalanAkuntansi"></v-card-text>
        <v-card-text>
        <p class="title font-weight-regular-bold">Siklus Akuntansi</p>
    </v-card-text>
    <v-card-text v-text="siklusAkuntansi"></v-card-text>
    <v-flex text-xs-center>
        <img src="/materi_img/siklus.png" alt="siklus akuntansi" position="justify" height="auto">
    </v-flex>
</v-card>
</template>

<script>
export default {
    data: ()=> ({
        pengenalanAkuntansi: 'Akuntansi adalah sistem informasi yang mengukur aktivitas bisnis,mengolah data menjadi laporan dan mengkomunikasikan hasilnya kepadapara pengambil keputusan. Akuntansi digunakan oleh perusahaan untukmenghasilkan informasi keuangan dalam wujud laporan keuangan.Akuntansi dapat digunakan untuk perusahaan jasa, dagang, maupun manufaktur (memproduksi barang). Adapun pihak-pihak pemakai informasi akuntansi antara lain pemilik, kreditur (pemberi pinjaman), pemerintah,investor, maupun karyawan perusahaan.',
        siklusAkuntansi: 'Siklus akuntansi merupakan proses pencatatan akuntansi mulai dari analisis bukti transaksi sampai pada neraca saldo awal periode.',
    })

}
</script>

<style>

</style>