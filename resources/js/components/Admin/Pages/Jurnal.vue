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
                  <v-flex xs12>
                    <v-select :items="kodeAkun" item-text="nama_akun" item-value="id" v-model="editedItem.akun_debit" label="v-select akun debit"></v-select>
                  </v-flex>
                  <v-flex xs12>
                    <v-text-field v-model="editedItem.nominal_debit" label="(v-text-field)Masukkan Nominal Debit"></v-text-field>
                  </v-flex>
                  <v-flex xs12>
                    <v-select :items="kodeAkun" item-text="nama_akun" item-value="id" v-model="editedItem.akun_kredit" label="v-select akun Kredit"></v-select>
                  </v-flex>
                  <v-flex xs12>
                    <v-text-field v-model="editedItem.nominal_kredit" label="(v-text-field)Masukkan Nominal Kredit"></v-text-field>
                  </v-flex>
                </v-layout>
              </v-container>
            </v-card-text>
  
            <v-card-actions>
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
  // props:{
  //   transaksi:{
  //     type: String,
  //     required: true,
  //   }

  // },

  data: () => ({
      menu2: false,
      openJurnalDialog: false,
      loading: false,
      dialog: false,
      date: new Date().toISOString().substr(0, 10),
      keterangan_transaksi: '',
      jenis_transaksi: '',
      akun_debit: '',
      akun_kredit: '',
      nominal_debit: '',
      nominal_kredit: '',
      jenisTransaksi: 
      [
        'Setor modal',
        'Pembelian',
        'Penjualan aset-pendapatan jasa',
        'Pinjaman dari phak luar(utang)',
        'Pembayaran beban','pengambilan untuk pribadi',
        'Barter',
        'Penyesuaian',
        'Pembalik'
      ],
      headers:[
        {text: 'Tanggal', sortable: false, value: 'tanggal_transaksi'},
        { text: 'Keterangan', value: 'keterangan_transaksi' },
        { text: 'Actions', value: 'action', sortable: false },
      ],
      transaksis: [],
      dataTransaksi:[],
      kodeAkun:[],
      editedIndex: -1,
      editedItem: {
        date: '',
        keterangan_transaksi: '',
        jenis_transaksi: '',
        akun_debit: '',
        akun_kredit: '',
        nominal_debit: '',
        nominal_kredit: '',
      },
      defaultItem: {
        date: new Date().toISOString().substr(0, 10),
        keterangan_transaksi: '',
        jenis_transaksi: '',
        akun_debit: '',
        akun_kredit: '',
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
  },

  mounted () {
    this.getTransaksis()
    this.getKodeAkun()
  },

  methods: {
    async getKodeAkun()
    {
      const res = await axios.get('/api/kodeakun');
      this.kodeAkun = res.data.reverse();
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
      this.editedItem.akun_debit = this.dataTransaksi.debits[0].akun_debit;
      this.editedItem.nominal_debit = this.dataTransaksi.debits[0].nominal_debit;
      this.editedItem.akun_kredit = this.dataTransaksi.kredits[0].akun_kredit;
      this.editedItem.nominal_kredit = this.dataTransaksi.kredits[0].nominal_kredit;
      // this.editedItem = Object.assign({}, item)
      // if(!!this.editedIndex){
      //   const res = await axios.patch(`/api/transaksi/`+item.id)
      // }
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
          const res = await axios.patch(`api/transaksi/`+this.item.id,{
          jenis_transaksi: this.editedItem.jenis_transaksi,
          keterangan_transaksi: this.editedItem.keterangan_transaksi,
          tanggal_transaksi: this.editedItem.date,
          akun_debit: this.editedItem.akun_debit,
          akun_kredit: this.editedItem.akun_kredit,
          nominal_debit: this.editedItem.nominal_debit,
          nominal_kredit: this.editedItem.nominal_kredit
        })
        alert("Transaksi Berhasil di Update");
        }catch(err){
          console.log(err)
        }
      } else {
        this.transaksis.push(this.editedItem)
        try{
          const res = await axios.post('/api/transaksi',{
            jenis_transaksi: this.editedItem.jenis_transaksi,
            keterangan_transaksi: this.editedItem.keterangan_transaksi,
            tanggal_transaksi: this.editedItem.date,
            akun_debit: this.editedItem.akun_debit,
            akun_kredit: this.editedItem.akun_kredit,
            nominal_debit: this.editedItem.nominal_debit,
            nominal_kredit: this.editedItem.nominal_kredit
          })
          alert("Transaksi Baru Berhasil Ditambahkan");
        }catch(err){
          console.log(err);
        } 
      }
      this.close()
    },
  },
    
}
</script>