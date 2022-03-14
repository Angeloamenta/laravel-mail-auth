<template>
<div class="container">
    <div class="row">
        <div class="col">
            Posts
        </div>
    </div>
</div>
</template>

<script>
import Axios from "axios";
export default {
    name:'posts',
    data() {
        return {

        }
    },
    created() {
     Axios.get('http://localhost:8000/api/posts').then(
     (results) =>{
         console.log(results);
         // se volessi visualizzare l'api in random ordero dovrei 
         //aggiungere /random in axios e cancellare .posts in this.posts
    //  console.log('prova', this.posts.length)
     })
    },

}
</script>

<style>

</style>