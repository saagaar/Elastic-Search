import Form  from './../services/Form.js'
export const checkLoginUser = ({ commit }) => {
    // show loading
    let form=new Form();
    form.get('logincheck').then(response => {
          commit('UserLoggedIn', response.data.status );
          commit('LoggedInUser', response.data.data );
      }).catch(e => 
      {
          console.log(e);
      });
}


export const fetchServerData = ({commit},payload) => {
    // show loading
    let form=new Form();
   // try {
  return new Promise((resolve, reject) => {
    form.get(payload.url).then(response => {
      if(response.data.status==true){
          commit('SETFLASHMESSAGE',{status:true,message:response.data.message});
          if(payload.commit && payload.multiple===undefined)
          {
            commit('mutate', {
                property: payload.stateProperty,
                with: response.data[payload.stateProperty]
            });
          }
          else{
            var stateprop=payload.stateProperty;
            for (let i=0;i<stateprop.length;i++) {
              

               commit('mutate', {
                property: stateprop[i],
                with: response.data[stateprop[i]]
            });
            }
          }
          resolve(response);
      }
      else{
          resolve(response);
          commit('SETFLASHMESSAGE',{status:false,message:(response.data.message=='')?'Some error occured.Please try again in a while':response.data.message});
          reject({status:false,message:(!response.data.message)?'Some error occured.Please try again in a while':response.data.message});
        }
      }).catch(error => {
            commit('SETFLASHMESSAGE',{status:false,data:(error.hasOwnProperty('error'))?error.error:'',message:(error.data=='')?'Some error occured.Please try again in a while':error.data});
            reject(error);
      });
   
    })
}