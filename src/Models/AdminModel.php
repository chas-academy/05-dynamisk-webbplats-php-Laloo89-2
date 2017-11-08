<?php

namespace Myblog\Models;

use Myblog\Domain\Admin;
use Myblog\Domain\Admin\AdminFactory;
use Myblog\Exceptions\NotFoundException;
use PDO;

class AdminModel extends AbstracModel
{
    const CLASSNAME = '\Myblog\Domain\Admin\AdminFactory';

    public function get(int $adminId): AdminFactory
    {
        $query = 'SELECT * FROM admins WHERE id = :id';
        $sth = $this->db->prepare($query);
        $sth->execute(['id' => $adminId]);

        $row = $sth->fetch();
        if (empty($row)) {
            throw new NotFoundException();
        }

        return AdminFactory::factory(
            $row['type'],
            $row['id'],
            $row['firstname'],
            $row['surname'],
            $row['email']
        );
    }

    public function getAll(): array
    {
        $query = 'SELECT * FROM admins';
        $sth = $this->db->prepare($query);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_CLASS, self::CLASSNAME);

        if (empty($row)) {
            throw new NotFoundException();
        }

        return AdminFactory::factory(
            $row['type'],
            $row['id'],
            $row['firstname'],
            $row['surname'],
            $row['email']
        );
    }

    public function getByEmail(string $email): Admin
    {
        $query = 'SELECT * FROM admins WHERE email = :user';
        $sth = $this->db->prepare($query);
        $sth->execute(['user' => $email]);
        
        $row = $sth->fetch();

        if (empty($row)) {
            throw new NotFoundexception();
        }

        return AdminFactory::factory(
            $row['type'],
            $row['id'],
            $row['firstname'],
            $row['surname'],
            $row['email']
        );
    }
}