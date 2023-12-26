const showNavbar = document.getElementById("showNavbar");
const navBarCollapsed = document.querySelector(".navBarCollapsed");

showNavbar.addEventListener('click', () => {
    
        if (!navBarCollapsed.classList.contains("show")) {

            navBarCollapsed.classList.add("show");
        } else {

            navBarCollapsed.classList.remove("show");
        }
});