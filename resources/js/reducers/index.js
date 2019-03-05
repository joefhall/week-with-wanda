import  { combineReducers } from 'redux';

const messagesReducer = (state = [], action) => {  
  if (action.type === 'USER_MESSAGE_INPUTTED' || action.type === 'WANDA_MESSAGE_RECEIVED') {
    return [
      ...state,
      action.payload
    ];    
  }
  
  return state;
};

const inputReducer = (state = [], action) => {
  if (action && action.type === 'INPUT_SET') {
    return action.payload;
  }
  
  return {
    scenario: null,
    type: null,
    userInput: null
  };
};

const typingReducer = (state = [], action) => {
  if (action && action.type === 'TYPING_STATUS_SET') {
    return action.payload.typing;
  }
  
  return false;
};

export default combineReducers({
  messages: messagesReducer,
  input: inputReducer,
  typing: typingReducer
});
