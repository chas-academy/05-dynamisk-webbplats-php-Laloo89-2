<?php
    if (isset($posts) && !empty($posts)) {
        $uniquePosts = array_unique($posts, SORT_REGULAR);
        $isMyPosts ? $posts = $uniquePosts : $posts = $posts;
    }
?>

<div class="album text-muted">
    <div class="container">
        <div class="row">
            <?php if (isset($posts) && !empty($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <div class="card">
                    <img src="http://placehold.it/356x258" alt="Alt text goes here">
                    <ul class="list-unstyled">
                        <li class="card-text"><strong>Title</strong>: <?php echo $post->getTitle() ?></li>
                    </ul>
                    <form action="">
                    <?php 
                        if ($post->getStock() === 0) {
                            $btn = '<button class="btn btn-lg btn-outline-secondary" disabled>No posts found!</button>';
                        } else {
                            $btn = '<a href="/post/' . $post->getId() . '/return" class="btn btn-lg btn-secondary">Search again!</a>';
                        }
                        echo $btn;
                    ?>
                    </form>
                </div>
            <?php endforeach ?>
            <?php else: ?>
              <section class="jumbotron">
                    <div class="container">
                        <h3 class="text-center">There is no posts <?php echo $admin->getFullName(); ?></h3>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <p>Please write a post.</p>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section> 
            <?php endif ?>
        </div>
    </div>
</div>