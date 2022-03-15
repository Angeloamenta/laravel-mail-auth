<template>
<div class="home">   
<div class="container">
    <div class="row">
        <div class="col">
            Home
        </div>
        <div class="col">
            <img src="../../img/cv.jpg" alt="">
        </div>
    </div>
</div>
</div>
</template>

<script>
export default {
    name:'home'

}
</script>

<style lang="scss">
.home {
    width: 100%;
    height: 100vh;
    background-color: black;
    color: white;

    .row{

        .col{

            img{

                width: 50%;
            }
        }
    }
}
</style>