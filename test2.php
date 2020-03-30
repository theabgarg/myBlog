<form class="new-post-form" method="post">
<label for="title">Title</label><br>
<input type="text" name="title" id="title"><br>
<label for="image">Image</label><br><input type="file" name="image" id="image"><br>
<label for="desc">Short Description</label><br>
<input type="text" name="description" id="description"><br>
<label for="category">Select Category</label><br>
<select name="category" id="category">
<option value="how_to">How To</option>
<option value="news">News</option>
<option value="reviews">Reviews</option>
<option value="blog">Blog</option>
</select><br>
<input type="checkbox" name="publish" id="publish">
<p class="publish-now">Publish Now?</p><br>
<input type="submit" value="submit">
</form>