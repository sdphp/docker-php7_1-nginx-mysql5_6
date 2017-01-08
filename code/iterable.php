<?php

require_once __DIR__ . '/base.php';

class RepoWithImporter extends ThingRepository
{
    public function import(iterable $things)
    {
        foreach ($things as $thing) {
            $this->things[] = $thing;
        }
    }
}

$withImporter = new RepoWithImporter($repo->search(null));
$iterator = new ArrayIterator([new Thing('bike'), new Thing('plane')]);
$array = [new Thing('skateboard')];

$withImporter->import($iterator);
$withImporter->import($array);

echo '<pre>';
var_dump($withImporter);

echo str_repeat("-=-*", 10) .'<br>';
var_dump($withImporter->search('plane'));
var_dump($withImporter->search('skateboard'));
