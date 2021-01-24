<template>
  <div id="app" class='container-fluid' style="width:100%">
    <div class="row top-bar">
      <div class="col-md-2 row-me">
        <img src= "../assets/logo.png" class="logo" />
      </div>
      <div class="col-md-10 row-me pull-right"  >
        <nav-bar></nav-bar>
      </div>
      <!--<div class="col-md-4 row-me pull-right"> 
        <div class="display-inline"><button class="btn btn-success">Zamów online</button></div>
      </div>-->
    </div>
    <div class="row">
      <div class="content">
          <router-view></router-view>
          <Footer></Footer>
      </div>
      </div>
     
  </div>
</template>

<script>
import NavBar from   '../components/NavBar.vue'    
import Footer from   '../components/Footer.vue'   

import "bootstrap/dist/css/bootstrap.min.css"
export default {
  name: 'app',
  components: {
    NavBar, Footer
  },
  data () {
    return {}
  }
}
</script>
<style>
.logo {
  max-height: 30px;
}
.row-me {
  display: inline-block;
}
.top-bar {
  padding: 2%;
  background-color: #151d25;
  color: white; 
  
}
nav a {
    color: white; 
  }
  
.pull-right {
  text-align: right;
}
.img_nav {
  background-color: silver;
  max-height: 40px;
} 
.display-inline {
  display: inline;
}
.navbar-container {
  float: right;
  padding-right: 5em;
}
.content {
  width: 100%; 

}

</style>