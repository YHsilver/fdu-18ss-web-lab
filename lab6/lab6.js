var featured = document.getElementById("featured");
var caption = document.getElementById("caption");
var img = featured.firstElementChild;
featured.onmouseenter = function () {
    caption.style.opacity = 0.8;

};
featured.onmouseleave = function () {
    caption.style.opacity = 0;
};


var thums = document.getElementById("thumbnails");
var children = thums.children;


for (var i = 0; i < children.length; i++) {
    (function (i) {

        children[i].onclick = function () {
            img.src = "images/medium/" + children[i].src.slice(-14);
            caption.innerHTML = children[i].title;
            img.title=children[i].title;
        }


    })(i)

}