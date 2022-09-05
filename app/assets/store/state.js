import config from './../config/config.js';
const state = {
    locale:'en',
    settings:config,
    me: {},
    user:{
        isLoggedIn:false,
        loggedInUser:{}
    },
    isLoading: false,
    flashMessage:{},
    appName: 'Desygner',
    imageDetail:{},
    filterParams:{
        provider:'',
        tags:'',
    },


}
export default state