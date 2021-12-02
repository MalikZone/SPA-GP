<template>
  <div class="home">

   <Navbar/>

    <div class="container">
        <div class="mt-3 mb-3">
            <form v-on:submit.prevent>
                <div class="form-group">
                    <label for="jumlah_pesanan">Code</label>
                    <input type="text" class="form-control" id="menu-code" v-model="menu.menu_code">
                </div>
                <div class="form-group">
                    <label for="jumlah_pesanan">Menu</label>
                    <input type="text" class="form-control" id="menu-name" v-model="menu.menu_name">
                </div>
                <div class="form-group">
                    <label for="jumlah_pesanan">Price</label>
                    <input type="number" class="form-control" id="menu-price" v-model="menu.price">
                </div>
                <div class="form-group">
                    <label for="available">Available</label>
                    <select class="form-control" id="available" v-model="selected">
                        <option value="1">available</option>
                        <option value="0">not-available</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" @click="editMenu(menu.id)">
                    Save
                </button>
            </form>
        </div>
    </div>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<script>
// @ is an alias to /src
import Navbar from "../../layouts/frontend/Navbar.vue";
import axios from 'axios';

export default {
    name: "EditMenu",
        components: {
            Navbar,
        },

    data() {
        return {
            menu : {},
            selected : '',
        }
    },

    mounted(){
        this.fetchDataMenuById()
    },

    methods: {

        fetchDataMenuById(){
            const url = window.location.href.split('/')
            const id  = url[5]
            axios.get(`http://127.0.0.1:8000/api/menu/edit/${id}`)
                .then(response => {
                    this.menu = response.data
                    this.selected = response.data.is_available
                    // console.log(response.data, 'data nih')
            });
        },

        async editMenu(id){
            let yourInputMenu          = this.menu
            yourInputMenu.is_available = document.getElementById("available").value
            let edit = await axios.patch(`/api/edit-menu/${id}`, yourInputMenu)
            if (edit.data.status) {
                this.$router.push({
                    path : '/menu',
                })
            }
            // .then((response) => {

            //     this.$router.push({
            //         path : '/menu',
            //     })
            //     // this.$toast.success('Data Masuk', {
            //     //     type        : 'success',
            //     //     position    : 'top-right',
            //     //     dismissible : true
            //     // })

            // })
    
            // .catch((error) => 
            //     console.log("cart error => " + error)
            // )
        },
    }
};
</script>