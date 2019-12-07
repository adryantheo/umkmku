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
</v-card>
</template>

<script>
export default {
    data: () => ({
        persamaanAkuntansi: 'Penggunaan dana dan pemerolehan dana harus selalu seimbang , jika terjadi ketidakseimbangan diantaranya terjadi kesalahan dalam pengelolaan dana, baik sumber maupun penggunanya.Pencatatan transaksi dicatat sesuai dengan karakteristik akun sebagai berikut: ',
    })
}
</script>

<style>

</style>