export const addMessage = (message, sender) => {
  return {
    type: sender === 'user' ? 'USER_MESSAGE_INPUTTED' : 'WANDA_MESSAGE_RECEIVED',
    payload: {
      time: Date.now(),
      message: message,
      sender: sender
    }
  };
};