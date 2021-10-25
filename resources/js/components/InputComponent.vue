<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Este es un Componente</div>

                    <div class="card-body">         
                    <p>{{ message }}</p>
                    <input v-model="message">
                    <button v-on:click="reverseMessage">Reverse Message</button>


                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {            
            return {
            message: 'Hello'
            }
        },
        computed: {
            // a computed getter
            reversedMessage: function () {
            // `this` points to the vm instance
            return this.message.split('').reverse().join('')
            }
        },
        methods: {
            //invertir mensaje en vue
            reverseMessage: function () {
            this.message = this.message.split('').reverse().join('')
        }
        }
    }
</script>
