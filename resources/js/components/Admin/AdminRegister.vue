<template>
  <v-app id="inspire">
    <v-content>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Register</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-text>
                <v-form ref="register_form" @submit.prevent="register">
                  <v-text-field prepend-icon="storefront" v-model="company_name" name="company_name" label="Nama Perusahaan" type="text" :rules="[rules.required]"></v-text-field>
                  <v-text-field prepend-icon="face" v-model="name" name="name" label="Nama Pemilik" type="text" :rules="[rules.required]"></v-text-field>
                  <v-text-field prepend-icon="location_city" v-model="address" name="address" label="Alamat" type="text" :rules="[rules.required]"></v-text-field>
                  <v-text-field prepend-icon="phone" v-model="phone" name="phone" label="Telepon" type="text" :rules="[rules.required]"></v-text-field>
                  <v-text-field prepend-icon="email" v-model="email" name="email" label="Email" type="text" :rules="[rules.required, rules.email]"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" v-model="password" name="password" label="Password" type="password" :rules="[rules.required, rules.password]"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" v-model="c_password" name="c_password" label="Confirm Password" type="password" :rules="[rules.required, rules.password]"></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <router-link :to="{path: '/login'}">Sudah Memiliki Akun? Login Disini</router-link>
                <v-spacer></v-spacer>
                <v-btn color="primary"
                :loading="loading"
                type="submit"
                @click="register"
                >Daftar</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
  export default {
    data: () => ({
      drawer: null,
      loading: false,
      name: null,
      company_name: null,
      address: null,
      phone: null,
      email: null,
      password: null,
      c_password: null,

      rules: {
        email: v => (v || '').match(/@/) || 'Format Email Salah',
        length: len => v => (v || '').length >= len || `Invalid character length, required ${len}`,
        password: v => (v || '').match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/) || 'Password harus terdiri dari alphabert, angka, huruf kapital, dan karakter spesial',
        required: v => !!v || 'Tidak Boleh Kosong',
      },
      
    }),
    props: {
      source: String,
    },
    
    methods: {
      
      async register() {
        if(this.$refs.register_form.validate()){
          this.loading = true;
          try{
            const request = {
            email : this.email,
            address : this.address,
            name : this.name,
            company_name : this.company_name,
            phone : this.phone,
            password : this.password,
            c_password : this.c_password,
            };
            const res = await this.$user.signup(request)
            this.$router.replace({path: "/login"});
          }catch(error){
            alert(error);
          }
          this.loading = false    
        }
          
      },

    }
  }
</script>