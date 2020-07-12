<?php

namespace App\Controllers;

use Pimple\Container;
use Danielle\Traits\AjaxDetector;

/**
 * Abstract base controller class.
 */
abstract class Controller
{
    use AjaxDetector;

    /** @var mixed $log */
    protected $log;

    /** @var mixed $db */
    protected $db;

    /** @var mixed $router */
    protected $router;

    /** @var mixed $view */
    protected $view;

    /** @var array $data */
    public $data = [];

    /**
     * Abstract Controller constructor.
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->log = $container['log'];
        $this->db = $container['db'];
        $this->router = $container['router'];
        $this->view = $container['view'];

        $this->data['title'] = env("APP_NAME");
    }

    /**
     * Renders templates with view data.
     *
     * @param string $template
     * @return mixed
     */
    protected function render(string $template)
    {
        $template = $this->getTemplate($template);

        return $this->view->render($template, $this->data);
    }

    /**
     * Set data to pass to the view.
     *
     * @param array $data
     * @return self
     */
    protected function setViewData(array $data = []) : self
    {
        if (is_array($data)) {
            foreach ($data as $key => $val) {
                if ($key === 'title' && $val !== '') {
                    $val = $val . ' | ' . $this->data['title'];
                }
                $this->data[$key] = $val;
            }
        }

        return $this;
    }

    /**
     * Get template.
     *
     * @param string $template
     * @return string
     */
    private function getTemplate(string $template)
    {
        if(strpos($template, '.twig') === false) {
            return $template.'.twig';
        }

        return $template;
    }
}