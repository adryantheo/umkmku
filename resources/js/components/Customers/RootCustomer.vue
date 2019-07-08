<template>
    <div id="app">

       <v-app light>
        <v-toolbar class="white">
          <v-toolbar-title v-text="title"></v-toolbar-title>
        </v-toolbar>
        <v-content>
          <section>
            <v-parallax src="https://media.radarbanyumas.co.id/wp-content/uploads/2017/08/Produk-UMKM-Mulai-Hiasi-Swalayan.jpg" height="800">
              <v-layout
                column
                align-center
                justify-center
                class="white--text"
              >
                <!-- <img src="assets/vuetify.png" alt="Vuetify.js" height="200"> -->
                <h1 class="white--text mb-2 display-1 text-m-center">UMKMku :)</h1>
                <!-- <div class="subheading mb-3 text-xs-center">Powered by Vuetify</div> -->
                <v-btn
                  class="blue lighten-2 mt-5"
                  dark
                  large
                  
                >
                  Mulai
                </v-btn>
              </v-layout>
            </v-parallax>
          </section>

          <section>
            <v-layout
              column
              wrap
              class="my-5"
              align-center
            >
              <v-flex xs12 sm4 class="my-3">
                <div class="text-xs-center">
                  <h2 class="headline">UMKM Itu Mudah</h2>
                  <span class="subheading">
                    Saatnya Belajar UMKM 
                  </span>
                </div>
              </v-flex>
              <v-flex xs12>
                <v-container grid-list-xl>
                  <v-layout row wrap align-center>
                    <v-flex xs12 md4>
                      <v-card class="elevation-0 transparent">
                        <v-card-text class="text-xs-center">
                          <v-icon x-large class="blue--text text--lighten-2">color_lens</v-icon>
                        </v-card-text>
                        <v-card-title primary-title class="layout justify-center">
                          <div class="headline text-xs-center">Kreatif</div>
                        </v-card-title>
                        <v-card-text>
                          Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                          Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                          Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                      <v-card class="elevation-0 transparent">
                        <v-card-text class="text-xs-center">
                          <v-icon x-large class="blue--text text--lighten-2">flash_on</v-icon>
                        </v-card-text>
                        <v-card-title primary-title class="layout justify-center">
                          <div class="headline">Maksimal Profit</div>
                        </v-card-title>
                        <v-card-text>
                          Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                          Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                          Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                        </v-card-text>
                      </v-card>
                    </v-flex>
                    <v-flex xs12 md4>
                      <v-card class="elevation-0 transparent">
                        <v-card-text class="text-xs-center">
                          <v-icon x-large class="blue--text text--lighten-2">build</v-icon>
                        </v-card-text>
                        <v-card-title primary-title class="layout justify-center">
                          <div class="headline text-xs-center">UMKM itu Mudah</div>
                        </v-card-title>
                        <v-card-text>
                          Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                          Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                          Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                        </v-card-text>
                      </v-card>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-flex>
            </v-layout>
          </section>

          <section>
            <v-parallax src="http://www.kalimantan-news.com/wp-content/uploads/2018/07/211025_02383408072017_umkm.jpg" height="600">
              <v-layout column align-center justify-center>
                <!-- <div class="headline black--text mb-3 text-xs-center">UMKM Itu Menguntungkan</div>
                <em class="black--text">Pelajari Sekarang</em> -->
                <v-btn
                  class="blue lighten-2 mt-5"
                  dark
                  large
                  href="/pre-made-themes"
                >
                  Mulai Belajar
                </v-btn>
              </v-layout>
            </v-parallax>
          </section>

          <section>
            <v-container grid-list-xl>
              <v-layout row wrap justify-center class="my-5">
                <v-flex xs12 sm4>
                  <v-card class="elevation-0 transparent">
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline">Info Perushaan</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare. 
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                      Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti. 
                    </v-card-text>
                  </v-card>
                </v-flex>
                <v-flex xs12 sm4 offset-sm1>
                  <v-card class="elevation-0 transparent">
                    <v-card-title primary-title class="layout justify-center">
                      <div class="headline">Hubungi Kami</div>
                    </v-card-title>
                    <v-card-text>
                      Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                    </v-card-text>
                    <v-list class="transparent">
                      <v-list-tile>
                        <v-list-tile-action>
                          <v-icon class="blue--text text--lighten-2">phone</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                          <v-list-tile-title>0817-7777-7777</v-list-tile-title>
                        </v-list-tile-content>
                      </v-list-tile>
                      <v-list-tile>
                        <v-list-tile-action>
                          <v-icon class="blue--text text--lighten-2">place</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                          <v-list-tile-title>Kulon Progo, DIY</v-list-tile-title>
                        </v-list-tile-content>
                      </v-list-tile>
                      <v-list-tile>
                        <v-list-tile-action>
                          <v-icon class="blue--text text--lighten-2">email</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                          <v-list-tile-title>Email.com</v-list-tile-title>
                        </v-list-tile-content>
                      </v-list-tile>
                    </v-list>
                  </v-card>
                </v-flex>
              </v-layout>
            </v-container>
          </section>

          <v-footer class="blue darken-2">
            <v-layout row wrap align-center>
              <v-flex xs12>
                <div class="white--text ml-3">
                  Made
                  by <a class="white--text" href="https://github.com/adryantheo">Adryan Theo</a>
                </div>
              </v-flex>
            </v-layout>
          </v-footer>
        </v-content>
    </v-app>
     
    </div>
</template>

<script>
export default {
  data () {
      return {
        title: 'Logo'
      }
    }
}  
</script>