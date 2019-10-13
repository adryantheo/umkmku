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
            <!-- pengenalan akutansi -->
            <v-tab-item value="tab-0">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Apa yang dimaksud dengan akuntansi?</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- elemen dan akun" -->
            <v-tab-item value="tab-1">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Laporan keuangan terdiri dari 6 elemen:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Kode Akun -->
            <v-tab-item value="tab-2">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Kode Akun:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Pencatatan Transaksi -->
            <v-tab-item value="tab-3">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Pencatatan Transaksi:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Penyesuiaan -->
            <v-tab-item value="tab-4">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Penyesuaian:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Manfaat" -->
            <v-tab-item value="tab-5">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Manfaat:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Jurnal Penutup -->
            <v-tab-item value="tab-6">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular">Jurnal Penutup:</p>
                        </v-card-text>
                        <v-card-text v-text="text"></v-card-text>
                    </v-card>
                </v-layout>
            </v-tab-item>
    </v-tabs>
</div>
</template>

<script>
export default {
    data: () => ({
        activeTab: null,
        text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
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