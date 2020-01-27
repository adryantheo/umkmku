<template>
<div style="width: 100%">
    <v-layout justify-center align-center>
        <div class="ml-4">
            <div class="headline font-weight-bold mb-1">Pengaturan</div>
        </div>
    </v-layout>
    <br>
    <v-tabs
     fixed-tabs
     v-model="activeTab"
     color="transparent"
     slide-color="primary"
     >
            <v-tab
                v-for="(item, i) in tabItems"
                :key="i" ripple
                :href="`#tab-${i}`">
                {{item.name}}
            </v-tab>
            <v-tab-item value="tab-0">
                <v-container fluid fill-height>
                    <!-- <jurnal-umum></jurnal-umum> -->
                </v-container>
            </v-tab-item>
            <v-tab-item value="tab-1">
                <v-container fluid fill-height>
                    <keep-alive v-if="activeTab === 'tab-1'">
                        <company-settings></company-settings>
                    </keep-alive>
                </v-container>
            </v-tab-item>
            <v-tab-item value="tab-2">
                <v-layout row wrap>
                    <!-- <laba-rugi></laba-rugi> -->
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-3">
                <v-layout row wrap>
                    <!-- <perubahan-ekuitas></perubahan-ekuitas> -->
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-4">
                <v-layout row wrap>
                    <!-- <posisi-keuangan></posisi-keuangan> -->
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-5">
                <v-layout row wrap>
                    <!-- <arus-kas></arus-kas> -->
                </v-layout>
            </v-tab-item>
    </v-tabs>    
</div>
</template>

<script>
export default {
    components:{
        companySettings : () => import('./Settings/CompanySettings' /* webpackChunkName: "js/chunk-Settings-CompanySettings" */),
        // neracaSaldo,
        // labaRugi,
        // perubahanEkuitas,
        // posisiKeuangan,
        // arusKas
    },
    data: () => ({
        activeTab: null,
        tabItems: [
            {name: "Pengaturan Neraca Awal"},
            {name: "Pengaturan Perusahaan"},
            {name: "Pengaturan Kode Akun"},
            {name: "Backup Data"},
            {name: "Restore Data"},
            {name: "Hapus Semua Data"},
        ],
    }),
}
</script>