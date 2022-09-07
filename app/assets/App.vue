<template>
      <section class="text-center">

        <SuccessErrorMessage></SuccessErrorMessage>
         <div class="card card" style="background-color:#e1e1e1" v-if="location=='home'">
              <div class="card-header">
                <div class="row">

                    <div class="col-md-4 col-lg-3">
                      <div class="select-wrapper" v-if="location!='library'">
                        <FilterProvider ></FilterProvider> 
                      </div>
                    </div>
                    <FilterTag v-if="location!='library'"></FilterTag>
                </div>
                
              </div>
          </div>
          <ImageContainer></ImageContainer>
           
      </section>
</template>
<script>
import FilterProvider from './components/FilterProvider';
import FilterTag from './components/FilterTag';
import ImageContainer from './components/ImageContainer';
import SuccessErrorMessage from './components/SuccessErrorMessage';
   export default {
    
    data:function(){
           return {
            location:'home'
           }
    },  
    mounted: function() {
      this.location=entry
    },
    components:{
      FilterProvider,
      ImageContainer,
      FilterTag,
      SuccessErrorMessage
    }

   }
</script>
<style type="text/css" >
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
.bookmarked{
  border:17px #927272 solid
}
</style>