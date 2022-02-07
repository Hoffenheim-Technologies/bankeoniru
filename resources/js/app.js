require('./bootstrap');

window.onscroll = () => {stickyNav()};

const stickyNav = () => {
    var header = document.getElementById("main-header")
    if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
        header.classList.remove('absolute', 'bg-transparent')
        header.classList.add('sticky', 'bg-white')
    } else {
        header.classList.remove('sticky', 'bg-white')
        header.classList.add('absolute', 'bg-transparent')
    }
}

document.addEventListener('DOMContentLoaded', () => {
    var expandables = document.getElementsByClassName("expand");
    for (let index = 0; index < expandables.length; index++) {
        let element = expandables[index];
        element.addEventListener('mouseover', event => {
            const expansion = event.target.closest('li').children.namedItem(event.target.closest('li').classList[1])
            expansion.classList.remove('hidden')
        })
    }
    // document.addEventListener('mouseover', event => {
    //     if (!event.target.matches('.expansion')){
    //         if (!event.target.classList.contains('hidden')) {
    //             event.target.classList.add('hidden')
    //         }
    //     }
    // })
})

