<?php declare(strict_types = 1);

namespace Example\Controllers;

use Http\Request;
use Http\Response;
//use Example\Template\Renderer;
use Example\Template\FrontendRenderer;

class Homepage
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(Request $request, Response $response, FrontendRenderer $renderer)
    {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }

    public function show()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'stranger')
        ];
        //    'menuItems' => [['href' => '/', 'text' => 'Homepage']],
        //];

        $html = $this->renderer->render('Homepage', $data);
        $this->response->setContent($html);
    }

}
