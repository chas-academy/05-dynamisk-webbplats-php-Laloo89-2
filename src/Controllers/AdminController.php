<?php

namespace Myblog\Controllers;

use Exception;
use Myblog\Exceptions\NotFoundException;
use Myblog\Models\AdminModel;

class AdminController extends AbstractController
{
    public function login(): string
    {
        if(!$this->request->isPost()) {
            $params = ['errorMessage' => 'You need to login to do that!'];
            return $this->render('views/error.php', $params);
        }

        $params = $this->request->getParams();

        if(!$params->has('email')) {
            $params = ['errorMessage' => 'No info provided.'];
            return $this->render('views/admins.php', $params);
        }

        $email = $params->getString('email');
        $password = $params->getString('password');
        
        $adminModel = new AdminModel();

        try {
          $adminModel->getByEmail($email);
        } catch (NotFoundExceptionv $e) {
            $this->log->warn('Admin email not found: ' . $email);
            $params = ['errorMessage' => 'Email not found.'];
            return $this->render('views/login.php', $params);
        }

        setcookie('user', $admin->getId());

        $newController = new PostController($this->request);
        $this->redirect('/admins.php');
        return $newController->getAll();
    }

    public function register() 
    {
      return $this->render('views/register.php', []);
    }

    public function getAll(): string
    {
        $adminModel = new AdminModel();

        $admins = $adminModel->getAll();

        $properties = [
            'admins' => $admins
        ];

        return $this->render('views/admins.php', $properties);
    }

    public function get(int $adminId): string
    {
        $adminModel = new adminModel();

        try {
            $admin = $adminModel->get($adminId);
        } catch (\Exception $e) {
            $properties = ['errorMessage' => 'Admin not found!'];
            return $this->render('views/admins.php', $properties);
        }

        $properties = ['admin' => $admin];
        return $this->render('views/admins.php', $properties);
    }
}
