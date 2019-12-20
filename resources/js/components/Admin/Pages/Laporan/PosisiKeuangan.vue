<template>
  <div style="width: 100%">
    <v-container grid-list-md>
      <v-layout align-space-around justify-center fill-height>
          <v-flex xs12 sm6 md4>
            <v-select :items="bulan" v-model="getBulan" label="Bulan"></v-select>
          </v-flex>
          <v-flex xs12 sm6 md4>
            <v-select :items="tahun" v-model="getTahun" label="Tahun"></v-select>
          </v-flex>
      </v-layout>
      <v-layout align-space-around justify-center fill-height>
        <v-card width="100%">
          <v-card-title class="justify-center">
            <span class="headline">Laporan Perubahan Ekuitas</span>
          </v-card-title>
          <v-card-title class="justify-center">
            <span class="headline">Periode {{ getBulan }} {{ getTahun }}</span>
          </v-card-title>
          <v-card-title class="justify-center">
            <span class="headline">ASET</span>
          </v-card-title>
          <v-layout justify-center>
              <table class="border" style="width: 90%">
                <thead>
                </thead>
                <tbody>
                  <template>
                    <tr>
                        <th class="border padding" colspan="2"><b>Modal Awal Per Tanggal 1 {{getBulan}}</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Tambahan Modal</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Laba Atau Rugi Periode Berjalan</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Prive</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Penambahan atau Pengurangan Modal</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Modal per 31 Desember 2019</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                  </template>
                </tbody>
              </table>
            </v-layout>
            <br>
            <v-card-title class="justify-center">
              <span class="headline">UTANG DAN EKUITAS</span>
            </v-card-title>
            <v-layout justify-center>
              <table class="border" style="width: 90%">
                <thead>
                </thead>
                <tbody>
                  <template>
                    <tr>
                        <th class="border padding" colspan="2"><b>Modal Awal Per Tanggal 1 {{getBulan}}</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Tambahan Modal</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Laba Atau Rugi Periode Berjalan</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Prive</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Penambahan atau Pengurangan Modal</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                    <tr>
                        <th class="border padding" colspan="2"><b>Modal per 31 Desember 2019</b></th>
                        <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                    </tr>
                  </template>
                </tbody>
              </table>
            </v-layout>
        </v-card>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  name: 'LabaRugi',
  data: () => ({
    bulan: ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
    tahun: ['2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021'],
    getBulan: '',
    getTahun: '',
    transaksis: [],
    debits: [],
    TotalDebit: null,
    TotalKredit: null,
    userId: localStorage.getItem('Id'),
  }),
  watch: {
    'getBulan': function(){
      return this.getBulan;
    },
    'getTahun': function(){
      return this.getTahun;
    } 
  },
  mounted(){
    this.getTransaksis();

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
  methods:{
    async getTransaksis(){
       axios.get('/api/transaksi-user/?Id='+ this.userId)
       .then(res => {
         this.transaksis = res.data.map(transaksi => ({
           ...transaksi,
           bodyTransaksi: [
             ...transaksi.kredits.map(kredit => ({
               ...kredit,
               isKredit: true,
             })),
             ...transaksi.debits.map(debit => ({
               ...debit,
               isKredit: false,
             }))
           ]
         }))
       })
    },
    

  },

}
</script>

<style scoped>
/* table, th, tfoot */
.border{
  border: 1px solid black;
}
/* th, td */
.padding{
  padding: 15px;
}
/* td */
.alignment {
  text-align: center;
}
</style>