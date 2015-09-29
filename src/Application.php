<?php

namespace BlogApp;

use Radvance\Framework\BaseWebApplication;
use Radvance\Framework\FrameworkApplicationInterface;

use BlogApp\Repository\PdoBlogRepository;

use RuntimeException;
use PDO;

class Application extends BaseWebApplication implements FrameworkApplicationInterface
{
    public function getRootPath()
    {
        return realpath(__DIR__.'/../');
    }

    protected function configureRepositories()
    {
        $this->addRepository(new PdoBlogRepository($this->pdo));
    }
}
