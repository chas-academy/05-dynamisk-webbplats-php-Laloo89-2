<?php

    namespace Myblog\Controllers;
    
    use Myblog\Exceptions\DbException;
    use Myblog\Exceptions\NotFoundException;
    use Myblog\Models\PostModel;
    use Myblog\Models\AdminModel;

    class PostController extends AbstractController
    {
        const PAGE_LENGHT = 10;

        public function getAllWithPage($page): string
        {
          $page = (int)$page;
          $postModel = new PostModel();

          $posts = $postModel->getAll($page, self::PAGE_LENGTH);

          $properties = [
              'posts' => $posts,
              'currentPage' => $page,
              'lastPage' => count($posts) < self::PAGE_LENGTH
          ];

          return $this->render('views/posts.php', $properties);
        }

        public function getAll(): string
        {
           return $this->getAllWithPage(1);
        }

        public function get(int $postId): string
        {
            $postModel = new PostModel();

            try {
                $post = $postModel->get($postId);
            } catch (\Exception $e) {
                $properties = ['errorMessage' => 'Post not found!'];
                return $this->render('views/error.php', $properties);
            }

            $properties = ['post' => $post];
            return $this->render('views/post.php', $properties);
        }

        public function search(): string
        {
            $title = $this->request->getParams()->getString('search');

            $postModel = new PostModel();
            $posts = $postModel->search($title, $searchString);

            $properties = [
                'posts' => $posts,
                'currentPage' => 1,
                'lastPage' => true
            ];
            return $this->render('views/posts.php', $properties);
        }

        public function getByAdmin(): string
        {
            $postModel = new PostModel();
            $adminModel = new AdminModel();
            
            $admin = $adminModel-get($this->adminId);
            $posts = $postModel->getByAdmin($this->adminId);

            $properties = [
                'admin' => $admin,
                'posts' => $posts,
                'currentPage' => 1,
                'lastPage' => true
            /*    'isMyPosts' => true */
            ];

            return $this->render('views/posts.php', $properties);
        }
    }