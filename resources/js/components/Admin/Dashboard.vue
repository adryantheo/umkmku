<template>
<div v-if="isLoggedIn">
<!-- dashboard -->

  <v-navigation-drawer fixed v-model="drawer" app >
    <v-list>
        <v-list-tile>
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-title>Home</v-list-tile-title>
        </v-list-tile>
        <v-list-group
          prepend-icon="account_circle"
          value="true"
        >
          <template v-slot:activator>
            <v-list-tile>
              <v-list-tile-title>Users</v-list-tile-title>
            </v-list-tile>
          </template>
          

          <v-list-group
            sub-group
            no-action
          >
            <template v-slot:activator>
              <v-list-tile>
                <v-list-tile-title>Actions</v-list-tile-title>
              </v-list-tile>
            </template>
            <v-list-tile
              v-for="(crud, i) in cruds"
              :key="i"
              @click="select"              
            >
              <v-list-tile-title v-text="crud[0]"></v-list-tile-title>
              <v-list-tile-action>
                <v-icon v-text="crud[1]"></v-icon>
              </v-list-tile-action>
            </v-list-tile>
          </v-list-group>
        </v-list-group>
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
      <v-toolbar-title>Admin</v-toolbar-title>
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
export default {
    data: () => ({

      show: false,
      drawer: null,
    
    cruds: [
      ['Tambah Artikel', 'add'],
      ['Edit Artikel', 'update'],
      ['Hapus Artikel', 'delete']
    ],

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
            change() {
                this.isLoggedIn = localStorage.getItem('jwt') != null
                this.setDefaults()
            },
            logout(){
                localStorage.removeItem('jwt')
                localStorage.removeItem('user')
                this.change()
                this.$router.push('/')
            },
  }
}
</script>