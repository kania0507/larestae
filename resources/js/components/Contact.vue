<template>
    <div class="contact">
        <div class='draw-pizza'></div>
        <h3>Contact</h3>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.contact{
    min-height:75vh;
    padding: 2% 10% 2% 10%;
}
.draw-pizza {
      background-image: url('/images/pizza-draw.png');
      background-size: contain; 
       background-position: left 5%;
       background-repeat: repeat-x;
       min-height: 10vh; 
       height: 5vh; 
       margin-bottom: 5%;
        
  }
</style>
