<template>
<div style="width: 100%">
    <v-layout justify-center align-center>
        <div class="ml-4">
            <div class="headline font-weight-bold mb-1">Halaman Jurnal</div>
        </div>        
    </v-layout>
  <br>
  <div>
    <!-- toolbar table -->
    <v-toolbar flat color="white">
        <v-toolbar-title>Jurnal</v-toolbar-title>
        <v-divider
          class="mx-2"
          inset
          vertical
        ></v-divider>
        <v-spacer></v-spacer>
        <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
          <template v-slot:activator="{ on }">
            <v-btn color="primary" dark class="mb-2" v-on="on">+ Tambah Jurnal</v-btn>
          </template>
          <v-card>
            <v-card-title>
              <span class="headline">{{ formTitle }}</span>
            </v-card-title>
  
            <v-card-text>
              <v-container grid-list-md>
                <v-form ref="transaksi_form">
                <v-layout wrap>
                  
                  <v-flex xs12 sm6 md4>
                    <v-menu
                      v-model="menu2"
                      :close-on-content-click="false"
                      :nudge-right="40"
                      transition="scale-transition"
                      offset-y
                      min-width="290px"
                    >
                    <template v-slot:activator="{ on }">
                       <v-text-field v-model="editedItem.date" label="Tanggal Transaksi Format (Tahun/Bulan/Tanggal)" v-on="on"></v-text-field>
                    </template>
                    <v-date-picker v-model="editedItem.date" @input="menu2 = false"></v-date-picker>
                    </v-menu>
                  </v-flex>
                  <v-flex xs12 sm6 md4>
                    <v-text-field v-model="editedItem.keterangan_transaksi" label="Keterangan Transaksi"></v-text-field>
                  </v-flex>
                  <v-flex xs12 sm6 md4>
                    <v-select :items="jenisTransaksi" v-model="editedItem.jenis_transaksi" label="Jenis Transaksi"></v-select>
                  </v-flex>
                  <template v-for="(editedItem) in akunDebits">
                  <v-flex xs12 sm6>
                    <v-select :items="debitAkun" item-text="Nama" item-value="Id" v-model="editedItem.kode_akun_id" label="Akun debit"></v-select>
                  </v-flex>
                  <v-flex xs12 sm6>
                    <v-text-field v-model="editedItem.nominal_debit" label="Masukkan Nominal Debit"></v-text-field>
                  </v-flex>
                  </template>
                  <template v-for="(editedItem) in akunKredits">
                  <v-flex xs12 sm6>
                    <v-select :items="kreditAkun" item-text="Nama" item-value="Id" v-model="editedItem.kode_akun_id" label="Akun Kredit"></v-select>
                  </v-flex>
                  <v-flex xs12 sm6>
                    <v-text-field v-model="editedItem.nominal_kredit" label="Masukkan Nominal Kredit"></v-text-field>
                  </v-flex>
                  </template>
                </v-layout>
                </v-form>
              </v-container>
            </v-card-text>
            
  
            <v-card-actions>
              <v-btn color="blue darken-1" flat @click="addDebit">Tambah Akun Debit</v-btn>
              <v-btn color="blue darken-1" flat @click="addKredit">Tambah Akun Kredit</v-btn>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" flat @click="close">Cancel</v-btn>
              <v-btn color="blue darken-1" flat @click="save">Save</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-toolbar>

      <!-- data table  -->
      <v-data-table
        :headers="headers"
        :items="transaksis"
        class="elevation-1"
      >
        <template v-slot:items="props">
          <td>{{ props.item.tanggal_transaksi }}</td>
          <td>{{ props.item.keterangan_transaksi }}</td>
          <td>
            <v-icon
              small
              class="mr-2"
              @click="editItem(props.item)"
            >
              edit
            </v-icon>
            <v-icon
              small
              @click="deleteItem(props.item)"
            >
              delete
            </v-icon>
          </td>
        </template>
        <template v-slot:no-data>
          <v-btn color="primary" @click="getTransaksis">Reset</v-btn>
        </template>
      </v-data-table>
  </div>
</div>
</template>

<script>


