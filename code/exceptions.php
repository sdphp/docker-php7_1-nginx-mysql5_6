<?php

require_once __DIR__ . '/base.php';

class RepoWithExceptions extends ThingRepository
{
    public function search(?string $name) : array
    {
        if ($name === 'broom') {
            throw new \InvalidArgumentException('A Broom is not the sort of thing we are looking for');
        }
        $results = parent::search($name);
        if (!count($results)){
            throw new \OutOfBoundsException('Nothing is matching this term');
        }
        return $results;
    }
}



$withExceptions = new RepoWithExceptions($repo->search(null));

echo '<pre>';
foreach (['broom', 'boat', 'motorcycle'] as $name) {
    try {
        var_dump($withExceptions->search($name));
    } catch (\InvalidArgumentException | \OutOfBoundsException $e) {
        echo $e->getMessage() . "<br>";
    }
}
