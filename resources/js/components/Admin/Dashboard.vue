<template>
<div>
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
<v-content>
  <v-container fluid fill-height>
    <router-view></router-view>

  </v-container>
</v-content>
</div>

</template>

<script>
export default {
    data: () => ({

      show: false,
      drawer: null,
      myCompany: null,
      name: null,

     beforeMount(){
        this.setComponent(this.$route.params.page)
        this.user = JSON.parse(localStorage.getItem('user'))
        axios.defaults.headers.common['Content-Type'] = 'application/json'
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('jwt')
       
        },
  }),

  methods:{
    getInfo(){
      this.name = localStorage.getItem('Owner');
      this.myCompany = localStorage.getItem('Company');
    },  
    
   async logout(){
     try{
       await this.$user.logout();
       this.$user.clearStorage();
       this.$router.replace({path: "/login"})
     }catch(error){
       alert(error)

     }
    },
    jurnal(){
        this.$router.push('/admin')
    },
    materi(){
        this.$router.push('/admin/materi')
    },
    laporan(){
        this.$router.push('/admin/laporan')
    },
    settings(){
        this.$router.push('/admin/pengaturan')
    },    
    aboutus(){
        this.$router.push('/admin/aboutus')
    },
  },
  mounted(){
    this.getInfo();
  
  }
}
</script>