export default {
  
  data: () => ({
      menu2: false,
      openJurnalDialog: false,
      loading: false,
      dialog: false,
      date: new Date().toISOString().substr(0, 10),
      keterangan_transaksi: '',
      jenis_transaksi: '',
      akunDebits: [
        {
          kode_akun_id: null,
          nominal_debit: "",

        }
      ],
      akunKredits:[
        {
          kode_akun_id: null,
          nominal_kredit: "",
        }
      ],
      jenisTransaksi: 
      [
        'Setor modal',
        'Pembelian',
        'Penjualan aset-pendapatan jasa',
        'Pinjaman dari phak luar(utang)',
        'Pembayaran beban',
        'Pengambilan untuk pribadi',
        'Barter',
        'Penyesuaian',
        'Pembalik'
      ],
      headers:[
        {text: 'Tanggal', sortable: false, value: 'tanggal_transaksi'},
        { text: 'Keterangan', value: 'keterangan_transaksi' },
        { text: 'Actions', value: 'action', sortable: false },
      ],
      transaksis: [{
        debits:[{
          kode_akun_id: null,
          nominal_debit: null,
        }],
        kredits:[{
          kode_akun_id: null,
          nominal_kredit: null,
        }],
        }
      ],
      dataTransaksi:[],
      kodeAkun:[],
      debitAkun: [],
      kreditAkun: [],
      editedIndex: -1,
      editedItem: {
        date: '',
        keterangan_transaksi: '',
        jenis_transaksi: '',
        akunDebits: [
        {
          kode_akun_id: null,
          nominal_debit: null,

        }
      ],
      akunKredits:[
        {
          kode_akun_id: null,
          nominal_kredit: null,
        }
      ],
      },
      defaultItem: {
        date: new Date().toISOString().substr(0, 10),
        keterangan_transaksi: '',
        jenis_transaksi: '',
        kode_akun_id: '',
        kode_akun_id: '',
        nominal_debit: '',
        nominal_kredit: '',
      },
  }),
  
  computed: {
    formTitle () {
      return this.editedIndex === -1 ? 'Tambah Jurnal' : 'Edit Jurnal'
    },
  },

  watch: {
    dialog (val) {
      val || this.close()
    },

    'editedItem.jenis_transaksi'(){
      this.getOptions()
    }, 
  },

  mounted () {
    this.getTransaksis()
    this.getKodeAkun()
  },

  methods: {

    addDebit: function() {
      this.akunDebits.push({
        kode_akun_id: "",
        nominal_debit: "",
      });
    },

    addKredit: function() {
      this.akunKredits.push({
        kode_akun_id: "",
        nominal_kredit: "",
      });
    },
   
     getOptions(){
      const jenisTransaksi = this.editedItem.jenis_transaksi;
      //Create Array Kode Akun
       var newArray = this.kodeAkun.map(item => ({
          Id: item.id,
          Code: item.kode_akun.toString(),
          Nama: item.nama_akun,
        }));
        //Create Array Khusus Substring
         var getDataAkun = newArray.map(item =>({
           Code: item.Code.substring(0,2),
           Nama: item.Nama,
           Id: item.Id
         }));

      if(jenisTransaksi === 'Setor modal'){
              
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "12"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "31"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }
      }
      else if(jenisTransaksi === 'Pembelian'){
        console.log(jenisTransaksi);
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "12"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "22" || getDataAkun[i].Code === "31"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }                
      }
      else if(jenisTransaksi === 'Penjualan aset-pendapatan jasa'){
        console.log(jenisTransaksi);
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "12" || getDataAkun[i].Code === "31" || getDataAkun[i].Code === "41" || getDataAkun[i].Code === "42" || getDataAkun[i].Code === "52" || getDataAkun[i].Code === "61" || getDataAkun[i].Code === "71"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "12" || getDataAkun[i].Code === "31" || getDataAkun[i].Code === "41" || getDataAkun[i].Code === "42" || getDataAkun[i].Code === "71"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }
      }
      else if(jenisTransaksi === 'Pinjaman dari phak luar(utang)'){
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "22"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "22"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }
        console.log(jenisTransaksi);
      }
      else if(jenisTransaksi === 'Pembayaran beban'){
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "51" || getDataAkun[i].Code === "52"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "31"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }
        console.log(jenisTransaksi);
      }
      else if(jenisTransaksi === 'Pengambilan untuk pribadi'){
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "61"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "12" || getDataAkun[i].Code === "31" || getDataAkun[i].Code === "41" || getDataAkun[i].Code === "42"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }
        console.log(jenisTransaksi);
      }
      else if(jenisTransaksi === 'Barter'){
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "12" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "22" || getDataAkun[i].Code === "51" || getDataAkun[i].Code === "52"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "12" || getDataAkun[i].Code === "31" || getDataAkun[i].Code === "41" || getDataAkun[i].Code === "42"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }
        console.log(jenisTransaksi);
      }
      else if(jenisTransaksi === 'Penyesuaian'){
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "51"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "31" || getDataAkun[i].Code === "41" || getDataAkun[i].Code === "42" || getDataAkun[i].Code === "71"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }
        console.log(jenisTransaksi);
      }
      else if(jenisTransaksi === 'Pembalik'){
        // Create Array Debit;
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "31"){
              this.debitAkun.push(getDataAkun[i]);
          }
         }
         //Create Array Kredit
         for(var i=0; i<getDataAkun.length; i++){
          if(getDataAkun[i].Code === "11" || getDataAkun[i].Code === "21" || getDataAkun[i].Code === "51" || getDataAkun[i].Code === "52"){
              this.kreditAkun.push(getDataAkun[i]);
          }
         }
        console.log(jenisTransaksi);
      }
      else{
        console.log("Invalid Input");

      }
    },

    async getKodeAkun()
    {
      const res = await axios.get('/api/kodeakun');
      this.kodeAkun = res.data;
    },

    async getTransaksis()
    {
      const res = await axios.get('/api/transaksi');
      this.transaksis = res.data.reverse();
    },   

    async editItem (item) {
      this.editedIndex = item.id;     
      const response = await axios.get(`/api/transaksi/${item.id}`).then(response => this.dataTransaksi = response.data)
      this.editedItem.date = this.dataTransaksi.tanggal_transaksi;
      this.editedItem.jenis_transaksi = this.dataTransaksi.jenis_transaksi;
      this.editedItem.keterangan_transaksi = this.dataTransaksi.keterangan_transaksi;
      this.akunDebits = this.dataTransaksi.debits;
      this.akunKredits = this.dataTransaksi.kredits;
      this.editedItem.akun_kredit = this.dataTransaksi.kredits[0].akun_kredit;
      this.editedItem.nominal_kredit = this.dataTransaksi.kredits[0].nominal_kredit;
      this.dialog = true
    },

    async deleteItem (item) {
      const index = this.transaksis.indexOf(item)
      confirm('Are you sure you want to delete this item?') && this.transaksis.splice(index, 1)
      try{
        const res = await axios.delete(`/api/transaksi/`+item.id, null);
        console.log(res.data);
        this.getTransaksis();
      }catch(errorDelete){
        console.log(errorDelete);
      }
    },

    close () {
      this.dialog = false
      setTimeout(() => {
        this.editedItem = Object.assign({}, this.defaultItem)
        this.editedIndex = -1
      }, 300)
    },

  async save () {
      if (this.editedIndex > -1) {
        Object.assign(this.transaksis[this.editedIndex], this.editedItem)
         try{
          const res = await axios.patch(`api/transaksi/`+this.editedIndex,{
          jenis_transaksi: this.editedItem.jenis_transaksi,
          keterangan_transaksi: this.editedItem.keterangan_transaksi,
          tanggal_transaksi: this.editedItem.date,
          kode_akun_id: this.editedItem.kode_akun_id,
          kode_akun_id: this.editedItem.kode_akun_id,
          nominal_debit: this.editedItem.nominal_debit,
          nominal_kredit: this.editedItem.nominal_kredit
        })
        alert("Transaksi Berhasil di Update");
        }catch(err){
          console.log(err)
        }
      } else {
        if(this.$refs.transaksi_form.validate())
        {
          if(this.editedItem.nominal_kredit === this.editedItem.nominal_kredit){
            this.transaksis.push(this.editedItem)
            try{
            const res = await axios.post('/api/transaksi',{
            jenis_transaksi: this.editedItem.jenis_transaksi,
            keterangan_transaksi: this.editedItem.keterangan_transaksi,
            tanggal_transaksi: this.editedItem.date,
            debit: this.akunDebits,
            kredit: this.akunKredits,
            })
            alert("Transaksi Baru Berhasil Ditambahkan");           
        }catch(err){
          console.log(err);
        }
          }
          
      } 
      }
      this.close()
    },
  },
    
}
</script>