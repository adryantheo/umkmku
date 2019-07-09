<template>
  <v-app id="inspire">
    <v-content>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Register Admin</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-text>
                <v-form>
                  <v-text-field prepend-icon="person" v-model="email" name="login" label="Email" type="text"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" v-model="password" name="password" label="Password" type="password"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" v-model="c_password" name="c_password" label="Confirm Password" type="password"></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="primary" @click="register">Register</v-btn>
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
      email: undefined,
      password: undefined,
      c_password: undefined
      
    }),
    props: {
      source: String,
    },
    
    methods: {
      
      register(){
          let email = this.email
          let password = this.password
          let c_password = this.c_password

          axios.post('/api/register/',{
              email,
              password,
              c_password
          }).then(response => {
              this.$router.push(('/login'))
              console.log('Created Admin');
          });
      },

    }
  }
</script>