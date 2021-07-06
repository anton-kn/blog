let href = document.querySelectorAll('.columns_column__list_item > a')
href.forEach((item, i) => {
   console.log(item.getAttribute("href"));
});
