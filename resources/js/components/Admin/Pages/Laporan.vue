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
    </v-tabs>
    <v-tab-item value="tab-0">
                <v-layout row wrap>
                    <neracaSaldo></neracaSaldo>
                </v-layout>
    </v-tab-item>    
</div>
</template>

<script>
import neracaSaldo from './Laporan/NeracaSaldo.vue'
export default {
    components:{
        neracaSaldo

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