<template>
    <div>
        <h1>Imagen</h1>
        {{ urlPokemon }}
        <img :src="img" alt="">
    </div>
</template>

<script>
    export default {
        data() {
            return {
                img: '',
            };
        },
        props: ['url-pokemon'],
        watch: {
            urlPokemon(){
                alert(this.urlPokemon);
                axios.get(this.urlPokemon)
                    .then((res) => {
                        console.log(res);
                        this.img = res.data.sprites.other["official-artwork"].front_default;

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
