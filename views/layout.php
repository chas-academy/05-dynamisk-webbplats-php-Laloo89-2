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
    <form class="form-group" action="/posts/search" method="post">
        <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="Search for specific posts.)">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search!
                </button>
            </span>
        </div>
    </form>
</div>
</section>