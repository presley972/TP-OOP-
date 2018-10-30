<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 30/10/2018
 * Time: 15:29
 */


declare(strict_types=1);

namespace App\Entity;

final class Post
{

    private $id;
    private $title;
    private $commente;
    private $user;

    public function __construct(string $id, string $title, string $commente, string $user)
    {
        $this->id = $id;
        $this->title = $title;
        $this->commente = $commente;
        $this->user = $user;
    }

    public function gettitle(){

        return $this->title;
    }
}