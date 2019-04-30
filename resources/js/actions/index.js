export const addMessage = (time, scenario, sender, id, message, meltdownLevel = null, identity = null) => {
  return {
    type: sender === 'user' ? 'USER_MESSAGE_INPUTTED' : 'WANDA_MESSAGE_RECEIVED',
    payload: {
      time: time,
      scenario: scenario,
      sender: sender,
      id: id,
      message: message,
      meltdownLevel: meltdownLevel,
      identity: identity
    }
  };
};

export const setEmotion = emotion => {
  return {
    type: 'EMOTION_SET',
    payload: {
      emotion: emotion,
    }
  };
};

export const setIdentity = identity => {
  return {
    type: 'IDENTITY_SET',
    payload: {
      identity: identity,
    }
  };
};

export const setInput = (scenario, type, userInput) => {
  return {
    type: 'INPUT_SET',
    payload: {
      scenario: scenario,
      type: type,
      userInput: userInput
    }
  };
};

export const setMeltdownLevel = meltdownLevel => {
  return {
    type: 'MELTDOWN_LEVEL_SET',
    payload: {
      meltdownLevel: meltdownLevel,
    }
  };
};

export const setTyping = typing => {
  return {
    type: 'TYPING_STATUS_SET',
    payload: {
      typing: typing,
    }
  };
};

export const setUserProperty = (property, value) => {
  return {
    type: 'USER_PROPERTY_SET',
    payload: {
      property: property,
      value: value
    }
  };
};
