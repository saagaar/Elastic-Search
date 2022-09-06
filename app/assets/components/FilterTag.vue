<template>
  <div class="col-md-8 col-lg-9">
      <div class="input-group input-group-lg">
        <input type="text" class="form-control form-control-md rounded" placeholder="Search Tags" style="background-color:#f8f8f8" 
          aria-label="Type Keywords" aria-describedby="basic-addon2"  @keypress="updateTagFilter"/>
        <span class="input-group-text border-0" id="basic-addon2"><i class="fas fa-search"></i>
      </span>
      </div>
  </div>
</template>
<script>
   export default {
   	props:{
   		// providers:{type:Object,default:''}
   	},
    data:function(){
       return {
        value:''
      }
    },
    methods:{
      updateTagFilter:function(e){
             let filter=this.$store.getters.filterParams;
             if(e.target.value.length>=2){
               filter['tags'] = e.target.value;
               this.$store.commit('UPDATE_FILTER_PARAMS',filter);
             }
             else{
               filter['tags']='';
               this.$store.commit('UPDATE_FILTER_PARAMS',filter);
             }
    }
   }
 }
</script>
