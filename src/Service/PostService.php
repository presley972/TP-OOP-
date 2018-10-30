<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 30/10/2018
 * Time: 16:06
 */

namespace App\Service;

use App\Entity\Post as PostEntity;
use App\Repository\Post;
use App\Validator\Validator;

class PostService
{
    private $validator;
    private $repository;

    public function __construct(Validator $validator, Post $postRepository)
    {
        $this->validator = $validator;
        $this->repository = $postRepository;
    }

    public function find(string $value): PostEntity
    {
        $this->validator->validate($value);
        // if ($this->cache->has($value)) {
        //     return $this->cache->get($value);
        // }
        $post = $this->repository->find($value);
        // $this->cache->set($value, $user);

        return $post;
    }
}