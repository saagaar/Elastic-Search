<template>
 <div class="col-lg-3 col-md-12 mb-4" v-if="images"  @click="bookmarkThisImage">
    <div :class="'card '">
      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img :src="uploadUrl+'images/'+thisImage.provider+'/thumbnail/'+thisImage.image" :class="'img-fluid '+bookmarkClass " />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
    </div>
  </div>
  <div v-else>
    File Not Found!!
  </div>
</template>
<script>
import config from './../config/config.js';

   export default {
   	props:{
   		images:{type:Object,default:''}
   	},
    data:function(){
       return {
        bookmarkClass:'',
        thisImage:this.images,
        messsage:''
       }
    },
    computed:
     {
        uploadUrl:function(){
           return config.UPLOAD_URL
        },
    },
    mounted(){
      if(entry=='library'){
        this.bookmarkClass='bookmarked'
      }
    },
    methods:{
        bookmarkThisImage(){
          try {
                let current=this;
                let url=config.ROOT_URL+'api/bookmark';
                this.axios.get(url+'?image_id='+this.thisImage.image_id)
                .then(function(response){     
                if(response.data.status) {
                   current.bookmarkClass=current.bookmarkClass=="bookmarked"?'':'bookmarked';
                   if(entry=='library'){
                     current.$emit('removeFromLibrary', current.thisImage);
                   }
                   current.$store.commit('SETFLASHMESSAGE',{status:true,message:response.data.message });
                } 
                else {
                  current.$store.commit('SETFLASHMESSAGE',{status:false,message:'Image Save Failed!'});
                }
              })
            } catch(e) {
                current.$store.commit('SETFLASHMESSAGE',{status:false,message:'Some Error Occured!!'});
            }
        }
    }
   }
</script>
<style type="text/css" scoped>
.bookmarked{
  border:17px #927272 solid
}
</style>
