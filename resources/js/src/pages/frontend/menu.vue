<template>
  <div class="home">

   <Navbar/>

    <div class="container">
        <div class="mt-3 mb-3">
            <form v-on:submit.prevent>
                <div class="form-group">
                    <label for="jumlah_pesanan">Code</label>
                    <input type="text" class="form-control" id="menu-code" v-model="input.menuCode">
                </div>
                <div class="form-group">
                    <label for="jumlah_pesanan">Menu</label>
                    <input type="text" class="form-control" id="menu-name" v-model="input.menuName">
                </div>
                <div class="form-group">
                    <label for="jumlah_pesanan">Price</label>
                    <input type="number" class="form-control" id="menu-price" v-model="input.price">
                </div>
                <div class="form-group">
                    <label for="available">Available</label>
                    <select class="form-control" id="available" v-model="input.available">
                        <option value="1" selected>available</option>
                        <option value="0">not-available</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" @click="pushToMenu">
                    Save
                </button>
            </form>
        </div>
        <div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Code</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Praice</th>
                        <th scope="col">Is-Available</th>
                        <th scope="col" colspan="2" style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr v-for="data in dataMenus" :key="data.id">
                    <td>{{data.id}}</td>
                    <td>{{data.menu_code}}</td>
                    <td>{{data.menu_name}}</td>
                    <td>{{data.price}}</td>
                    <td>{{data.is_available == 1 ? 'yes' : 'no'}}</td>
                    <td style="text-align: center">
                        <router-link class="nav-link" :to="'/menu/edit/'+data.id">
                            <button type="button" class="btn btn-primary">edit</button>
                        </router-link>
                    </td>
                    <td style="text-align: center">
                        <button type="submit" class="btn btn-danger" @click="deleteMenu(data.id)">
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
            </table>
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
    name: "Home",
        components: {
            Navbar,
        },

    data() {
        return {
            input : {},
            dataMenus : []
        }
    },

    mounted(){
        this.fetchDataMenu()
    },

    methods: {

        async pushToMenu(){
            let yourInputMenu   = this.input
            let save = await axios.post(`/api/save-menu`, yourInputMenu)
            console.log(save.data.status)
            if (save.data.status) {
                this.fetchDataMenu()
            }
        },

        fetchDataMenu(){
            axios.get(`/api/menu`)
                .then(response => {
                    this.dataMenus = response.data
                    // console.log(response.data, 'data nih')
            });
        },

        async deleteMenu(id){
            let edit = await axios.delete(`/api/delete-menu/${id}`)
            console.log(edit.data);
            if (edit.data.status) {
                let i = this.dataMenus.map(data => data.id).indexOf(id)
                console.log(i)
                this.dataMenus.splice(i, 1)
            }
        },
    }
};
</script>

