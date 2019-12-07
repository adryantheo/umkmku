<template>
  <v-card height="100%">
    <v-card-text>
        <p class="title font-weight-regular-bold">Kode Akun</p>
    </v-card-text>
    <v-card-text v-text="kodeAkun"></v-card-text>
    <v-flex text-xs-center>
        <img src="/materi_img/kodeAkun.png" alt="kode akun">
    </v-flex>
</v-card>
</template>

<script>
export default {
    data: () => ({
        kodeAkun:'Kode akun merupakan kode, lambang, simbol dari akun/rekening transaksi perusahaan. Penggunaan kode akun bertujuan untuk memepermudah dalam pencatatan transaksi mulai dari penjurnalan sampai dengan pembuatan laporan keuangan. Kode akun yang lazim digunakan adalah sebagai berikut: Aset (diawali dengan angka 1), utang (diawali dengan angka 2), ekuitas (diawali dengan angka 3), pendapatan (diawali dengan angka 4), biaya/beban (diawali dengan angka 5), pengembalian ekuitas (diawali dengan angka 6), akun lain-lain (diawali dengan angka 7).',
    })
}
</script>

<style>

</style>