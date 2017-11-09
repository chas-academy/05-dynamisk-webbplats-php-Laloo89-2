<?php
  include_once("../templates/header.html");
  include_once("../templates/navigation.html");
  include_once("../templates/footer.html");
  include_once("myposts.php"); 
  ?>

<section class="jumbotron text-center">
  <div class="container">
      <h1 class="jumbotron-heading">My Posts</h1>
      <p class="lead text-muted">Create a new post:</p>
     
  </div>
</section>

<div class="album text-muted">
  <div class="container">
      <div class="row">
        <div class="card">
          <img src="http://placehold.it/356x280" alt="Image alt text here">
          <p class="card-text">Post:<?php echo $post->getPost() ?></p>
          <p class="card-text">Category:<?php echo $post->getCategory() ?></p>
      </div>
    </div>
  </div>
</div>
