<template>
  <div style="width: 100%">
    <v-container grid-list-md>
      <v-layout align-space-around justify-center fill-height>
          <!-- <p>Neraca Saldo</p> -->
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
            <span class="headline">Laporan Neraca Saldo</span>
          </v-card-title>
          <v-card-title class="justify-center">
            <span class="headline">Periode {{ getBulan }} {{ getTahun }}</span>
          </v-card-title>
          <v-layout justify-center>
              <table class="border" style="width: 90%">
                <thead>
                  <tr>
                  <th class="border padding">Kode Akun</th>
                  <th class="border padding">Nama Akun</th>
                  <th class="border padding">Debet</th>
                  <th class="border padding">Kredit</th>
                </tr>
                </thead>
                <tbody>
                  <template v-for="transaksi in transaksis">
                      <tr v-for="(body,i) in transaksi.bodyTransaksi" :key="`tr-${i}`">
                          <td class="padding alignment" :key="`td0-${i}`">
                              {{ body.kodeakuns.kode_akun }}
                          </td>
                          <td class="padding alignment" :key="`td1-${i}`">
                              {{ body.kodeakuns.nama_akun }}
                          </td>
                          <td class="padding alignment" :key="`td2-${i}`">
                              {{ !!body.isKredit? '' : body.nominal }}
                          </td>
                          <td class="padding alignment" :key="`td3-${i}`">
                              {{ !!body.isKredit? body.nominal : '' }}
                          </td>
                      </tr>
                  </template>
                </tbody>
                <tfoot class="border">
                    <tr>
                      <th class="border padding" colspan="2"><b>Total</b></th>
                      <th class="border padding"><b>{{ getTotalDebit }}</b></th>
                      <th class="border padding"><b>{{ getTotalKredit}}</b></th>
                  </tr>
                </tfoot>
              </table>
            </v-layout>
        </v-card>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  name: 'NeracaSaldo',
  data: () => ({
    bulan: ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
    tahun: ['2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021'],
    getBulan: '',
    getBulanValue: null,
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
    },
    'getBulan'(){
      this.getBulanNumber();
      this.getTransaksis(); 
    },
    'getTahun'(){
      this.getTransaksis();
    } 
  },
  mounted(){
    // this.getTransaksis();

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
       axios.get('/api/transaksi-tgl/' + this.getTahun + '/' + this.getBulanValue + '?Id=' + this.userId)
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
    getBulanNumber(){
      switch(this.getBulan){
        case "Januari":
          this.getBulanValue = '01';
          break;
        case "Februari":
          this.getBulanValue = '02';
          break;
        case "Maret":
          this.getBulanValue = '03';
          break;
        case "April":
          this.getBulanValue = '04';
          break;
        case "Mei":
          this.getBulanValue = '05';
          break;
        case "Juni":
          this.getBulanValue = '06';
          break;
        case "Juli":
          this.getBulanValue = '07';
          break;
        case "Agustus":
          this.getBulanValue = '08';
          break;
        case "September":
          this.getBulanValue = '09';
          break;
        case "Oktober":
          this.getBulanValue = '10';
          break;
        case "November":
          this.getBulanValue = '11';
          break;
        case "Desember":
          this.getBulanValue = '12';
          break;
        default:
          this.getBulanValue = null;
      }
    }
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