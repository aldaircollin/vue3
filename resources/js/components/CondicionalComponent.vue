<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                Es mi  componente explicando las condicionales                   
                </div>

                <div class="card">
                    <span v-if="seen">Hola si me puedes ver</span>
                    <h1 v-if="seen">Vue is awesome!</h1>
                    <h1 v-else>Oh no 😢 es falso</h1>
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
            seen:false
            }
        }
    }
</script>
