<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 30/10/2018
 * Time: 16:13
 */

declare(strict_types=1);

namespace App\Action;

use App\Service\PostService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Expressive\Template\TemplateRendererInterface;

class PostBlog
{
    private $renderer;

    private $postService;

    public function __construct(TemplateRendererInterface $renderer, PostService $postService)
    {
        $this->renderer = $renderer;
        $this->postService = $postService;
    }

    public function handle(Request $request): Response
    {
        $value = $request->query->get('param1');
        $this->postService->find($value);
        $post = $this->postService->find($value);

        return new Response($this->renderer->render('helloworld.html.twig',['post' => $post]));
    }
}