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
              <table class="border" style="width: 90%">
                <thead>
                  <tr>
                  <th class="border padding">Tanggal</th>
                  <th class="border padding">Nama Akun & Deskripsi Transaksi</th>
                  <th class="border padding">Kode Akun</th>
                  <th class="border padding">Debet</th>
                  <th class="border padding">Kredit</th>
                </tr>
                </thead>
                <tbody>
                  <template v-for="transaksi in transaksis">
                      <tr v-for="(body,i) in transaksi.bodyTransaksi" :key="`tr-${i}`">
                          <td class="padding" v-if="i==0">
                              {{ transaksi.tanggal_transaksi }}
                          </td>
                          <td class="padding" v-else></td>
                          <template v-if="body.isKredit == true">
                          <td class="padding"  :key="`td1-${i}`">
                              &emsp;&emsp;{{ body.kodeakuns.nama_akun }}
                          </td>
                          <td class="padding" :key="`td2-${i}`">
                              {{ body.kodeakuns.kode_akun }}
                          </td>
                          <td class="padding" :key="`td3-${i}`">
                              {{ !!body.isKredit? '' : body.nominal }}
                          </td>
                          <td class="padding" :key="`td4-${i}`">
                              Rp. {{ !!body.isKredit? body.nominal : '' }}
                          </td>
                          </template>
                          <template v-else>
                            <td class="padding" :key="`td1-${i}`">
                              {{ body.kodeakuns.nama_akun }}
                          </td>
                          <td class="padding" :key="`td2-${i}`">
                              {{ body.kodeakuns.kode_akun }}
                          </td>
                          <td class="padding" :key="`td3-${i}`">
                              Rp. {{ !!body.isKredit? '' : body.nominal }}
                          </td>
                          <td class="padding" :key="`td4-${i}`">
                              {{ !!body.isKredit? body.nominal : '' }}
                          </td>                            
                          </template>
                      </tr>
                  </template>
                </tbody>
                <tfoot class="border">
                    <tr>
                      <th class="border padding" colspan="3"><b>Total</b></th>
                      <th class="border padding"><b>Rp. {{ getTotalDebit }}</b></th>
                      <th class="border padding"><b>Rp. {{ getTotalKredit}}</b></th>
                  </tr>
                </tfoot>
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
    debits: [],
    TotalDebit: null,
    TotalKredit: null,
    userId: localStorage.getItem('Id'),
  }),
  watch: {
  },

  computed: {
   getTotalKredit(){
    return this.transaksis.reduce((total1, transaksi) => {
      return total1 + transaksi.bodyTransaksi.reduce((total2, body) => {
        return total2 + (!!body.isKredit? body.nominal: 0)
      }, 0)
    }, 0)
   },

    getTotalDebit(){
     return this.transaksis.reduce((total1, transaksi) => {
      return total1 + transaksi.bodyTransaksi.reduce((total2, body) => {
        return total2 + (!!body.isKredit? 0 : body.nominal)
      }, 0)
    }, 0)
   },
    
  },
  mounted(){
    this.getTransaksis();
  },
  methods: {
    async getTransaksis(){
       axios.get('/api/transaksi-user/?Id='+ this.userId)
       .then(res => {
         this.transaksis = res.data.map(transaksi => ({
           ...transaksi,
           bodyTransaksi: [
             ...transaksi.debits.map(debit => ({
               ...debit,
               isKredit: false,
             })),
             ...transaksi.kredits.map(kredit => ({
               ...kredit,
               isKredit: true,
             }))
           ]
         }))
       })
    }

  }

}
</script>

<style scoped>
/* table,th,tfoot */
.border{
  border: 1px solid black;
}
/* th,td */
.padding{
  padding: 15px;
}
</style>