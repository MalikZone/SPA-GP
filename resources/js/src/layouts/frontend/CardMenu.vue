<template>
    <div class="card shadow card-menu">
        <!-- <img :src=" '/assets/images/' + data.image " class="card-img-top" alt="..."> -->
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ data.menu_name }}</h5>
            <p class="card-text">Rp. {{ new Intl.NumberFormat('id').format(data.price) }}</p>
            <router-link :to="'/menu/'" class="btn btn-dark"><b-icon-cart></b-icon-cart> Order</router-link>
            <!-- <router-link :to="'/menu/'+dataMenus.id" class="btn btn-dark"><b-icon-cart></b-icon-cart> Order</router-link> -->
        </div>
    </div>
    <!-- <div class="card shadow card-menu">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Kopi</h5>
            <p class="card-text">Rp. 10.000</p>
            <router-link :to="'/menu/'" class="btn btn-dark"><b-icon-cart></b-icon-cart> Order</router-link>
        </div>
    </div> -->
</template>

<script>
export default {
    name : "CardMenu",
    props : ["data"]

}
</script>
