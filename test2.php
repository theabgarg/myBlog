<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Create the editor container -->
<div id="editor">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>




<div class="user"><div class="user-img"><img src="'+img+'" alt="user"></div><div class="user-about"><p class="username">'+username+'</p><p class="name">'+name+'</p></div><div class="delete"><button onclick="<?php deleteUser('+username+'); ?>"><i>delete</i></button></div></div>



<div class="comment"><div class="comment-name">'+name+'</div><div class="comment-message">'+comment+'</div><div class="comment-date">'+date+'</div></div>