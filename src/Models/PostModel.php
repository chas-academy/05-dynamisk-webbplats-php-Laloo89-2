<?php
    namespace Myblog\Models;

    use Myblog\Domain\Post;
    use Myblog\Exceptions\DbException;
    use Myblog\Domain\NotFoundException;
    use \PDO;

    class PostModel extends AbstractModel
    {
       const CLASSNAME = '\Myblog\Domain\Post';

       public function get(int $postId): Post
       {
           $query = 'SELECT * FROM posts WHERE id = :id';
           $sth = $this->db->prepare($query);
           $sth->ecevute(['id' => $postId]);

           $posts = $sth->fetchAll(PDO::FETCH_CLASS, self::CLASSNAME);
           if (empty($posts)) {
            throw new NotFoundException();
        }
        return $posts[0];

       }

       public function getAll(int $page, int $pageLength): array
       {
           $start = $pageLength * ($page - 1);

           $query = 'SELECT * FROM posts LIMIT :page, :length';
           $sth = $this->db->prepare($query);

           $sth->bindParam('page', $start, PDO::PARAM_INT);
           $sth->bindParam('length', $pageLength, PDO::PARAM_INT);
           $sth->execute();

           return $sth->fetchAll(PDO::FETCH_CLASS, self::CLASSNAME);

       }

       public function search(string $title): array
       {
           $query = <<<SQL 
SELECT * FROM posts 
WHERE title LIKE :title
SQL;

           $sth = $this->db->prepare($query);
           $sth->bindValue('title', "%$title%");
           $sth->execute();

           return $sth->fetchAll(PDO::FETCH_CLASS, self::CLASSNAME);
       }
    }

