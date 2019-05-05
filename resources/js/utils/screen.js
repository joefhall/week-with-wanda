export const hideWandaOnSmallScreens = () =>  {
  if (window.innerHeight <= 568) {
    const chatWanda = document.querySelector('.chat__wanda');
    
    if (chatWanda) {
      setTimeout(() => { chatWanda.classList.add('d-none') }, 100);
    }
  }
};

export const showWanda = () =>  {
  const chatWanda = document.querySelector('.chat__wanda');

  if (chatWanda) {
    chatWanda.classList.remove('d-none');
  }
};
