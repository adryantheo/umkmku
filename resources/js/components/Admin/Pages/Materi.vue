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
                    <pengenalan-akuntansi></pengenalan-akuntansi>
                </v-layout>
            </v-tab-item>
            <!-- elemen dan akun" -->
            <v-tab-item value="tab-1">
                <v-layout row wrap>
                    <elemen-akuntansi></elemen-akuntansi>
                </v-layout>
            </v-tab-item>
            <!-- Kode Akun -->
            <v-tab-item value="tab-2">
                <v-layout row wrap>
                    <kode-akun></kode-akun>
                </v-layout>
            </v-tab-item>
            <!-- Pencatatan Transaksi -->
            <v-tab-item value="tab-3">
                <v-layout row wrap>
                    <pencatatan-transaksi></pencatatan-transaksi>
                </v-layout>
            </v-tab-item>
            <!-- Penyesuiaan -->
            <v-tab-item value="tab-4">
                <v-layout row wrap>
                    <penyesuaian></penyesuaian>
                </v-layout>
            </v-tab-item>
            <!-- Manfaat" -->
            <v-tab-item value="tab-5">
                <v-layout row wrap>
                    <manfaat></manfaat>
                </v-layout>
            </v-tab-item>
            <!-- Jurnal Penutup -->
            <v-tab-item value="tab-6">
                <v-layout row wrap>
                    <jurnal-penutup></jurnal-penutup>
                </v-layout>
            </v-tab-item>
    </v-tabs>
</div>
</template>
<script>
import pengenalanAkuntansi from './Materi/pengenalanAkuntansi';
import elemenAkuntansi from './Materi/elemenAkuntansi';
import kodeAkun from './Materi/kodeAkun';
import pencatatanTransaksi from './Materi/pencatatanTransaksi';
import penyesuaian from './Materi/penyesuaian';
import manfaat from './Materi/manfaat';
import jurnalPenutup from './Materi/jurnalPenutup';
export default {
    components:{
        pengenalanAkuntansi,
        elemenAkuntansi,
        kodeAkun,
        pencatatanTransaksi,
        penyesuaian,
        manfaat,
        jurnalPenutup
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