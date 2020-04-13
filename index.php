<?php 
    include_once($_SERVER["DOCUMENT_ROOT"]."/myBlog/conn/conn.php");

    $title = "home";

    include_once($_SERVER["DOCUMENT_ROOT"]."/myBlog/includes/head.php");
?>
    </head>
    <body>


    <!-- header -->
        <?php include("includes/header.php"); ?>

    <!--         header ending        -->

    
    <!-- posts -->
        <div class="page-wrapper">
            <input type="hidden" name="offset" id="offset" value=0>
            <div class="response"></div>
        </div>

    <!-- posts ending -->

    <!-- footer -->
        <?php include("includes/footer.php"); ?>
        
    <!-- footer ending -->

        <script src="/myBlog/assets/js/main.js"></script>

        <script>
            $(document).ready(function(){
                var offset = $('#offset').val();
                $.ajax({
                    type:'POST',
                    url: 'includes/posts.php',
                    data : {offset:offset},
                    dataType: 'json',
                    success: function(data){
                        $('.response').html("");
                        if (data!= 'null') {
                           for (let i = 1; i < 10; i++) {
                            var id = data[i].id;
                            var title = data[i].title;
                            var category = data[i].category;
                            var description = data[i].description;
                            var author = data[i].author;
                            var image = data[i].image;
                            var date = data[i].date;
                            var card = '<a href="single.php?id='+id+'"><div class="card"><img src="'+image+'"><div class="content"><p class="card-title">'+title+'</p><p class="card-description">'+description+'</p><p class="author">'+author+" "+date+'</p><p class="category">'+category+'</p></div></div></a>';
                            $('.response').append(card);
                           }
                        }
                    }
                });
            });
        </script>

    </body>
</html>