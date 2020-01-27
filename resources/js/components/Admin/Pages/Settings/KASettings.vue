<template>
    <v-content>
        <v-layout align-center justify-center>
            <v-flex xs12 md>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Pengaturan Kode Akun</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-title>
                  <v-layout justify-end>
                      <v-flex xs12 sm6 md4>
                        <v-select :items="jenisKode" label="Jenis Kode Akun"></v-select>
                    </v-flex>
                  </v-layout>
              </v-card-title>
              <v-card-text>
                  <v-data-table
                    :headers="headers"
                    :items="kodeAkun"
                    class="elevation-1"
                  >
                    <template>
                    </template>
                </v-data-table>               
              </v-card-text>
              <v-card-actions>                
              </v-card-actions>
            </v-card>
          </v-flex>            
        </v-layout>
    </v-content>
</template>

<script>
export default {
    data: () =>({
        kodeAkun: [],
        headers:[
            {text: 'Kode Akun', sortable: false},
            {text: 'Nama Akun', sortable: false}
        ],
        jenisKode: ['Asset Lancar', 'Asset Tetap', 'Utang Jangka Pendek', 'Utang Jangka Panjang', 'Modal', 'Pendapatan Operasional', 'Pendapatan Non Operasional', 'Beban Operasional', 'Beban Non Operasional', 'Pengembalian Ekuitas', 'Akun Lain-Lain', 'Semua Akun']
    }),
    
    methods:{
        async getKodeAkun(){
            const res = await axios.get('/api/kodeakun');
            this.kodeAkun = res.data;
        }

    },
    mounted (){
        this.getKodeAkun();

    }
}
</script>

<style>

</style>