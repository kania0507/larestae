<template>
  <div class="navbar-container">
    
      <nav>
        <router-link class="spacing" v-for="routes in links" 
        v-bind:key="routes.id" :to="`${routes.page}`">{{routes.text}} </router-link> 
      </nav> 
      <div class="social-icons">F T I</div>
      
  </div>
</template>

<script> 

export default {
  name: 'NavBar', 
  data() {
    return {
      links: [
        
        {
          id: 1,
          text: 'Start',
          page:'/'
        },
         {
          id: 2,
          text: 'Menu',
          page:'/menu'
        },
        {
          id: 3,
          text: 'Order',
          page:'/order'
        },
        {
          id: 4,
          text: 'Contact',
          page:'/contact'
        }
      ]
    }
  }
}
</script>
<style>
.spacing {
  margin-right: 10px;
  text-transform: uppercase;
}
.navbar-container {
  display: flex;
}
nav a::after {
    margin-left: 1em;
    content: "-";
    color: white;
  }
  nav a:hover {
    color: silver;
    text-decoration: none;
  }

</style>