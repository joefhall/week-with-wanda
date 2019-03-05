export const addMessage = (time, scenario, sender, id, message) => {
  return {
    type: sender === 'user' ? 'USER_MESSAGE_INPUTTED' : 'WANDA_MESSAGE_RECEIVED',
    payload: {
      time: time,
      scenario: scenario,
      sender: sender,
      id: id,
      message: message
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

export const setTyping = typing => {
  return {
    type: 'TYPING_STATUS_SET',
    payload: {
      typing: typing,
    }
  };
};
