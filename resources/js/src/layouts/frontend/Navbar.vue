<template>
  <nav class="navbar navbar-expand-lg navbar-light">
   <div class="container">
      <a class="navbar-brand" href="#">Ipok-Kilam</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <router-link class="nav-link" to="/">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/menu">Menu</router-link>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <router-link class="nav-link" to="/cart">
              <b-icon-bag></b-icon-bag>
              <!-- <span class="badge badge-danger">{{ updateCart ? updateCart.length : cartData.length }}</span> -->
              <span class="badge badge-danger"></span>
            </router-link>
          </li>
        </ul>
      </div>
   </div>
  </nav>
</template>

<script>
// import axios from 'axios'

export default {
    name : "Navbar",
}
</script>

<style>

</style>