function header(){
    var x = '<nav class="header"><div class="inner_header"><div class="logo_container"><h1>veroxyle</h1></div><ul class="navigation"><li><a href="#">Home</a></li><li><a href="#">News</a></li><li><a href="#">How-To</a></li><li><a href="#">Reviews</a></li><li><a href="#">Blog</a></li></ul><div class="search"></div></div></nav>';
    document.write(x);
}

function card(){
    var x = '<div class="card"><div class="title"><h1>'+title+'</h1></div><div class="desc"><p>'+description+'</p></div><a href="http://">delete</a><a href="http://">approval</a><a href="">Edit</a></div>';
}

function postDesign(img, title, shortDesc, username, postDate){
    var x = '<div class="postDesign"><div class="img">'+img+'</div><div class="title">'+title+'</div><div class="shortrDesc">'+shortDesc+'</div><div class="author">By'+author+'at'+date+'</div></div>';
    return x;
}