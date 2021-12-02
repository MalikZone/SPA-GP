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

        <div class="row mb-2">
            <div class="col-md-4 mt-4" v-for="item in dataMenus" :key="item.id">
                <CardMenu :data="item"/>
            </div>
        </div>

    </div>

    <Footer />
  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from "../../layouts/frontend/Navbar.vue";
import Hero from "../../layouts/frontend/Hero.vue";
import CardMenu from "../../layouts/frontend/CardMenu.vue";
import Footer from "../../layouts/frontend/Footer.vue";
import axios from 'axios';

export default {
  name: "Home",
  components: {
    Navbar,
    Hero,
    CardMenu,
    Footer,
  },

  data() {
        return {
            dataMenus : []
        }
    },

    mounted(){
        axios.get('http://127.0.0.1:8000/api/menu')
            .then(response => {
                this.dataMenus = response.data
                // console.log(this.dataMenus, 'wah')
        });
    },
};
</script>

