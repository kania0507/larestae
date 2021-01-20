<template>
  <div>
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
          text: 'Home',
          page:'/'
        },
        {
          id: 2,
          text: 'Order',
          page:'/order'
        },
        {
          id: 3,
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
</style>