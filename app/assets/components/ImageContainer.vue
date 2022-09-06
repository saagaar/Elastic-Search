<template>
 	<infinite-scroll @infinite-scroll="infiniteHandler" :message="message" :noResult="noResult">
 		<div class="row" >
   			 <ImageCard v-if="allImages && allImages.length>0" v-for="(eachImages,index) in allImages" :key="index"  :images="eachImages" @removeFromLibrary="removeBookmarkedChildHandler" ></ImageCard> 
         <div v-else>
           {{(pageType=='library')?'Library is Empty!!':'Please enter search query(at least 3 words)!!'}}
         </div>
		</div>

    </infinite-scroll>
</template>
<script>
import ImageCard from './ImageCard';
import InfiniteScroll from "infinite-loading-vue3";
import config from './../config/config.js';

export default {
  props:{
    // universities:{type:Array,default: function () { return [] }}

  },
  components: {
    InfiniteScroll,
    ImageCard
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
    	},
    	deep:true
	}
  },
 
  methods: {
           async infiniteHandler(){
    		      try {
    		      	this.page++;
    		      	let tag=(this.$store.getters.filterParams.tags===undefined)?'':(this.$store.getters.filterParams.tags)
    		              let provider=(this.filterParams['provider']===undefined)?'':(this.filterParams['provider'])
    		              let url=config.ROOT_URL+'api/search/?tag='+tag+'&provider='+provider+'&page='+this.page;
    				        const result = await this.axios(url)
    				        if(result.data.data.length) {
    				          this.allImages.push(...result.data.data);
    				        } 
    				        else {
    				          this.noResult= true
    				          // this.$store.commit('SETFLASHMESSAGE',{status:false,message:'No Result Found'});
    				        }
    			      } catch(e) {
    			        this.$store.commit('SETFLASHMESSAGE',{status:false,message:e.message});
    			      }
		     },
         removeBookmarkedChildHandler(value){
           this.allImages.splice(value, 1)
         }
 		 }
 
}
</script>