<?php declare(strict_types = 1);

namespace Example\Menu;

class ArrayMenuReader implements MenuReader
{
    public function readMenu() : array
    {
        return [
            ['href' => '/', 'text' => 'Homepage'],
            ['href' => '/foo', 'text' => 'foopage'],
            ['href' => '/bar', 'text' => 'barpage'],
        ];
    }
}
