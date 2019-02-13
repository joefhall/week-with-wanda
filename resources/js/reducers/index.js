import  { combineReducers } from 'redux';

const currentInputMessageReducer = (message = null, action) => {
  console.log('At Reducer');
  console.log(message, action);
  if (action.type === 'MESSAGE_INPUTTED') {
    return action.payload;
  }
  
  return message;
};

const messagesReducer = (state = [], action) => {
  console.log('At Reducer');
  console.log(action);
  
  return [
    ...state,
    action.payload
  ];
};

export default combineReducers({
  currentInputMessage: currentInputMessageReducer,
  messages: messagesReducer
});
