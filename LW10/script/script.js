const popupBg = document.querySelector('.popup__background');
const popup = document.querySelector('.registration');
const openPopup = document.querySelectorAll('.button')
const closePopup = document.querySelector('.registration__close')

openPopup.forEach((button) => { 
    button.addEventListener('click', (event) => { 
        event.preventDefault(); 
        popupBg.classList.add('active'); 
        popup.classList.add('active'); 
    })
});

closePopup.addEventListener('click',() => { 
    popupBg.classList.remove('active'); 
    popup.classList.remove('active');
});

document.addEventListener('click', (event) => { 
    if(event.target === popupBg) { 
        popupBg.classList.remove('active'); 
        popup.classList.remove('active');
    }
});

document.addEventListener('keydown', (event) => {
    if(event.code == 'Escape'){
        popupBg.classList.remove('active'); 
        popup.classList.remove('active');
    }
})