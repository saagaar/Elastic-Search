<template>
   <select class="select select-initialized form-control-lg" data-mdb-option-height="44" @change="updateProviderFilter">
	  <option value="">All Providers</option>
	  <option v-if="allProviders.length>0" v-for="eachProviders in allProviders" >{{eachProviders.provider_name}}</option>
  </select>
</template>
<script>
   export default {
    data:function(){
     return {
       allProviders:[]
     }
    },
    mounted(){
      this.allProviders=(providers!==undefined)?providers:[];
    },
     methods:{
      updateProviderFilter:function(e){
         let filter=this.$store.getters.filterParams;
         filter['provider'] = e.target.value;
         this.$store.commit('UPDATE_FILTER_PARAMS',filter);
      }
    }
    
}
</script>
