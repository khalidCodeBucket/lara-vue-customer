<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <!-- <div class="card-header">Example Component</div> -->

                    <div class="card-body">
                        <!-- I'm an example component. -->
                        <h3>Laravel 5.7 Vue Js <br> Loop Tutorial</h3>
                    </div>
                    <div v-for="post in posts">
                        {{ post.title }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                posts: {}
            }
        },
        mounted() {
            //console.log('Component mounted.');
            
            this.getData();
        },

        methods: {
            getData(){
                axios.get('https://jsonplaceholder.typicode.com/posts')
                .then(response => {
                    this.posts = response.data;
                }).then(function (response) {
                        // handle success
                        console.log(response);
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            }
        }
    }
</script>
