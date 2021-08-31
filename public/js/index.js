function openNav(){
    let openSidenavBlock = document.querySelector('.sidenav_block');
    openSidenavBlock.style.width = "250px";
}

function closeNav(){
    let openSidenavBlock = document.querySelector('.sidenav_block');
    openSidenavBlock.style.width = "0px";
}

let pageContent = document.querySelector(".page_content");
pageContent.onclick = function (){
    closeNav();
};
