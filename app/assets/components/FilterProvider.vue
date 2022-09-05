<template>
  <select class="select select-initialized form-control-lg" data-mdb-option-height="44">
	  <option value="">All Providers</option>
	  <!-- <option v-if="allProviders.length>0" v-for="eachProviders in allProviders" value="{{$eachProviders.provider_name}}">{{$eachProviders.provider_name}}</option> -->
  </select>
</template>
<script>
   export default {
   	props:{
   		providers:{type:Object,default:''}
   	},
    data:function(){
           return {
           }
    },
   
   }
</script>
