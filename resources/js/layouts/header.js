const header = document.querySelector('.header-container');

const anchors = header.querySelectorAll('a')

anchors.forEach(anchor => {
    // check the current url and the href, if href is contained in current url, add active class
    // else add inactive class

    if (anchor.innerText.includes('ERP')) return;

    if (window.location.href.includes(anchor.href)) {
        anchor.classList.add('active-nav');
    } else {
        anchor.classList.add('inactive-nav');
    }
})
