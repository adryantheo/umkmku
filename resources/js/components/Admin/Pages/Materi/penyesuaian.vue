<template>
  <v-card height="100%">
        <v-card-text>
            <p class="title font-weight-regular">Penyesuaian:</p>
        </v-card-text>
        <v-card-text v-text="penyesuaian"></v-card-text>
    </v-card>
</template>

<script>
export default {
    data: () => ({
        penyesuaian: 'penyesuaian'
    })
}
</script>

<style>

</style>