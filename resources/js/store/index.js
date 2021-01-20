import Vue from 'vue'
import Vuex from 'vuex' 
import axios from 'axios'

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
  }
  
}


// initial state
const state = { 
    
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