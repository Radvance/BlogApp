<?php

namespace BlogApp\Repository;

use Radvance\Repository\BaseRepository;
use Radvance\Repository\RepositoryInterface;
use BlogApp\Model\Blog;
use PDO;

class PdoBlogRepository extends BaseRepository implements RepositoryInterface
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        parent::__construct();

        $this->pdo = $pdo;
    }

    public function createEntity()
    {
        return Blog::createNew();
    }
}
