<template>
    <div>
        <h1>Imagen</h1>
        <!-- {{ urlPokemon }} -->
        <div  v-if="urlPokemon" class="d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img :src="img" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" v-text="name"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                img: '',
                name: '',
            };
        },
        props: ['url-pokemon'],
        watch: {
            urlPokemon(){
                axios.get(this.urlPokemon)
                    .then((res) => {
                        console.log(res);
                        this.img = res.data.sprites.other["official-artwork"].front_default;
                        this.name = res.data.name;
                    })
                    .catch((err) => {
                        console.error(err);
                    });
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>
