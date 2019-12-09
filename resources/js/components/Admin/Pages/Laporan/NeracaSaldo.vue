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
          <v-data-table
          :headers="headers"
          :items="transaksis"
          class="elevation-1"
        >
          <template v-slot:items="props">
            <td>{{ props.item.tanggal_transaksi }}</td>
            <td>{{ props.item.keterangan_transaksi }}</td>
            <td>{{ props.item.keterangan_transaksi }}</td>
            <td>{{ props.item.keterangan_transaksi }}</td>
          </template>
          <template v-slot:no-data>
            <!-- <v-btn color="primary" @click="getTransaksis">Reset</v-btn> -->
          </template>
        </v-data-table>
        </v-card>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  data: () => ({
    headers:[
      {text: 'Kode Akun', sortable: false, value: 'tanggal_transaksi'},
      {text: 'Nama Akun', sortable: false, value: 'tanggal_transaksi'},
      {text: 'Debet',  sortable: false, value: 'keterangan_transaksi' },
      {text: 'Kredit', value: 'action', sortable: false },
    ],
    bulan: ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
    tahun: ['2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021'],
    getBulan: '',
    getTahun: '',
    transaksis: [],
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
    

  },
  methods:{
    

  },

}
</script>

<style>

</style>