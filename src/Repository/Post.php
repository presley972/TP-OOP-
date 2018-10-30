<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 30/10/2018
 * Time: 15:51
 */
declare(strict_types=1);
namespace App\Repository;

use App\Entity\Post as PostEntity;

interface Post
{
    public function find(string $id): PostEntity;

    public function create(string $title): PostEntity;


}