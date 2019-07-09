<template>
<div v-if="isLoggedIn">
 <v-navigation-drawer
      stateless
      value="true"
  >
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
          no-action
          sub-group
          value="true"
        >
          <template v-slot:activator>
            <v-list-tile>
              <v-list-tile-title>Admin</v-list-tile-title>
            </v-list-tile>
          </template>
          <v-list-tile
            v-for="(admin, i) in admins"
            :key="i"
            
          >
            <v-list-tile-title v-text="admin[0]"></v-list-tile-title>
            <v-list-tile-action>
              <v-icon v-text="admin[1]"></v-icon>
            </v-list-tile-action>
          </v-list-tile>
        </v-list-group>

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
</div>
<div style="text-align: center" v-else>
  <p class="text-xs-center">Harap Login Terlebih Dahulu</p>
  <a class="align-center" href="./login">Login</a>
</div>
</template>

<script>
export default {
    data: () => ({
    admins: [
      ['Management', 'people_outline'],
      ['Settings', 'settings']
    ],
    cruds: [
      ['Tambah Artikel', 'add'],
      ['Read', 'insert_drive_file'],
      ['Update', 'update'],
      ['Delete', 'delete']
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