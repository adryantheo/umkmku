<template>
    <v-content>
        <v-layout align-center justify-center>
            <v-flex xs12 md>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Update Perusahaan</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-text>
                <v-form ref="update_form" @submit.prevent="update">
                  <v-text-field :disabled="isDisabled" prepend-icon="storefront" v-model="company_name" name="company_name" label="Nama Perusahaan" type="text" :rules="[rules.required]"></v-text-field>
                  <v-text-field :disabled="isDisabled" prepend-icon="face" v-model="name" name="name" label="Nama Pemilik" type="text" :rules="[rules.required]"></v-text-field>
                  <v-text-field :disabled="isDisabled" prepend-icon="location_city" v-model="address" name="address" label="Alamat" type="text" :rules="[rules.required]"></v-text-field>
                  <v-text-field :disabled="isDisabled" prepend-icon="phone" v-model="phone" name="phone" label="Telepon" type="text" :rules="[rules.required]"></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn v-if="isDisabled === true" color="primary"
                @click="turnOnUpdate"
                >Update</v-btn>

                <v-btn v-if="isDisabled === false" color="primary"
                :loading="loading"
                type="submit"   
                @click="updateData"
                >Save</v-btn>

                <v-btn v-if="isDisabled === false" color="warning" 
                @click="cancel"
                >Cancel</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>            
        </v-layout>
    </v-content>
</template>

<script>
export default {
    data: () => ({
        dataCompany: '',
        company_name: '',
        name: '',
        address: '',
        phone: '',
        isDisabled: true,
        loading:false,
        rules: {
            email: v => (v || '').match(/@/) || 'Format Email Salah',
            length: len => v => (v || '').length >= len || `Invalid character length, required ${len}`,
            password: v => (v || '').match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/) || 'Password harus terdiri dari alphabert, angka, huruf kapital, dan karakter spesial',
            required: v => !!v || 'Tidak Boleh Kosong',
      },
    }),

    methods: {
        async getData(){
            const res = await axios.get('/api/company/' + localStorage.getItem('Id'));
            this.dataCompany = res.data;
            this.company_name = this.dataCompany.company_name;
            this.name = this.dataCompany.name;
            this.address = this.dataCompany.address;
            this.phone = this.dataCompany.phone;
        },
        async updateData(){
            this.loading = true;
            try{
                const res = await axios.patch('/api/update-company/' + localStorage.getItem('Id'),{
                name: this.name,
                company_name: this.company_name,
                phone: this.phone,
                address: this.address
            });
            alert("Data Perusahaan Berhasil Diupdate");
            this.isDisabled = true;
            this.loading = false;
            this.getData();
            }catch(err){
                console.log(err);
            }

        },
        turnOnUpdate(){
            this.isDisabled = false;
        },
        cancel(){
            this.isDisabled = true;
            this.getData();
        }

    },
    mounted() {
        this.getData()
    }
}
</script>

<style>

</style>