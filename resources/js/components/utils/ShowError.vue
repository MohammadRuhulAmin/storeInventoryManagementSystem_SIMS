<template>
    <div class="col-sm-12" v-if="isErrors">
      
        <div class="alert alert-danger" role="alert">
            <ul>
                <li  v-for="(item,index) in errors" :key="index">{{item[0]}}</li>
            </ul>
        </div>
        <div>

        </div>
    </div>
</template>

<script>
    import {mapGetters}from 'vuex';

    export default {
        name:"ShowError",
        computed:{
            ...mapGetters({
                isErrors:'getIsErrors',
                errors:'getErrors'
            })
        }
    }
</script>

<style lang="scss" scoped>

</style>