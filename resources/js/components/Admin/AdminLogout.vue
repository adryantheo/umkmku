<template>    
</template>
<script>
export default {
    data(){
        return{
            email:undefined,
            password:undefined,
        }
    },
    created(){
        localStorage.removeItem('jwt');
        this.$router.push(('/'));
    }
}
</script>