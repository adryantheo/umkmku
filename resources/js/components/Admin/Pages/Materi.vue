<template>
<div style="width: 100%">
    <v-layout justify-center align-center>
        <div class="ml-4">
            <div class="headline font-weight-bold mb-1">Materi</div>
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
</div>
</template>

<script>
export default {
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