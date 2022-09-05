<template>
<div class="container">
      <section class="text-center">
         <div class="card card" style="background-color:#e1e1e1">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                      <div class="select-wrapper">
                        <FilterProvider></FilterProvider> 
                      </div>
                    </div>
                    <FilterTag></FilterTag>
                </div>
                
              </div>
          </div>
          <ImageContainer></ImageContainer>
      </section>
    </div>
</template>
<script>
import FilterProvider from './components/FilterProvider';
import FilterTag from './components/FilterTag';
import ImageContainer from './components/ImageContainer';
   export default {
    
    data:function(){
           return {
                providers:{}
           }
    },  
    mounted: function() {
      // console.log(this.$el.attributes['data-providers'].value)

      // this.providers =  JSON.parse(this.$el.attributes['data-providers'].value())
    },
    components:{
      FilterProvider,
      ImageContainer,
      FilterTag
    }

   }
</script>
<style type="text/css" scoped>
html,
body,
.intro {
  height: 100%;
}

.card-header {
  border-bottom: 3px solid #39c0ed;
}

.form-control {
  border-color: transparent;
}

.input-group>.form-control:focus {
  border-color: transparent;
  box-shadow: inset 0 0 0 1px transparent;
}
</style>