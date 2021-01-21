<template>
  <div class="navbar-container">
    
      <nav>
        <router-link class="spacing" v-for="routes in links" 
        v-bind:key="routes.id" :to="`${routes.page}`">{{routes.text}}</router-link>
      </nav>
  
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
}
.navbar-container {
  display: flex;
}
</style>