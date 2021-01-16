<template>
  <div>
    <h2>Order a pizza</h2>
    <form action="#" @submit.prevent="createOrder()">
      <div class="form-group">
        <label>Name</label>
        <input v-model="order.name_unreg" type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input v-model="order.email_unreg" type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Phone</label>
        <input v-model="order.phone_unreg" type="text" name="phone" class="form-control">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input v-model="order.address_unreg" type="text" name="address" class="form-control">
      </div>
      <div class="form-group">
        <button  type="submit" class="btn btn-primary">New Order</button> 
      </div>
    </form>
  </div>
</template>

<script>
import axios from '../../../node_modules/axios'
  export default {
    data: function(){
      return {
        edit:true,
        list:[],
        order:{
          id:'',
          name_unreg:'',
          email_unreg:'',
          phone_unreg:'',
          address_unreg:''
        }
      }
    },
    mounted: function(){
      console.log('Order Component Loaded...');
    },
    methods: {
      createOrder: function(){
        console.log('Creating order...');
        let self = this;
        let params =Object.assign({}, self.order);
        axios.post('api/order/store', params)
          .then(function(){
            self.order.name_unreg = '';
            self.order.email_unreg = '';
            self.order.phone_unreg = '';
            self.order.address_unreg = '';
            self.edit = false;
            //self.fetchContactList();
          })
          .catch(function(error){
            console.log(error);
          });
      },
    }
  }
</script>