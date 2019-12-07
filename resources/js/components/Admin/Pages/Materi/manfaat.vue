<template>
  <v-card height="100%">
        <v-card-text>
            <p class="title font-weight-regular">Manfaat:</p>
        </v-card-text>
        <v-card-text v-text="manfaat"></v-card-text>
    </v-card>
</template>

<script>
export default {
    data: () => ({
        manfaat: 'manfaat'
    })

}
</script>

<style>

</style>