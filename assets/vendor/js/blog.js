let navTabs = document.querySelectorAll(".nav-tabs .nav-item");

function navTabsBtn() {
    for (let i = 1; i < navTabs.length; i++) {
        if (navTabs[i].style.display === "none") {
            navTabs[i].style.display = "block";
        } else {
            navTabs[i].style.display = "none";
        }
    }
};

window.addEventListener('resize', function(e) {
    if (window.innerWidth > 992) {
        for (let i = 1; i < navTabs.length; i++) {
            navTabs[i].style.display = "block";
        }
    } else {
        for (let i = 1; i < navTabs.length; i++) {
            navTabs[i].style.display = "none";
        }
    }
});