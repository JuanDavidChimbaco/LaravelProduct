<template>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Lista de Pokemon</h1>
                <lista @url-pokemon="recibir"></lista>
                <imagen :url-pokemon="urlPokemoPadre"></imagen>
            </div>
        </div>
    </div>
</template>

<script>
import lista from "../components/ListaComponent.vue";
import imagen from "../components/ImagenComponent.vue";
    export default {
        components: {
            lista,
            imagen
        },
        data(){
            return{
                urlPokemoPadre: ''
            }
        },
        methods:{
            recibir(value){
                this.urlPokemoPadre = value;
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
