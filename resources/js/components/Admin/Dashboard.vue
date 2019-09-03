<template>
<div v-if="isLoggedIn">
<!-- dashboard -->

  <v-navigation-drawer fixed v-model="drawer" app >
    <v-list>

       <v-list-tile>
          <v-list-tile-action>
            <v-icon>account_circle</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>{{name}}</v-list-tile-title>
        </v-list-tile>
        <v-list-tile @click="jurnal">
          <v-list-tile-action>
            <v-icon>folder_open</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Jurnal</v-list-tile-title>
        </v-list-tile>
        <v-list-tile @click="materi">
          <v-list-tile-action>
            <v-icon>menu_book</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Materi</v-list-tile-title>
        </v-list-tile>
        <v-list-tile @click="laporan">
          <v-list-tile-action>
            <v-icon>assessment</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Laporan</v-list-tile-title>
        </v-list-tile>
        <v-list-tile @click="settings">
          <v-list-tile-action>
            <v-icon>settings_applications</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Pengaturan</v-list-tile-title>
        </v-list-tile>
        <v-list-tile @click="aboutus">
          <v-list-tile-action>
            <v-icon>info</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Tentang</v-list-tile-title>
        </v-list-tile>
        
       <v-list-tile @click="logout">
          <v-list-tile-action>
            <v-icon>logout</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Logout</v-list-tile-title>
        </v-list-tile>
      </v-list>    
  </v-navigation-drawer>
  <v-toolbar  color="white" app >
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>{{myCompany}}</v-toolbar-title>
      <v-toolbar-items class="hidden-sm-and-down">           
      </v-toolbar-items>
    </v-toolbar>  

<!-- read -->

<v-content>
  <v-container fluid fill-height>
    <router-view></router-view>
  </v-container>
</v-content>
</div>

<div style="text-align: center" v-else>
  <p class="text-xs-center">Harap Login Terlebih Dahulu</p>
  <a class="align-center" href="./login">Login</a>
</div>
</template>

<script>
import { mdiClipboardText } from '@mdi/js';
export default {
    data: () => ({

      show: false,
      drawer: null,
      myCompany: null,
      name: null,

    isLoggedIn: localStorage.getItem('jwt') != null,

     beforeMount(){
        this.setComponent(this.$route.params.page)
        this.user = JSON.parse(localStorage.getItem('user'))
        axios.defaults.headers.common['Content-Type'] = 'application/json'
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('jwt')
       
        },
  }),

  methods:{

    setDefaults() {
                if (this.isLoggedIn) {
                    let user = JSON.parse(localStorage.getItem('user'))                       
                }
    },
    getInfo(){
      this.name = localStorage.getItem('name');
      this.myCompany = localStorage.getItem('company');

    },  
    change() {
        this.isLoggedIn = localStorage.getItem('jwt') != null
        this.setDefaults()
    },
    logout(){
        localStorage.removeItem('jwt')
        localStorage.removeItem('user')
        localStorage.removeItem('token')
        localStorage.removeItem('username')
        localStorage.removeItem('company')
        this.change()
        this.$router.push('/')
    },
    jurnal(){
        this.change()
        this.$router.push('/admin/jurnal')
    },
    materi(){
        this.change()
        this.$router.push('/admin/materi')
    },
    laporan(){
        this.change()
        this.$router.push('/admin/laporan')
    },
    settings(){
        this.change()
        this.$router.push('/admin/pengaturan')
    },    
    aboutus(){
        this.change()
        this.$router.push('/admin/aboutus')
    },
  },
  mounted(){
    this.getInfo();
  
  }
}
</script>