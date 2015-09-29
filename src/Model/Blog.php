<?php

namespace BlogApp\Model;

use Radvance\Model\ModelInterface;
use Radvance\Model\BaseModel;

class Blog extends BaseModel implements ModelInterface
{
    protected $id;
    protected $name;
    protected $description;
}
