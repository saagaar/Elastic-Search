<template>
 <div class="col-lg-3 col-md-12 mb-4" v-if="images">
    <div class="card">
      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      
    </div>
  </div>
</template>
<script>
   export default {
   	props:{
   		images:{type:Object,default:''}
   	},
    data:function(){
           return {
           }
    },
   
   }
</script>
