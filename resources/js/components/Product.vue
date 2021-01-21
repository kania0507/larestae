<template>
  <div><!-- @mouseover="hover = true"
    @mouseleave="hover = false" -->
    <p class="pull-right " data-toggle="modal" data-trigger="hover" data-target="#basicModal"  @click="hover? hover=false : hover=true" title="Click to show cart."><a href="#" class="no-underline"><img src="/images/cart.svg" class="img_nav" />
      <span class="marginit-left">{{this.$store.state.cartCount}}</span> Sum: {{totalPrice}}zł</a></p>
    <h3 class="title">Menu</h3>  
<Categories v-on:notify="show = true" ></Categories><!-- :username="user.username" @changeUsername="user.username = 'new name'" -->
    
<div   id="basicModal" role="dialog" v-if="hover" >
    <div class="modal-content ">
      <p class="pull-right" @click="hover? hover=false : hover=true"><a href="#" title="Hide cart">[x]</a></p>
         <h3>Cart Summary</h3>
<p><div v-for="item in this.$store.state.StoreCart" class="cart-summary">{{item.quantity}} {{item.name}},  {{item.totalPrice}} zł 
   <!-- {{item.price}} -->
    <a href="#" class="removeBtnLink"><span class="removeBtn btn btn-danger"  title="Remove from cart" @click.prevent="removeFromCart(item)">[X]</span></a> </div>
    <span class="cart-summary-line">&nbsp;</span>
<!-- Cart couter: {{this.$store.state.cartCount}},--> <b>Total: {{totalPrice}}zł</b></p>
<button @click="checkout" class="btn btn-success">Checkout</button>

    </div>
</div>


      <table class="table is-striped">
        <thead>
          <tr>
            <th>#</th>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(myprod, index) in results" track-by="id" :key="index">
            <th scope="row">{{index+1}}</th>
            <td><img :src="imgPath + myprod.image" class="prodImg img-thumbnail" /></td>
            <td>{{myprod.name}}</td>
            <td>{{myprod.description}}</td>
            <td>{{myprod.price}}zł</td>
            <td><button @click="addToCart(myprod);" class='btn btn-primary'>Add to cart</button> 
            </td>
          </tr>
        </tbody>
    </table>
      
     





  </div>
</template>

<script>
import axios from 'axios'
import { mapGetters, mapActions } from 'vuex'
import store from '../store/index.js'
import Categories from   '../components/Categories.vue'  

export default {
  name: 'product', 
  components: { Categories},
  data () {
    return {
      results: null,
      imgPath: '/images/product_images/',
      hover: false,
      show: false
    }
  },
  computed: { 
    totalPrice() {
        let total = 0;

        for (let item of this.$store.state.StoreCart) {
            total += item.totalPrice;
        }

        return total.toFixed(2);
    }, 
  },
  methods: { 
    addToCart(item) {
        this.$store.commit('addToCart', item);
        //console.log(item); 
    },
    removeFromCart(item) {
        this.$store.commit('removeFromCart', item);
    },
    checkout(){
      let data = {
        cart: JSON.stringify(this.$store.state.cart)
      }

      //axios.post('/your-checkout-endpoint', data);

      alert('Pay us ' + this.totalPrice + 'zł')
    },
    getProductsByCategory(id){
       axios.get("'/getProductsByCategory'+id")
      .then(response => {this.results = response.data.data; //console.log(response.data) 
      }
       );
    }
    
  },
  mounted() {
    axios.get("/getProducts")
      .then(response => {this.results = response.data.data; //console.log(response.data) 
      }
       );

      
       
  }  
    
}
</script> 

<style>
  @import  "../../sass/frontend/product.scss";
 
</style>