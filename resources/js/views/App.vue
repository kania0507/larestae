<template>
<div>
    <nav-bar></nav-bar>
    <h1>Vue Router Demo App</h1>
    
    <div class="container">
        <router-view></router-view>
    </div>
</div>
</template>

<script>
import NavBar from './../components/NavBar'
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