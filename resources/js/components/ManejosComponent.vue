<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                Es mi  componente explicando los manejos de usuaios                 
                </div>


            <div class="card">
                <p>{{ message }}</p>
            <button v-on:click="reverseMessage">Reverse Message</button>
            </div>

            <div class="card">
                 <button v-for="auno in alumno" v-on:click="clickea"> Alert {{auno.text}}</button>
            </div>
        <div class="card">
            <p>{{ editando }}</p>
            <input v-model="editando">
        </div>

            </div>
        </div>
    </div>
</template>



<script>
    export default {
        mounted() {            
            console.log('Component mountado.')
        },
        data() {            
            return {
            message: 'Hello',
            editando:"Edito",
             alumno:[
            {text:"ejemplo1"},
            {text:"ejemplo2"}
            
        ],
            }
        },

        methods: {
        reverseMessage: function () {
            this.message = this.message.split('').reverse().join('')
        },
        clickea: function () {
           alert("Si funciono sere muy buen alumno")
        }
        }
    }
</script>
