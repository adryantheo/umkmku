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
                            <p class="title font-weight-regular-bold">Apa yang dimaksud dengan akuntansi?</p>
                        </v-card-text>
                        <v-card-text v-text="pengenalanAkuntansi">test</v-card-text>
                    </v-card>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Siklus Akuntansi</p>
                        </v-card-text>
                        <v-card-text v-text="pengenalanAkuntansi">test</v-card-text>
                        <div class="justify">
                            <img src="/materi_img/siklus.jpg" alt="siklus akuntansi" position="center" height="auto">
                        </div>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- elemen dan akun" -->
            <v-tab-item value="tab-1">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Elemen dan Akun-Akun dalam Akuntansi</p>
                        </v-card-text>
                        <v-card-text v-text="elemenAkuntansi"></v-card-text>
                    </v-card>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Akun</p>
                        </v-card-text>
                        <v-card-text v-text="akunAkuntansi"></v-card-text>
                        <table></table>
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Kode Akun -->
            <v-tab-item value="tab-2">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Kode Akun</p>
                        </v-card-text>
                        <v-card-text v-text="kodeAkun"></v-card-text>
                        <img src="/materi_img/kodeAkun.png" alt="kode akun">
                    </v-card>
                </v-layout>
            </v-tab-item>
            <!-- Pencatatan Transaksi -->
            <v-tab-item value="tab-3">
                <v-layout row wrap>
                    <v-card height="100%">
                        <v-card-text>
                            <p class="title font-weight-regular-bold">Pencatatan Transaksi (Pembuatan Jurnal)</p>
                        </v-card-text>
                        <v-card-text>Persamaan Akuntansi</v-card-text>
                        <img src="/materi_img/persamaanTransaksi.png" alt="Persanaab akuntansi" position="center" height="auto">
                        <v-card-text v-text="persamaanAkuntansi"></v-card-text>
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
        pengenalanAkuntansi: 'Akuntansi adalah sistem informasi yang mengukur aktivitas bisnis,mengolah data menjadi laporan dan mengkomunikasikan hasilnya kepadapara pengambil keputusan. Akuntansi digunakan oleh perusahaan untukmenghasilkan informasi keuangan dalam wujud laporan keuangan.Akuntansi dapat digunakan untuk perusahaan jasa, dagang, maupun manufaktur (memproduksi barang). Adapun pihak-pihak pemakai informasi akuntansi antara lain pemilik, kreditur (pemberi pinjaman), pemerintah,investor, maupun karyawan perusahaan.',
        siklusAkuntansi: 'Siklus akuntansi merupakan proses pencatatan akuntansi mulai dari analisis bukti transaksi sampai pada neraca saldo awal periode.',
        elemenAkuntansi: 'Dalam akuntansi terdapat enam elemen penting, antara lain: Aset, Utang, Ekuitas, Pendapatan, Beban/Biaya, Pengembalian Ekuitas.',
        akunAkuntansi: 'Akun merupakan komponen suatu elemen laporan keuangan.',
        kodeAkun:'Kode akun merupakan kode, lambang, simbol dari akun/rekening transaksi perusahaan. Penggunaan kode akun bertujuan untuk memepermudah dalam pencatatan transaksi mulai dari penjurnalan sampai dengan pembuatan laporan keuangan. Kode akun yang lazim digunakan adalah sebagai berikut: Aset (diawali dengan angka 1), utang (diawali dengan angka 2), ekuitas (diawali dengan angka 3), pendapatan (diawali dengan angka 4), biaya/beban (diawali dengan angka 5), pengembalian ekuitas (diawali dengan angka 6), akun lain-lain (diawali dengan angka 7).',
        persamaanAkuntansi: 'Penggunaan dana dan pemerolehan dana harus selalu seimbang , jika terjadi ketidakseimbangan diantaranya terjadi kesalahan dalam pengelolaan dana, baik sumber maupun penggunanya.Pencatatan transaksi dicatat sesuai dengan karakteristik akun sebagai berikut: ',
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