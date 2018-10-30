<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 30/10/2018
 * Time: 16:20
 */

namespace App\Repository;

use App\Entity\Post as PostEntity;
use Ramsey\Uuid\Uuid;


final class InMemoryPost implements Post
{

    private $post = [];

    public function __construct()
    {
        $uuid = '69e7a80b-925d-4670-a264-912a67523f5a';
        $this->post[$uuid] = new PostEntity( $uuid,'je sais pas','je taime', 'presley');


    }

    public function find(string $id): PostEntity
    {
        if (!isset($this->post[$id])) {
            throw new \LogicException('Id does not exist');
        }

        return $this->post[$id];
    }

    public function create(string $title): PostEntity
    {
        return new PostEntity((Uuid::uuid4())->toString(), $title,'je taime','presley');
    }
}