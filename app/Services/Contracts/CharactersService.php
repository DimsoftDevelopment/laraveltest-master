<?php
declare(strict_types=1);

namespace App\Services\Contracts;

interface CharactersService
{
    public function all();
    public function getById(int $id);
}