import  { combineReducers } from 'redux';

const emotionReducer = (state = [], action) => {
  console.log('Emotion reducer state', state);
  console.log('Emotion reducer action', action);
  
  if (action && action.type === 'EMOTION_SET') {
    return action.payload.emotion;
  }
  
  return state;
};

const inputReducer = (state = {}, action) => {
  console.log('Input reducer state', state);
  console.log('Input reducer action', action);
  if (action && action.type === 'INPUT_SET') {
    return action.payload;
  }
  
  return state;
};

const meltdownLevelReducer = (state = [], action) => {
  console.log('Meltdown level reducer state', state);
  console.log('Meltdown level reducer action', action);
  
  if (action && action.type === 'MELTDOWN_LEVEL_SET') {
    return action.payload.meltdownLevel;
  }
  
  return state;
};

const messagesReducer = (state = [], action) => {
  console.log('Messages reducer state', state);
  console.log('Messages reducer action', action);
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
  console.log('User property reducer state', state);
  console.log('User property reducer action', action);
  if (action.type === 'USER_PROPERTY_SET') {
    state[action.payload.property] = action.payload.value;
  }
  
  return state;
};

export default combineReducers({
  emotion: emotionReducer,
  input: inputReducer,
  meltdownLevel: meltdownLevelReducer,
  messages: messagesReducer,
  typing: typingReducer,
  user: userPropertyReducer
});
