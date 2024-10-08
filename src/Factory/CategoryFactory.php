<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\Category;
use Gedmo\Sluggable\Util\Urlizer as Sluggable;

class CategoryFactory
{
    public function createCategory(string $name, ?string $description): Category
    {
        $category = new Category();

        $slug = Sluggable::urlize($name);

        $category->setName($name);
        $category->setUrl($slug);
        $category->setDescription($description);

        return $category;
    }
}
