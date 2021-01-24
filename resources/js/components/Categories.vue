<template>
  <div>
    <ul><li class="display-inline"><a href="#"  @click="selectedCategory(null)">[ ALL ]</a></li><li v-for="category in categories" class="display-inline">
      <a href="#"  @click="selectedCategory(category.id)">[ {{category.name}} ]</a><!-- :href="'/getProductsByCategory/'+category.id" -->
      </li> </ul> 
  </div>
</template>

<script>
import axios from 'axios' 

export default {
  name: 'categories', 
  data () {
    return {
        categories: null 
    }
  },
  computed: {  
  },
  methods: {  
    selectedCategory(id) { 
        this.cat_id=id;
        this.$emit('eventname', this.$parent.cat_id=id);   
    } 
  },
  mounted() { 
    axios.get("/getCategories")
      .then(response => {this.categories = response.data;  
       } );
       
  }  
    
}
</script> 
 