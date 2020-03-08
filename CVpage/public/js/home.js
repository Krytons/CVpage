const docDismiss = document.querySelector("#dismiss");
const docOverlay = document.querySelector(".overlay");
const docSidebar = document.querySelector("#sidebar");
const docCollapse = document.querySelector("#sidebarCollapse");
const docContent = document.querySelector("#content")

docCollapse.addEventListener('click', closeNavigation);
docDismiss.addEventListener('click', activateNavigation);
docOverlay.addEventListener('click', activateNavigation);


function activateNavigation(){
    //Open sidebar
    docSidebar.classList.add("active");
    docOverlay.classList.remove("active");
    for (element of document.querySelectorAll("collapse.in")){
        element.toggle("in");
    }
    for (element of document.querySelectorAll("aCollapsive")){
        console.log(element);
        element.attr("aria-expanded", "false");
    }
    docContent.classList.remove("hidden");
}

function closeNavigation(){
    //Hide sidebar
    docSidebar.classList.remove("active");
    //Hide overlay
    docOverlay.classList.add("active");
    docContent.classList.add("hidden");
}














