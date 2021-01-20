<template>
  <div>
    <h1 class="title">All Products</h1>  
      <table class="table is-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="myprod in results" track-by="id">
            <td>{{myprod.name}}</td>
            <td>{{myprod.description}}</td>
            <td>{{myprod.price}}zł</td>
            <td><button @click="addToCart(myprod);" class='button is-info'>Add to cart</button></td>
          </tr>
        </tbody>
    </table>
      
     
<h3>Cart Summary</h3>
<p><div v-for="item in this.$store.state.StoreCart">{{item.name}}, price: {{item.price}}, 
  quantity: {{item.quantity}} {{item.totalPrice}}  </div>
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
      //summ: 0
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
        console.log(item); 
    },
    checkout(){
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