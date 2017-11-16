<?php

namespace Myblog\Controllers;

use Myblog\Exceptions\NotFoundException;
use Myblog\Domain\Admin\AdminFactory;

class DefaultController extends AbstractController
{
    public function start(): string
    {
        $properties = [
            'title' => 'This is the title of the blog'
        ];

        return $this->render('views/layout.php', $properties);
    }
}
