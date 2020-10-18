$(function () {
    $("form").each(function () {
        $(this)
            .find("input")
            .keypress(function (e) {
                // Enter pressed?
                if (e.which == 10 || e.which == 13) {
                    this.form.submit();
                }
            });
    });
});

function header() {
    var x =
        '<nav class="header"><div class="inner_header"><div class="logo_container"><h1>veroxyle</h1></div><ul class="navigation"><li><a href="#">Home</a></li><li><a href="#">News</a></li><li><a href="#">How-To</a></li><li><a href="#">Reviews</a></li><li><a href="#">Blog</a></li></ul><div class="search"></div></div></nav>';
    document.write(x);
}

function postDesign(img, title, shortDesc, username, postDate) {
    var x = '<div class="postDesign"><div class="img">' + img + '</div><div class="title">' + title + '</div><div class="shortrDesc">' + shortDesc + '</div><div class="author">By' + author + "at" + date + "</div></div>";
    return x;
}

function footer() {
    var x = '<footer><div class="wrapper"><div class="sitemap"><ul><li>home</li><li>news</li><li>how_to</li><li>review</li><li>blog</li><li>contact</li></ul></div></div></footer>';
    document.write(x);
}

function postform() {
    var x =
        '<form class="new-post-form" method="post"><label for="title">Title</label><br><input type="text" name="title" id="title"><br><label for="image">Image</label><br><input type="file" name="image" id="image"><br><label for="desc">Short Description</label><br><input type="text" name="description" id="description"><br><label for="category">Select Category</label><br><select name="category" id="category"><option value="how_to">How To</option><option value="news">News</option><option value="reviews">Reviews</option><option value="blog">Blog</option></select><br><input type="checkbox" name="publish" id="publish"><p class="publish-now">Publish Now?</p><br><input type="submit" value="submit"></form>';
    return x;
}

function postUser(img, name, username) {
    var x =
        '<div class="user"><div class="user-img"><img src="' +
        img +
        '" alt="user"></div><div class="user-about"><p class="username">' +
        username +
        '</p><p class="name">' +
        name +
        '</p></div><div class="delete"><button onclick="deleteUser(\'' +
        username +
        "')\"><i>delete</i></button></div></div>";
    return x;
}

function commentCard(name, comment, date) {
    var x = '<div class="comment"><div class="comment-name">' + name + '</div><div class="comment-message">' + comment + '</div><div class="comment-date">' + date + "</div></div>";
    return x;
}

$(document).ready(function () {
    $(".menu-toggle").click(function () {
        $("header > ul").css({ display: "block" });
        $(".menu-toggle").css({ display: "none" });
        $(".menu-close").css({ display: "block" });
    });

    $(".menu-close").click(function () {
        $("header > ul").css({ display: "none" });
        $(".menu-toggle").css({ display: "block" });
        $(".menu-close").css({ display: "none" });
    });

    $(".logo").click(function () {
        location.replace("/index.html");
    });
});

$("form.searchbar").on("submit", function (e) {
    e.preventDefault();
    $(".search-response").html("");
    var search = $("#search").val();
    $.ajax({
        type: "POST",
        url: "/search.php",
        data: { search: search },
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.querySelector(".search-response").style.display = null;
            if (data != "null" && data != "") {
                for (let i = 0; i < data.length; i++) {
                    var id = data[i].id;
                    var title = data[i].title;
                    var category = data[i].category;
                    var description = data[i].description;
                    var author = data[i].author;
                    var image = data[i].image;
                    var date = data[i].date;
                    var cards = card(id, image, title, description, author, date);
                    $(".search-response").append(cards);
                }
            }
        },
    });
});

function assignArrows() {
    var cS = $(".card.active");
    var nS = cS.next();
    var pS = cS.prev();
    if (nS.length == 0) {
        nS = $(".card").first();
    }
    if (pS.length == 0) {
        pS = $(".card").last();
    }

    pS.addClass("prev");
    nS.addClass("next");
}

