const nav = document.querySelector('nav');
const realisation = document.querySelector('#realisation');
const packs =  document.querySelector('.packs')
const other = document.querySelector('.other')



window.addEventListener('scroll', () => {
    let { scrollTop, clientHeight, clientWidth } = document.documentElement

    let topElementToTopViewport = realisation.getBoundingClientRect().top

    let packsToTopViewport = packs.getBoundingClientRect().top


    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.95){
        if(clientWidth > 900){
            nav.classList.add('sticky')
        }
    }
    if(scrollTop < (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.95){
        if(clientWidth > 900 || nav.classList.contains('sticky')){
            nav.classList.remove('sticky')
        }
    }
    if(scrollTop > (scrollTop + packsToTopViewport).toFixed() - clientHeight * 0.80){
        packs.classList.add('visible')
        other.classList.add('visible')
    }

})

