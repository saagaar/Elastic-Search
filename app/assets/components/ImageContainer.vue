<template>
 	<infinite-scroll @scroll.prevent @infinite-scroll="infiniteHandler">
 		<div class="row" >
   			 <ImageCard v-if="allImages && allImages.length>0" v-for="(eachImages,index) in allImages" :key="index"  :images="eachImages" @removeFromLibrary="removeBookmarkedChildHandler" ></ImageCard> 
         <div v-else-if="noResult==false" v-html="displayMessage">
         </div>
         <div v-else>
          <hr>
           <h4>No Result Found</h4><span >It's a fuzzy search so please find word closer to term you are looking.</span>
         </div>
		</div>
    <div v-if="this.$store.getters.isLoading==true">
            <ImagePlaceHolder></ImagePlaceHolder>
     </div>
    </infinite-scroll>
</template>
<script>
import ImageCard from './ImageCard';
import InfiniteScroll from "infinite-loading-vue3";
import config from './../config/config.js';
import ImagePlaceHolder  from './../ContentPlaceholder/ImagePlaceholder';
export default {
  components: {
    InfiniteScroll,
    ImageCard,
    ImagePlaceHolder
  },
  data(){
    return {
      page: 1,
      allImages:[],
      filters:[],
      noResult: false,
      message:'',
      pageType:'home'
    };
  },
 mounted(){
  this.allImages=libraryImages
  this.pageType=entry
 },
 computed:
     {
        filterParams:function(){
           return this.$store.getters.filterParams
        },
        url:function(){
           return this.$config.ROOT_URL;
        },
        rootUrl:function(){
           return this.$config.ROOT_URL
        },
        displayMessage:function(){
          return (this.pageType=='library')?'<h4>Library is Empty!!</h4>Please go to <a href="/">Home</a> and Add to your library':'Please enter search query(at least 3 words). Fuzzy search !!'
        }
     },
  watch:{
    filterParams:{
    	handler(newval,oldval){
	        let filter=this.$store.state.filterParams;
	        this.page=0;
	        this.noResult= false,
	        this.allImages=[];
	        this.infiniteHandler();
          this.$store.commit('TOGGLE_LOADING');
    	},
    	deep:true
	}
  },
 
  methods: {
           async infiniteHandler(){
    		      try {
                if(this.pageType=='library') {
                  this.noResult= true;
                  return false;
                }
    		      	let tag=(this.$store.getters.filterParams.tags===undefined)?'':(this.$store.getters.filterParams.tags)
    		              let provider=(this.filterParams['provider']===undefined)?'':(this.filterParams['provider'])
    		              let url=config.ROOT_URL+'api/search/?tag='+tag+'&provider='+provider+'&page='+this.page;
    				        const result = await this.axios(url)
    				        if(result.data.data.length>0) {
                      this.page++;
    				          this.allImages.push(...result.data.data);
                      this.$store.commit('TOGGLE_LOADING');
    				        } 
    				        else {
                      this.$store.commit('TOGGLE_LOADING');
    				          this.noResult= true
    				          // this.$store.commit('SETFLASHMESSAGE',{status:false,message:'No Result Found'});
    				        }
    			      } catch(e) {
                  this.$store.commit('TOGGLE_LOADING');
    			        this.$store.commit('SETFLASHMESSAGE',{status:false,message:e.message});
    			      }
		     },
         removeBookmarkedChildHandler(value){
           this.allImages.splice(value, 1)
         }
 		 }
 
}
</script>