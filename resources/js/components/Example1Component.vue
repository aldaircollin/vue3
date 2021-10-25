<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Este es un Componente secundario</div>

                    <div class="card-body">
                        Yo soy un componente
                    </div>
                    <div class="alert" v-text="message1"></div>
 <br>
                    {{message1}}

                    <span v-bind:title="message">
                        Hover your mouse over me for a few seconds
                    to see my dynamically bound title!
                    </span>
                     <span v-if="seen">Este mensaje se muestra solo si es verdadero seen</span>

                        <ol>
                        <li v-for="todo in todos" >
                        {{ todo.text }}
                        </li>
                        </ol>
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
            message: 'I am an alert.',
            message1: 'Probando nuevo texto.',
            seen:false,
            todos: [
                { text: 'Learn JavaScript' },
                { text: 'Learn Vue' },
                { text: 'Build something awesome' }
                    ]
        }
        }
    }
</script>
