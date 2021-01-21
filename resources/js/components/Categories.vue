<template>
  <div>
    <ul><li v-for="category in categories" class="display-inline"><a :href="'/getProductsByCategory/'+category.id" @click="selectedCategory">[{{category.name}}]</a></li> </ul> 
  </div>
</template>

<script>
import axios from 'axios' 

export default {
  name: 'categories', 
  data () {
    return {
        categories: null,
        id:null
    }
  },
  computed: {  
  },
  methods: {  
    selectedCategory() {
        this.$emit('selectedCategory')
    }
  },
  mounted() {
      
    axios.get("/getCategories")
      .then(response => {this.categories = response.data; console.log(response.data) }
       );
       
  }  
    
}
</script> 
 