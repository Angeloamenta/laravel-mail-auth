<template>
<div class="home">   
<div class="container">
    <div class="row">
        <div class="col">
            <p>
            Ho sempre avuto la passione per la tecnologia, cosi dopo varie esperienze lavorative, non collegate tra loro, che mi hanno aiutato a crescere a livello personale e lavorativo, ho deciso di iniziare a farmi strada nel mondo dell'informatica diventando un web developer.
            </p>
            <h5>Mi definisco:</h5>
            <ul>
                <li>Educato e rispettoso del prossimo</li>
                <li>Empatico</li>
                <li>Tengo in modo particolare alla puntualità</li>
            </ul>
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