const searchInput = document.querySelector(".blog-main-header__container__search__input");
const sectionFeatured = document.querySelector(".blog-main-featured");
const sectionGallery = document.querySelector(".blog-main-gallery");
const sectionSearch = document.querySelector(".blog-main-search");

function clearPage(){
    sectionFeatured.style.display = "none";
    sectionGallery.style.display = "none";
    sectionSearch.style.display = "grid";
}
function restorePage(){
    sectionFeatured.style.display = "grid";
    sectionGallery.style.display = "grid";
    sectionSearch.style.display = "none";
}

var timer;

function searchHandler(query){
    clearTimeout(timer)
    timer = setTimeout(() => {
        if(query){
            clearPage();
            getResults(query);
        } else {
            restorePage();
        }
    }, 500)


}

function fetchData(query){
    const url = blogData.root_url + "/wp-json/wp/v2/posts?search=" + query + '&_embed';
    return fetch(url).then(result => result.json());
}

function getResults(query){
    fetchData(query).then(result => {
        sectionSearch.style.display = "grid";
        return result.map(item => constructItem(item)).join(' ');
    }).then(items => {
        sectionSearch.innerHTML = items;
    })
}


function constructItem(data){
    console.log(data)
    const imageURL = data["_embedded"]["wp:featuredmedia"] ? data["_embedded"]["wp:featuredmedia"]["0"]["source_url"] : "http://meeko.local/wp-content/uploads/2020/11/interface-add-media.png";

    const authorName = data["_embedded"]["author"]["0"]["name"];
    const authorURL = data["_embedded"]["author"]["0"]["link"];
    const authorAvatar = data["_embedded"]["author"]["0"]["avatar_urls"]["24"];
    const category = data["_embedded"]["wp:term"]["0"]["0"]["name"];
    console.log(data)
    const categoryURL = data["_embedded"]["wp:term"]["0"]["0"]["link"];
    var date = data.date.slice(0, 10).split("-").reverse().join("/");
    var newdate = date.split("-").reverse().join("/");

    return `<div class="blog-main-gallery__item">
    <div class="blog-main-gallery__item__image">
    <a href="${data.link}"><img src="${imageURL}" /></div></a>
    <ul class="blog-main-gallery__item__category">
    <li class="blog-main-gallery__item__category--element" style="background:<?php echo $color; ?>21">

        <a href="${categoryURL}" style="color:  <?php echo $color; ?>" >
            ${category}
        </a>
    </li>

    </ul>
    <div class="blog-main-gallery__item__title">
    <a href="${data.link}">${data.title.rendered}</div></a>
    <div class="blog-main-gallery__item__short">
        ${ data.exerpt ? data.exerpt : data.content.rendered.slice(0, 128) }
    </div>
    <div class="blog-main-gallery__item__author">
    <div class="blog-main-gallery__item__author__image"><img src="${authorAvatar}" /></div>
    <div class="blog-main-gallery__item__author__name">
        <a href="${authorURL}">${authorName}</a>
    </div>
    <div class="blog-main-gallery__item__author__date">
    <span><i class="far fa-calendar"></i></span>
    ${newdate}
    </div></div></div>`
}



searchInput.addEventListener('input', (e) => searchHandler(e.target.value))






// clearTimeout(beginTimer);
// const beginTimer = setTimeout(() => {
// }, 1000);