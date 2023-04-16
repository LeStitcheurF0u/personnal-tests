const nav = document.querySelector('nav');
const realisation = document.querySelector('#realisation');

window.addEventListener('scroll', () => {
    let { scrollTop, clientHeight } = document.documentElement

    let topElementToTopViewport = realisation.getBoundingClientRect().top

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.90){
        nav.classList.add('sticky')
    }
    if(scrollTop < (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.90){
        if(nav.classList.contains('sticky')){
            nav.classList.remove('sticky')
        }
    }

})
