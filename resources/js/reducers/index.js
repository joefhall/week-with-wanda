import  { combineReducers } from 'redux';

const emotionReducer = (state = [], action) => {
  if (action && action.type === 'EMOTION_SET') {
    return action.payload.emotion;
  }
  
  return state;
};

const identityReducer = (state = [], action) => {
  if (action && action.type === 'IDENTITY_SET') {
    return action.payload.identity;
  }
  
  return state;
};

const inputReducer = (state = {}, action) => {
  if (action && action.type === 'INPUT_SET') {
    return action.payload;
  }
  
  return state;
};

const meltdownLevelReducer = (state = [], action) => {
  if (action && action.type === 'MELTDOWN_LEVEL_SET') {
    return action.payload.meltdownLevel;
  }
  
  return state;
};

const messagesReducer = (state = [], action) => {
  if (action.type === 'USER_MESSAGE_INPUTTED' || action.type === 'WANDA_MESSAGE_RECEIVED') {
    return [
      ...state,
      action.payload
    ];    
  }
  
  return state;
};

const typingReducer = (state = [], action) => {
  if (action && action.type === 'TYPING_STATUS_SET') {
    return action.payload.typing;
  }
  
  return state;
};

const userPropertyReducer = (state = {}, action) => {
  if (action.type === 'USER_PROPERTY_SET') {
    state[action.payload.property] = action.payload.value;
  }
  
  return state;
};

export default combineReducers({
  emotion: emotionReducer,
  identity: identityReducer,
  input: inputReducer,
  meltdownLevel: meltdownLevelReducer,
  messages: messagesReducer,
  typing: typingReducer,
  user: userPropertyReducer
});
