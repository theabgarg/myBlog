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

function footer(){
    var x ='<footer><div class="wrapper"><div class="sitemap"><ul><li>home</li><li>news</li><li>how_to</li><li>review</li><li>blog</li><li>contact</li></ul></div></div></footer>';
    document.write(x);
}

function postform(){
    var x = '<form method="post"><label for="title">Title</label>  <br><input type="text" name="title" id="title"> <br> <label for="image">Image</label><br><input type="file" name="image" id="image"><br><label for="desc">Short Description</label><br><input type="text" name="description" id="description"><br><label for="category">Select Category</label><br><select name="category" id="category"><option value="how_to">How To</option><option value="news">News</option><option value="reviews">Reviews</option><option value="blog">Blog</option></select><br><input type="checkbox" name="publish" id="publish"><label for="publish">Publish Now?</label><br><input type="submit" value="submit"></form>';
    return x;
}

$(document).ready(function(){
    $('.menu-toggle').click(function(){
            $('header > ul').css({"display" : "block"});
            $('.menu-toggle').css({"display" : "none"});
            $('.menu-close').css({"display" : "block"});
    });

    $('.menu-close').click(function(){
        $('header > ul').css({"display" : "none"});
        $('.menu-toggle').css({"display" : "block"});
        $('.menu-close').css({"display" : "none"});
    });

    $('.logo').click(function(){
        location.replace("./index.php");
    });
});

$('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplatSpeed:2000,
});