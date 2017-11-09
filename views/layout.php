<?php if (isset($errorMessage)): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Error!</strong> <?php echo $errorMessage; ?>
</div>
<?php endif; ?>

<section class="jumbotron text-center">
<div class="container">
    <h1 class="jumbotron-heading">Welcome to my Blog!</h1>
    <p class="lead text-muted">This blog is all about my everyday life.</p>
    
</div>
</section>