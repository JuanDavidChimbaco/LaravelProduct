<template>
    <div class="d-flex justify-content-center mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Hola Mundo</h1>
            </div>
            <div class="card-body">
                <p>Hola esto es un componente nuevo.</p>

                <!-- hacer un contador -->
                {{ count }}
                <div>
                    <button @click="count++" class="btn btn-primary mx-lg-1">Incrementar</button>
                    <button @click="count=0" class="btn btn-primary mx-lg-1">Resetear</button>
                    <button v-on:click="count--" class="btn btn-primary mx-lg-1">Disminuir</button>
                </div>

                <!-- mostrar lo que dijite en el input -->
                <div class="mt-2">
                    <input type="text" v-model="nombre1">
                    <h4 v-text="nombre1"></h4>
                </div>

                <!-- poner dinamico el los atributos de los html -->
                <div class="mt-2">
                    <input v-bind:type="nombre" v-model="nombre">
                </div>

                <!-- ocultar campos -->
                <div class="mt-2">
                    <input type="text" v-model="estado">
                    <button :disabled="estado" class="btn btn-success">Boton</button>
                </div>

                <!-- usar un metodo con un boton -->
                <div class="mt-2">
                    <button @click="saludar()" class="btn btn-success">Saludar</button>
                </div>

                <!-- agregar frutas -->
                <div class="mt-2">
                    <input type="text" v-model="fruit" @keyup.enter="agregar()">
                    <button class="btn btn-success" @click="agregar()">Agregar Fruta</button>
                </div>

                <!-- listas y arrays -->
                <ul v-for="fruta in frutas" :key="fruta.id">
                    <li v-text="fruta"></li>
                </ul>
                <!-- listar  -->
                <button @click="lista()" class="btn btn-secondary"> poke</button>
                <h3 v-text="name"></h3>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { reactive,computed } from 'vue';
export default {
    data() {
        return {
            count: 0,
            nombre1:'',
            nombre:'',
            estado: false,
            frutas: [],
            fruit:'',
            name:''
        }
    },
    methods: {
        saludar(){
            alert("Hola Mundo")
        },
        agregar(){
            this.frutas.push(this.fruit);
            this.fruit = '';
        },
        async lista(){
            let response = await axios.get('http://127.0.0.1:8000/producto')
            console.log(response);
            response.data.forEach(element => {
                this.frutas.push(element.nombre)
            });

        }
    },
    mounted(){
        console.log('Hola Mundo')
        // this.saludar()
    }
}

const contador = computed(() =>{
    if (count == 0) {
        return 'neutro'
    }
    if (count > 0){
        return 'bien'
    }else{
        return 'malo'
    }
})
</script>
<style>
    p{
        color: black
    }
    .bien{
        color: aquamarine;
    }
    .malo{
        color: red;
    }
    .neutro{
        color: black;
    }
</style>
