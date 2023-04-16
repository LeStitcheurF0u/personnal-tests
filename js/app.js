const nav = document.querySelector('nav');
const realisation = document.querySelector('#realisation');
const hero = document.querySelector('#hero')

window.addEventListener('scroll', () => {
    let { scrollTop, clientHeight, clientWidth } = document.documentElement

    let topElementToTopViewport = realisation.getBoundingClientRect().top


    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.90){
        if(clientWidth > 900){
            nav.classList.add('sticky')
        }
    }
    if(scrollTop < (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.90){
        if(clientWidth > 900 || nav.classList.contains('sticky')){
            nav.classList.remove('sticky')
        }
    }

})
