
export const  mutate= (state, payload) =>{
        state[payload.property] = payload.with;
} 
export const LoggedInUser = (state, user) => {
    state.user.isLoggedIn=false;
    if(user!=null)
        state.user.isLoggedIn=true
    state.user.loggedInUser = user
}
export const TOGGLE_LOADING = state => 
{
    state.isLoading = !state.isLoading;
}
export const SETFLASHMESSAGE = (state, flashdata)=> {
    state.flashMessage = flashdata;
}
export const IMAGE_DETAIL = (state, value)=> 
{
    state.imageDetail = value;
}

export const UPDATE_FILTER_PARAMS = (state,value) => {
    state.filterParams=(value);
}