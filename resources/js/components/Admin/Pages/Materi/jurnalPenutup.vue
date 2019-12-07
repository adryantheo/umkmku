<template>
    <v-card height="100%">
        <v-card-text>
            <p class="title font-weight-regular">Jurnal Penutup:</p>
        </v-card-text>
        <v-card-text v-text="jurnalPenutup"></v-card-text>
    </v-card>
</template>

<script>
export default {
    data: () => ({
        jurnalPenutup: 'jurnal Penutup'
    })

}
</script>

<style>

</style>