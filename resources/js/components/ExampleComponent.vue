<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <button @click="getUser">Get User</button>
                    <button @click="createCustomer">Create Customer</button>
                    <!--<button @click="clearAccount">Clear Account</button>-->
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
        methods:{
            createCustomer(){
                axios.get('/api/create-customer').then( ({data}) => console.log(data) )
            },
            getUser(){
                axios.get('/api/user').then( ({data}) => console.log(data) )
            },
            clearAccount(){
                axios.get('/api/clear-account').then( ({data}) => console.log(data) )
            }
        }
    }
</script>
