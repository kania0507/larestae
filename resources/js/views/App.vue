<template>
  <div id="app" class='container'>
      <img src= "../assets/logo.png" class="logo" />
    <nav-bar></nav-bar>
    
    <router-view></router-view>
    
  </div>
</template>

<script>
import NavBar from   '../components/NavBar.vue'    

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
</style>