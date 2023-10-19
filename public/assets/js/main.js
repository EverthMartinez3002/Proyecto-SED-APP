// main.js

window.addEventListener('hashchange', () => {
    const currentRoute = window.location.hash.slice(1);

    const views = document.querySelectorAll('.view');
    views.forEach(view => {
        view.style.display = 'none';
    });

    const viewToShow = document.getElementById(currentRoute);
    if (viewToShow) {
        viewToShow.style.display = 'block';
    }
});

window.location.hash = '/';
