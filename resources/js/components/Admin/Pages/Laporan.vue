<template>
<div style="width: 100%">
    <v-layout justify-center align-center>
        <div class="ml-4">
            <div class="headline font-weight-bold mb-1">Laporan</div>
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
                    <keep-alive v-if="activeTab === 'tab-0'">
                        <jurnal-umum></jurnal-umum>
                    </keep-alive>
                </v-container>
            </v-tab-item>
            <v-tab-item value="tab-1">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-1'">
                        <neraca-saldo></neraca-saldo>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-2">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-2'">
                        <laba-rugi></laba-rugi>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-3">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-3'">
                        <perubahan-ekuitas></perubahan-ekuitas>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-4">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-4'">
                        <posisi-keuangan></posisi-keuangan>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-5">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-5'">
                        <arus-kas></arus-kas>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
    </v-tabs>    
</div>
</template>

<script>
export default {
    components:{
        JurnalUmum : () => import('./Laporan/JurnalUmum'/* webpackChunkName: "js/chunk-Laporan-JurnalUmum" */),
        NeracaSaldo: () => import('./Laporan/NeracaSaldo'/* webpackChunkName: "js/chunk-Laporan-NeracaSaldo" */),
        LabaRugi: () => import('./Laporan/LabaRugi'/* webpackChunkName: "js/chunk-Laporan-LabaRugi" */),
        PerubahanEkuitas: () => import('./Laporan/PerubahanEkuitas'/* webpackChunkName: "js/chunk-Laporan-PerubahanEkuitas" */),
        PosisiKeuangan: () => import('./Laporan/PosisiKeuangan'/* webpackChunkName: "js/chunk-Laporan-PosisiKeuangan" */),
        ArusKas: () => import('./Laporan/ArusKas'/* webpackChunkName: "js/chunk-Laporan-ArusKas" */)
    },
    data: () => ({
        activeTab: null,
        tabItems: [
            {name: "Jurnal Umum"},
            {name: "Neraca Saldo"},
            {name: "Laba Rugi"},
            {name: "Perubahan Ekuitas"},
            {name: "Laporan Posisi Keuangan/ Neraca"},
            {name: "Arus Kas"},
        ],
    }),
}
</script>