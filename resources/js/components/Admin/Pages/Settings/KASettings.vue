<template>
    <v-content>
        <v-layout align-center justify-center>
            <v-flex xs12 md8>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Pengaturan Kode Akun</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-title>
                  <v-layout justify-end>
                      <v-flex xs12 sm6 md4>
                        <v-select :items="jenisKode" v-model="getJenisKode" label="Jenis Kode Akun"></v-select>
                    </v-flex>
                  </v-layout>
              </v-card-title>
              <v-card-text>
                  <v-data-table
                    :headers="headers"
                    :items="kodeAkun"
                    class="elevation-1"
                  >
                    <template v-slot:items="props">
                      <td>{{props.item.Code}}</td>
                      <td>{{props.item.Nama}}</td>
                    </template>
                </v-data-table>               
              </v-card-text>
              <v-card-actions>
                <v-layout justify-end>
                  <v-btn color="primary"
                  @click="dialog = true"
                  >Tambah Kode Akun</v-btn>
                </v-layout>
              </v-card-actions>
            </v-card>
            <v-dialog v-model="dialog" persistent max-width="600px">
                <template>
                  <v-card>
                    <v-card-title>
                      <span class="headline">Tambah Kode Akun</span>
                    </v-card-title>
                    <v-card-text>
                      <v-container grid-list-md>
                        <v-form ref="tambah-akun">
                          <v-layout wrap>
                            <v-flex xs12 sm6 md4>
                              <v-text-field v-model="kode_akun" label="Kode Akun"></v-text-field>
                            </v-flex>
                            <v-flex xs12 sm6 md4>
                              <v-text-field v-model="nama_akun" label="Nama Akun"></v-text-field>
                            </v-flex>
                          </v-layout>
                        </v-form>
                      </v-container>
                    </v-card-text>
                    <v-card-actions>
                      <v-layout justify-end>
                        <v-btn color="primary">Save</v-btn>
                        <v-btn color="warning" @click="dialog = false">Cancel</v-btn>
                      </v-layout>
                    </v-card-actions>
                  </v-card>
                </template>
            </v-dialog>
          </v-flex>            
        </v-layout>
    </v-content>
</template>

<script>
export default {
    data: () =>({
        kodeAkun: [],
        fetchKodeAkun: [],
        nama_akun: '',
        kode_akun: '',
        dialog: false,
        getJenisKode: '',
        headers:[
            {text: 'Kode Akun', sortable: false},
            {text: 'Nama Akun', sortable: false}
        ],
        jenisKode: ['Asset Lancar', 'Asset Tetap', 'Utang Jangka Pendek', 'Utang Jangka Panjang', 'Modal', 'Pendapatan Operasional', 'Pendapatan Non Operasional', 'Beban Operasional', 'Beban Non Operasional', 'Pengembalian Ekuitas', 'Akun Lain-Lain', 'Semua Akun']
    }),
    watch:{
      'getJenisKode'(){
        this.kodeAkun = [];
        this.getStringKode();
      }

    },
    methods:{
        async getKodeAkun(){
            const res = await axios.get('/api/kodeakun');
            this.fetchKodeAkun = res.data;
        },
        getStringKode(){
          const stringKode = this.getJenisKode;
           var newArray = this.fetchKodeAkun.map(item => ({
            Id: item.id,
            Code: item.kode_akun.toString(),
            Nama: item.nama_akun,
        }));
        //Create Array Khusus Substring
         var getKodeSpesial = newArray.map(item =>({
           Code: item.Code.substring(0,2),
           Nama: item.Nama,
           Id: item.Id
         }));
         //Find Jenis Kode
         if(stringKode === 'Asset Lancar'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "11"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
          else if(stringKode === 'Asset Tetap'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "12"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Utang Jangka Pendek'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "21"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Utang Jangka Panjang'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "22"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Modal'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "31"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Pendapatan Operasional'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "41"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Pendapatan Non Operasional'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "21" || getKodeSpesial[i].Code === "42" || getKodeSpesial[i].Code === "65"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Beban Operasional'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "51"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Beban Non Operasional'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "52"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Pengembalian Ekuitas'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "61"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Akun Lain-Lain'){
           for(var i=0; i<getKodeSpesial.length; i++){
             if(getKodeSpesial[i].Code === "71"){
               this.kodeAkun.push(newArray[i]);
             }
           }
         }
         else if(stringKode === 'Semua Akun'){
           for(var i=0; i<getKodeSpesial.length; i++){
             this.kodeAkun.push(newArray[i]);
           }
         }


        }

    },
    mounted (){
        this.getKodeAkun();

    }
}
</script>

<style>

</style>