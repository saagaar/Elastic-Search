 <template>
 <content-loader
    :height="800"
    :width="800"
    :speed="2"
    primaryColor="#c0c0c0"
    secondaryColor="#ffffff"
  >
      
        <rect x="0" y="0" rx="0" ry="8" width="170" height="170" /> 
        <rect x="220" y="0" rx="0" ry="8" width="170" height="170" /> 
        <rect x="440" y="0" rx="0" ry="8" width="170" height="170" /> 
        <rect x="660" y="0" rx="8" ry="10" width="170"  height="170" /> 
        <rect x="0" y="220" rx="8" ry="10" width="170" height="170" /> 
        <rect x="220" y="220" rx="8" ry="10" width="170" height="170" /> 
        <rect x="440" y="220" rx="8" ry="10" width="170" height="170" /> 
        <rect x="660" y="220" rx="8" ry="10" width="170" height="170" /> 
       
       
   
    </content-loader>
</template>

 <script>
   import { ContentLoader } from 'vue-content-loader';
    export default {
        data() {
          return {
           
           }
        },
      
        components:
        {
           ContentLoader
        },
    }
</script>
