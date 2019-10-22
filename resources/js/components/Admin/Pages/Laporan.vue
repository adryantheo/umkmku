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
                :href="`#tab-${i}`"
            >
                {{item.name}}
            </v-tab>
            <v-tab-item value="tab-0">
                <v-container fluid fill-height>
                    <neraca-saldo></neraca-saldo>
                </v-container>
            </v-tab-item>
            <v-tab-item value="tab-1">
                <v-layout row wrap>
                    <laba-rugi></laba-rugi>
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-2">
                <v-layout row wrap>
                    <perubahan-ekuitas></perubahan-ekuitas>
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-3">
                <v-layout row wrap>
                    <posisi-keuangan></posisi-keuangan>
                </v-layout>
            </v-tab-item>
            <v-tab-item value="tab-4">
                <v-layout row wrap>
                    <arus-kas></arus-kas>
                </v-layout>
            </v-tab-item>
    </v-tabs>    
</div>
</template>

<script>
import neracaSaldo from './Laporan/NeracaSaldo';
import labaRugi from './Laporan/LabaRugi';
import perubahanEkuitas from './Laporan/PerubahanEkuitas';
import posisiKeuangan from './Laporan/PosisiKeuangan';
import arusKas from './Laporan/ArusKas';
export default {
    components:{
        neracaSaldo,
        labaRugi,
        perubahanEkuitas,
        posisiKeuangan,
        arusKas
    },
    data: () => ({
        activeTab: null,
        tabItems: [
            {name: "Neraca Saldo"},
            {name: "Laba Rugi"},
            {name: "Perubahan Ekuitas"},
            {name: "Laporan Posisi Keuangan/ Neraca"},
            {name: "Arus Kas"},
        ],
    }),
    
}
</script>