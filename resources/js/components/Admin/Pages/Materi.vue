<template>
<div style="width: 100%">
    <v-layout justify-center align-center>
        <div class="ml-4">
            <div class="headline font-weight-bold mb-1">Materi</div>
        </div>        
    </v-layout>   
    <br>
    <v-tabs fixed-tabs v-model="activeTab" color="transparent" slide-color="primary">
            <v-tab
                v-for="(item, i) in tabItems"
                :key="i" ripple
                :href="`#tab-${i}`"
            >
                {{item.name}}
            </v-tab>
            <!-- pengenalan akutansi -->
            <v-tab-item value="tab-0">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-0'">
                        <pengenalan-akuntansi></pengenalan-akuntansi>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
            <!-- elemen dan akun" -->
            <v-tab-item value="tab-1">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-1'">
                        <elemen-akuntansi></elemen-akuntansi>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
            <!-- Kode Akun -->
            <v-tab-item value="tab-2">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-2'">
                        <kode-akun></kode-akun>
                    </keep-alive>                    
                </v-layout>
            </v-tab-item>
            <!-- Pencatatan Transaksi -->
            <v-tab-item value="tab-3">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-3'">
                        <pencatatan-transaksi></pencatatan-transaksi>
                    </keep-alive>                    
                </v-layout>
            </v-tab-item>
            <!-- Penyesuiaan -->
            <v-tab-item value="tab-4">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-4'">
                        <materi-penyesuaian></materi-penyesuaian>                        
                    </keep-alive>
                </v-layout>
            </v-tab-item>
            <!-- Manfaat" -->
            <v-tab-item value="tab-5">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-5'">
                        <materi-manfaat></materi-manfaat>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
            <!-- Jurnal Penutup -->
            <v-tab-item value="tab-6">
                <v-layout row wrap>
                    <keep-alive v-if="activeTab === 'tab-6'">
                        <jurnal-penutup></jurnal-penutup>
                    </keep-alive>
                </v-layout>
            </v-tab-item>
    </v-tabs>
</div>
</template>
<script>
export default {
    components:{
        'PengenalanAkuntansi': () => import('./Materi/pengenalanAkuntansi'/* webpackChunkName: "js/chunk-Materi-PengenalanAkuntansi" */),
        'ElemenAkuntansi': () => import('./Materi/elemenAkuntansi'/* webpackChunkName: "js/chunk-Materi-ElemenAkuntansi" */),
        'KodeAkun': () => import('./Materi/kodeAkun'/* webpackChunkName: "js/chunk-Materi-KodeAkun" */),
        'PencatatanTransaksi': () => import('./Materi/pencatatanTransaksi'/* webpackChunkName: "js/chunk-Materi-PencatatanTransaksi" */),
        'MateriPenyesuaian': () => import('./Materi/penyesuaian'/* webpackChunkName: "js/chunk-Materi-MateriPenyesuaian" */),
        'MateriManfaat': () => import('./Materi/manfaat'/* webpackChunkName: "js/chunk-MateriManfaat" */),
        'JurnalPenutup': () => import('./Materi/jurnalPenutup'/* webpackChunkName: "js/chunk-Materi-JurnalPenutup" */)
    },
    data: () => ({
        activeTab: null,
        tabItems: [
            {name: "Pengenalan Akutansi"},
            {name: "Elemen dan Akun-Akun Dalam Laporan Keuangan"},
            {name: "Kode Akun"},
            {name: "Pencatatan Transaksi Kedalam Jurnal"},
            {name: "Penyesuaian"},
            {name: "Macam-Macam dan Manfaat Laporan Keuangan"},
            {name: "Jurnal Penutup dan Pembalik"},
        ],
    }),
}
</script>
<style>
</style>