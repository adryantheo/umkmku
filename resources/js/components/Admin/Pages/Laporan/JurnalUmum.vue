<template>
  <div style="width: 100%">
    <v-container grid-list-md>
      <v-layout align-space-around justify-center fill-height>
        <v-card width=100%>
          <v-card-title class="justify-center">
            <span class="headline">Laporan Jurnal Umum</span>
          </v-card-title>
          <v-card-text>
            <v-layout justify-center>
              <table style="width: 90%">
                <thead>
                  <tr>
                  <th>Tanggal</th>
                  <th>Nama Akun & Deskripsi Transaksi</th>
                  <th>Kode Akun</th>
                  <th>Debet</th>
                  <th>Kredit</th>
                </tr>
                </thead>
                <tbody>
                  <tr v-for="(transaksi,i) in transaksis" :key="i">
                    <td>{{ transaksi.tanggal_transaksi }}</td>
                    <td>{{ transaksis.dataDebits }}</td>
                  </tr>
                </tbody>
              </table>
            </v-layout>
          </v-card-text>
        </v-card>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  data: ()=>({
    transaksis: [],
    dataDebits: [
      {
        nominal_debit: null,
      }
    ],
    // Mykodeakuns: [],
    userId: localStorage.getItem('Id'),
  }),
  watch: {

  },
  mounted(){
    this.getTransaksis();
  },
  methods: {
    async getTransaksis(){
      const res = await axios.get('/api/transaksi-user/?Id='+ this.userId);
      this.transaksis = res.data;
      this.dataDebits = this.transaksis.map(item => ({
        id: item.id,
        nominal_debit: item.nominal_debit,
      }));
      console.log(this.dataDebits);
      // this.Mykodeakuns = this.dataDebits.kodeakuns;
    }

  }

}
</script>

<style scoped>
table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 15px;
}
</style>