import Vue from 'vue'
import Vuex from 'vuex' 
import axios from 'axios'

let cart = window.localStorage.getItem('cart');
let cartCount = window.localStorage.getItem('cartCount');

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

// mutations
const mutations = {  
  ADD_Item(state, id) {
    state.StoreCart.push(id);
  },
 

  addToCart(state, item) {
    let found = state.StoreCart.find(product => product.id == item.id);

    if (found) {
        found.quantity ++;
        found.totalPrice = found.quantity * found.price;
    } else {
        state.StoreCart.push(item);

        Vue.set(item, 'quantity', 1);
        Vue.set(item, 'totalPrice', +item.price);
    }

    state.cartCount++;
    this.commit('saveCart');
  },

  removeFromCart(state, item) {
    let index = state.StoreCart.indexOf(item);

    if (index > -1) {
        let product = state.StoreCart[index];
        state.cartCount -= product.quantity;

        state.StoreCart.splice(index, 1);
    }
    this.commit('saveCart');
  },

  // saving to local storage
  saveCart(state) {
    window.localStorage.setItem('cart', JSON.stringify(state.cart));
    window.localStorage.setItem('cartCount', state.cartCount);
  }
  
} 

// initial state
const state = { 
  cart: cart ? JSON.parse(cart) : [],
  cartCount: cartCount ? parseInt(cartCount) : 0,
  StoreCart: [], cartCount: 0
}

// getters
const getters = {  
  StoreCart: (state) => state.StoreCart,

}

// actions
const actions = {  
}
  
 
export default new Vuex.Store({
  strict: true,
  // strict: debug,
  state,
  getters,
  actions,
  mutations

})