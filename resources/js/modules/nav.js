function checkAnchorUrl(anchor, className) {
    if (!anchor || !className) {
        console.error('Anchor element and class name are required.');
        return;
    }

    // Get the current URL
    const currentUrl = window.location.href;

    // Compare current URL with anchor's href
    if (anchor.href === currentUrl) {
        anchor.classList.add(className);
        console.log(`Class '${className}' added to the anchor.`);
    } else {
        console.log('URLs do not match.');
    }
}

const container = document.querySelector('.inmodule-nav');
const anchors = container.querySelectorAll('a');

anchors.forEach(anchor => {
    checkAnchorUrl(anchor, 'inmodule-nav-item-active');
});
