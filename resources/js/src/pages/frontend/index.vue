<template>
  <div class="home">

   <Navbar/>

    <div class="container">

        <Hero />

        <div class="row mt-4">
            <div class="col">
            <h3>Menu <strong>Rekomendasi</strong></h3>
            </div>
            <div class="col">
            <router-link to="/menu" class="btn btn-sm btn-dark float-right"
                ><b-icon-eye></b-icon-eye> Lainnya</router-link
            >
            </div>
        </div>

        <!-- <div class="row mb-2">
            <div class="col-md-4 mt-4" v-for="item in menus" :key="item.id">
            <CardMenu :data="item"/>
            </div>
        </div> -->

        <!-- <div class="row mb-2">
            <div class="col-md-4 mt-4">
                <CardMenu />
            </div>
            <div class="col-md-4 mt-4">
                <CardMenu />
            </div>
            <div class="col-md-4 mt-4">
                <CardMenu />
            </div>
        </div> -->

        <div class="row mb-2">
            <div class="col-md-4 mt-4" v-for="item in dataMenus" :key="item.id">
                <CardMenu :data="item"/>
                <!-- <div class="card shadow card-menu">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ item.menu_name }}</h5>
                        <p class="card-text">{{ item.price }}</p>
                        <router-link :to="'/menu/'" class="btn btn-dark"><b-icon-cart></b-icon-cart> Order</router-link>
                    </div>
                </div> -->
            </div>
        </div>

    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from "../../layouts/frontend/Navbar.vue";
import Hero from "../../layouts/frontend/Hero.vue";
import CardMenu from "../../layouts/frontend/CardMenu.vue";
import axios from 'axios';

export default {
  name: "Home",
  components: {
    Navbar,
    Hero,
    CardMenu,
  },

  data() {
        return {
            dataMenus : []
        }
    },

    mounted(){
        // this.fetchDataMenu()
        axios.get('http://127.0.0.1:8000/api/menu')
            .then(response => {
                this.dataMenus = response.data
                console.log(this.dataMenus, 'wah')
        });
    },

    // methods: {

    //     fetchDataMenu(){
    //         axios.get('http://127.0.0.1:8000/api/menu')
    //             .then(response => {
    //                 this.dataMenus = response.data
    //                 console.log(this.dataMenus, 'wah')
    //         });
    //     }
    // }
};
</script>

