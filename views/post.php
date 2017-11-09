  <section class="jumbotron text-center">
  <div class="container">
      <h1 class="jumbotron-heading">Arcive</h1>
      <p class="lead text-muted">Here you will find all existing posts.</p>
     
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
