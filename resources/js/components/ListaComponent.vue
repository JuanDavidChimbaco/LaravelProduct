<template>
    <div>
        <h1>Lista</h1>
        <select name="" id="" v-model="pokemon" @change="enviar">
            <option v-for="item in pokemones" v-text="item.name" :key="item.id" :value="item.url"></option>
        </select>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pokemones: [],
            pokemon: '',
        };
    },
    methods: {
        listar() {
            axios
                .get('https://pokeapi.co/api/v2/pokemon')
                .then((res) => {
                    console.log(res);
                    this.pokemones = res.data.results;
                })
                .catch((err) => {
                    console.error(err);
                });
        },
        enviar(){
            this.$emit('url-pokemon', this.pokemon);
        }
    },
    mounted() {
        this.listar();
    },
};
</script>

<style lang="scss" scoped></style>
