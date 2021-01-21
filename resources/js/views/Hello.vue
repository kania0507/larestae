<template>
<div class="hero-container centered">
    
    
        <h1 class=" hero-header gray-background ">It's a Food Adventure</h1>
        <span>&nbsp;</span>
        <p class="lead gray-background ">You'll Never Put A B</p>
        <button class="btn btn-dark">Our menu</button>
     
</div>
</template>
<script>
export default {
  name: 'product', 
  components: {  },
  data () {
    return {
imgPath: '/images/product_images/',
    }}
}
</script>
<style>
.hero-container {
    max-width: 100%;
    background-image: url('/images/pizza-to.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 90vh;
    position: relative; 
    padding-left: 25%;
    padding-right: 25%;
    padding-top: 15%;
    padding-bottom: auto;
    
}
/*
.jumbotron {
        
        text-align: center;
        background-color: none;
        width: 60%;
    }
    */
    .hero-header {
        font-size: 5.31em;
        color: #ffffff;
        font-weight: 400;
        font-family: "Lobster";
        
        
    }
    .lead {
        
        font-size: 1.25em;
        letter-spacing: 4px;
        line-height: 1.875em;
        color: #ffffff;
        font-weight: 400;
        font-family: "Montserrat";
        text-align: center;
    }
    .centered {
        padding-left: auto;
        padding-right: auto;
        
        text-align: center;
    }
    .gray-background {
        background-color: #333;
        opacity: 0.8;
    }
</style>