<template>
  <v-app id="inspire">
    <v-content>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Login</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-text>
                <v-form ref="login_form">
                  <v-text-field prepend-icon="email" v-model="email" name="login" label="Email" type="text" :rules="[rules.required, rules.email]"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" v-model="password" name="password" label="Password" type="password" :rules="[rules.required, rules.password]"></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <router-link :to="{path: '/register'}">Belum Punya Akun? Daftar Disini</router-link>
                <v-spacer></v-spacer>
                <v-btn color="primary"
                :loading="loading"
                 type="submit" @click="login">Login</v-btn>
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
      email: undefined,
      password: undefined,
      Owner: undefined,
      Company: undefined,

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
      
     async login(){
        if(this.$refs.login_form.validate()){
          this.loading = true
          try{
            const request = {
              email: this.email,
              password: this.password
            }
            const res = await this.$user.login(request);
            await this.$user.storeSession(res.data);
            this.$router.replace({path: "/admin"});
          }catch(error){
            alert("Alamat Email Atau Password Anda Salah!");
          }
          this.loading = false
          
        }

      },

    }
  }
</script>