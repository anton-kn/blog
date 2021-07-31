let href = document.querySelectorAll('.columns_column__list_item > a')
// console.log(href.length)
//
href.forEach((item, i) => {
    item.onclick = function (){
        console.log(item.getAttribute("href"))
    }
    // console.log(item.getAttribute("href"))
});


