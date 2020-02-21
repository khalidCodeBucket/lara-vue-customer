<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Customer Info Update | {{ customer.name }}</div>

                    <div class="card-body">
                        <form>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Customer Name</label>

                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" v-model="customer.name" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                    <input type="text" id="phone" class="form-control" v-model="customer.phone" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                                <div class="col-md-6">
                                    <input type="address" id="name" class="form-control" v-model="customer.address" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" @click.prevent="customerDataUpdate()">
                                        Update
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div> 

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['customer'],
        data(){
            return {
                name: '',
                phone: '',
                address: ''
            }
        },
        mounted() {
            console.log(this.customer,'Component mounted.');
        },

        methods: {

            customerDataSave() {

                axios.post('http://localhost/lara_vue_crud/customer-update/'+'this.customer.id', {
                        name: this.customer.name,
                        phone: this.customer.phone,
                        address: this.customer.address 
                    })
                    .then(function (response) {
                        // console.log(response, 'then');
                        Location = 'http://localhost/lara_vue_crud/customer';
                    })
                    .catch(function (error) {
                        console.log(error, 'error');
                    });
            }

            
        }
    }
</script>
