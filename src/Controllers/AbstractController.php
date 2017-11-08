<?php
    namespace Myblog\Controllers;

    use Myblog\Core\Request;

    abstract class AbstractController
    {
        protected $request;
        protected $view;
        protected $customerId;

        public function __construct(Request $request)
        {
            $this->request = $request;
        }

        public function setAdminId(int $adminId)
        {
            $this->adminId = $adminId;
        }

        protected function render(string $template, array $params): string
        {
            extract($params);
            
            ob_start();
            include $template;
            $renderedView = ob_get_clean();

            return $renderedView;
        }

        protected function redirect(string $url)
        {
            ob_start();
            header('Location: '.$url);
            ob_end_flush();
            die();
        }
    }