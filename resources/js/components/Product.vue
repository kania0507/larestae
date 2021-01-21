<template>
  <div>
    <p class="pull-right">Cart couter: {{this.$store.state.cartCount}}, Sum: {{totalPrice}}zł</p>
    <h2 class="title">Menu</h2>  
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
            <td><img :src="imgPath + myprod.image" class="prodImg" /></td>
            <td>{{myprod.name}}</td>
            <td>{{myprod.description}}</td>
            <td>{{myprod.price}}zł</td>
            <td><button @click="addToCart(myprod);" class='btn btn-primary'>Add to cart</button> 
            </td>
          </tr>
        </tbody>
    </table>
      
     
<h3>Cart Summary</h3>
<p><div v-for="item in this.$store.state.StoreCart">{{item.name}}, price: {{item.price}}, 
  quantity: {{item.quantity}} {{item.totalPrice}}  
    <a href="#" class="removeBtnLink"><span class="removeBtn btn btn-danger"  title="Remove from cart" @click.prevent="removeFromCart(item)">[X]</span></a> </div>
Cart couter: {{this.$store.state.cartCount}}, Sum: {{totalPrice}}</p>
<button @click="checkout">Checkout</button>
  </div>
</template>

<script>
import axios from 'axios'
import { mapGetters, mapActions } from 'vuex'
import store from '../store/index.js'

export default {
  name: 'app', 
  data () {
    return {
      results: null,
      imgPath: '/images/product_images/'
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
    }
    
  },
  mounted() {
    axios.get("/getProducts")
      .then(response => {this.results = response.data.data; console.log(response.data) }
       );
       
  }  
    
}
</script> 

<style>
.removeBtn { color: red;  } 
.removeBtnLink  {text-decoration: none;}
.prodImg { max-height: 50px}
.table {
    table-layout: fixed;
    word-wrap: break-word;
}
</style>