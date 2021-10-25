<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                Es mi primer componente es una alegria                    
                </div>
                <div class="card">
                    <span v-bind:title="message">
                      Es genial si funciona
                    </span>
                </div>

                <div class="card">
                    <button id="btn1">Mi primer boton</button>
                    <button v-bind:id="message">Mi segundo boton</button>
                    <button v-bind:id="btn1">{{btn1}}</button>
                    <button v-bind:id="btn2">{{btn2}} </button>
                    <button v-bind:id="btn3">{{btn3}} </button>
                    <button v-bind:id="btn4">{{btn4}} </button>

                </div>

               <a v-bind:href="web"> Dirigiendonos a google</a>

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
            btn1:1,
            btn2:2,
            btn3:3,
            btn4:4,
            web:"https:\\www.google.com.pe"
            }
        }
    }
</script>
