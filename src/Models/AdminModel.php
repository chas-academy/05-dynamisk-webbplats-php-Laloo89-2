<?php

namespace Myblog\Models;

use Myblog\Domain\Admin;
use Myblog\Domain\Admin\AdminFactory;
use Myblog\Exceptions\NotFoundException;
use Myblog\Utils\Password;
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

    public function validateLogin(string $email, string $password): Admin
    {
        $query = 'SELECT * FROM admins WHERE email = :user';

        $sth = $this->db->prepare($query);
        $sth->execute(['user' => $email]);
        
        $row = $sth->fetch();

        if (empty($row)) {
            throw new NotFoundexception();
        }

        if (Password::verify($password, $row['password'])) {
         return AdminFactory::factory(
            $row['type'],
            $row['id'],
            $row['firstname'],
            $row['surname'],
            $row['email']
         );
        } else {
            throw new Exception('Nope, try again!');
        }

        return $admin;
    }

    public function register(array $formData): string
    {
        $query = 'INSERT INTO admins (firstname, surname, email, password)
                  VALUES (:firstname, :surname, :email, :password)';
      $sth = $this->db->prepare($query);
      
      $sth-bindValue('firstname', $formData['firstname']);
       $sth-bindValue('surname', $formData['surname']);
       $sth-bindValue('email', $formData['email']);
       $sth-bindValue('password', Password::hash$formData['password']);
       
       $success = '';

        if($row) {
            $success = 'true';
        } else {
            throw new Exception('Something went horribly wrong');
        }

        return $success;
    }
}