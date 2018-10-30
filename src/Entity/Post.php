<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 30/10/2018
 * Time: 15:29
 */


declare(strict_types=1);

namespace App\Entity;

final class Post{

    private $id;
    private $title;
    private $commente;

    public function __construct(string $id, string $name)
    {

    }
}