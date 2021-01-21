<template>
  <div id="app" class='container-fluid' style="width:100%">
    <div class="row top-bar">
      <div class="col-md-2 row-me">
        <img src= "../assets/logo.png" class="logo" />
      </div>
      <div class="col-md-6 row-me">
        <nav-bar></nav-bar>
      </div>
      <div class="col-md-4 row-me pull-right">
        <button class="btn btn-success">Zamów online</button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <router-view></router-view>
      </div>
      </div>
  </div>
</template>

<script>
import NavBar from   '../components/NavBar.vue'    

import "bootstrap/dist/css/bootstrap.min.css"
export default {
  name: 'app',
  components: {
    NavBar 
  },
  data () {
    return {}
  }
}
</script>
<style>
.logo {
  max-height: 50px;
}
.row-me {
  display: inline-block;
}
.top-bar {
  padding: 2%;
}
.pull-right {
  text-align: right;
}
</style>