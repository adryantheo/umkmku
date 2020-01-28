<template>
    <v-layout row justify-center>
        <v-btn
        color="error"
        @click="dialog = true"
        >
        Hapus Semua Data
        </v-btn>
        <v-dialog v-model="dialog" presistent max-width="290px">
                <v-card>
                    <v-layout justify-center>
                        <v-card-title class="headline">
                            Anda Yakin
                        </v-card-title>
                    </v-layout>
                    <v-card-text>
                        <p>Menghapus semua data Transaksi/Jurnal, dan Data Kode Akun yang ada buat</p>
                    </v-card-text>
                    <v-card-actions>
                        <v-checkbox v-model="isCheck">
                        </v-checkbox>
                        <span>Saya sudah membaca dan setuju akan konsekuensi yang akan diterima</span>
                    </v-card-actions>
                    <v-layout justify-end>
                        <v-card-actions>
                        <v-btn
                         v-if="isCheck==true"
                         color="error"
                         @click="deleteAll">
                            Hapus Data
                        </v-btn>
                        <v-btn color="primary" @click="dialog = false">
                            Batal
                        </v-btn>
                    </v-card-actions>
                    </v-layout>
                </v-card>
        </v-dialog>
    </v-layout>
</template>

<script>
export default {
    data:()=>({
        dialog: false,
        isCheck: false,
    }),
    watch:{
    },
    methods:{
        deleteAll(){
            try{
                axios.delete('/api/transaksi/delete-all/' + localStorage.getItem('Id'));
                alert("Berhasil Menghapus Data");
                this.dialog = false;
            }catch(err){
                console.log(err);
            }
        }
    },
    mounted(){

    }

}
</script>

<style>

</style>