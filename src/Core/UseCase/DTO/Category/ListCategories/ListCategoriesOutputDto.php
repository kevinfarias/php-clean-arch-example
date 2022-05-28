<?php

namespace Core\Usecase\DTO\Category\ListCategories;

class ListCategoriesOutputDto
{
    public function __construct(
        public array $items,
        public int $total,
    )
    {
        
    }
}