$("#right-arrow").click(function () {
    var pS = $(".card.active");
    var ppS = pS.prev();
    var cS = pS.next();
    var nS = cS.next();

    if (ppS.length == 0) {
        ppS = $(".card").last();
    }

    if (cS.length == 0) {
        cS = $(".card").first();
        nS = cS.next();
    }

    if (nS.length == 0) {
        nS = $(".card").first();
    }

    ppS.removeClass("prev");
    pS.removeClass("active").addClass("prev");
    cS.removeClass("next").addClass("active");
    nS.addClass("next");
});

$("#left-arrow").click(function () {
    var pS = $(".card.active");
    var cS = pS.prev();
    var ppS = cS.prev();
    var nS = pS.next();

    if (cS.length == 0) {
        cS = $(".card").last();
        ppS = cS.prev();
    }

    if (ppS.length == 0) {
        ppS = $(".card").last();
    }

    if (nS.length == 0) {
        nS = $(".card").first();
    }

    pS.removeClass("active").addClass("next");
    cS.removeClass("prev").addClass("active");
    ppS.addClass("prev");
    nS.removeClass("next");
});

$(document).ready(function () {
    $(".loader").fadeOut(2000);
    var res = document.querySelector(".search-response");
    if (res.innerHTML == "") {
        res.style.display = "none";
    }
});

function card(id, img, title, desc, author, date) {
    var x =
        '<div class="card"><div class="card-img"><img src="' +
        img +
        '" alt="card image"></div><div class="card-content"><div class="card-title"><a href="single.php?id=' +
        id +
        '">' +
        title +
        '</a></div><div class="card-description">' +
        desc +
        '</div><div class="card-details"><p class="card-author">' +
        author +
        '</p><p class="card-date">' +
        date +
        "</p></div></div></div>";
    return x;
}

function latestCard(id, img, title, desc, author, date) {
    var x =
        '<div class="latest-card"><div class="latest-card-img"><img src="' +
        img +
        '" alt="card image"></div><div class="latest-card-content"><div class="latest-card-title"><a href="single.php?id=' +
        id +
        '">' +
        title +
        '</a></div><div class="latest-card-description">' +
        desc +
        '</div><div class="latest-card-details"><p class="latest-card-author">' +
        author +
        '</p><p class="latest-card-date">' +
        date +
        "</p></div></div></div>";
    return x;
}

function loadTrending() {
    var offset = 0;
    $.ajax({
        type: "POST",
        url: "/includes/posts.php",
        data: { offset: offset },
        dataType: "json",
        success: function (data) {
            if (data != "null" && data != "") {
                for (let i = 1; i < data.length; i++) {
                    var id = data[i].id;
                    var title = data[i].title;
                    var category = data[i].category;
                    var description = data[i].description;
                    var author = data[i].author;
                    var image = data[i].image;
                    var date = data[i].date;
                    var t = date.split(/[- :]/);
                    date = t[0] + "-" + t[1] + "-" + t[2];
                    var cards = card(id, image, title, description, author, date);
                    $("#trending-container").append(cards);
                    if (i == 1) {
                        $(".card").addClass("active");
                    }
                }
                assignArrows();
            }
        },
    });
}

function loadBody() {
    loadTrending();
    loadLatest();
}

function loadLatest() {
    var offset = 0;
    $.ajax({
        type: "POST",
        url: "/includes/posts.php",
        data: { offset: offset },
        dataType: "json",
        success: function (data) {
            if (data != "null") {
                for (let i = 1; i < data.length; i++) {
                    var id = data[i].id;
                    var title = data[i].title;
                    var category = data[i].category;
                    var description = data[i].description;
                    var author = data[i].author;
                    var image = data[i].image;
                    var date = data[i].date;
                    var t = date.split(/[- :]/);
                    date = t[0] + "-" + t[1] + "-" + t[2];
                    var cards = latestCard(id, image, title, description, author, date);
                    $("#latest-container").append(cards);
                }
                var rmbutton = '<button class="latest-read-more">read more</button>';
                $("#latest-container").append(rmbutton);
            }
        },
    });
}
