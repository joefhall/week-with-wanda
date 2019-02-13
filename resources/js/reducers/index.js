import  { combineReducers } from 'redux';

const messagesReducer = (state = [], action) => {
  console.log('At Reducer');
  console.log(state);
  console.log(action);
  
  if (action.type === 'USER_MESSAGE_INPUTTED' || action.type === 'WANDA_MESSAGE_RECEIVED') {
    return [
      ...state,
      action.payload
    ];    
  }
  
  return state;
};

export default combineReducers({
  messages: messagesReducer
});
