<div class="album text-muted">
<div class="container">
    <div class="row">
        <?php if (isset($posts) && !empty($posts)): ?>
        <?php foreach($posts as $post): ?>
            <div class="card">
                <img src="http://placehold.it/356x258" alt="Alt text goes here">
                <ul class="list-unstyled">
                    <li class="card-text"><a href="/post/<?php echo $post->getId() ?>"><strong>Title</strong>: <?php echo $post->getTitle() ?></a></li>
                </ul>
            </div>
        <?php endforeach ?>
        <?php else: ?>
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Could not find result :(</h1>
                    <p class="lead text-muted">Try again!</p>
                    <form class="form-group" action="/posts/search" method="post">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control" placeholder="Search for posts)">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search!
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </section>
        <?php endif ?>
    </div>
</div>
</div>