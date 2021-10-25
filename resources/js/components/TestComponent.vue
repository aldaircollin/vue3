<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Este es un Componente</div>

                    <div class="card-body">
                        Yo soy un componente
                    <p>Original message: "{{ message }}"</p>
                    <p>Computed reversed message: "{{ compRreversedMessage}}"</p>
                    <p>Metodo Reversed message: "{{ methoReverseMessage() }}"</p>

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
            compRreversedMessage: function () {
            // `this` points to the vm instance
            return this.message.split('').reverse().join('')
            }
        },
        // in component
        methods: {
            methoReverseMessage: function () {
                return this.message.split('').reverse().join('')
            }
        }
    }
</script>
