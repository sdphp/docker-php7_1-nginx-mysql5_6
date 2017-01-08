<?php

require_once __DIR__ . '/base.php';


class ThingRepoWithContants extends ThingRepository
{
    const CAR = 'car';
    public const TRUCK = 'truck';
    private const UNICYCLE = 'unicycle';
    protected const MOTORCYCLE = 'motorcycle';
}

$withConstants = new ThingRepoWithContants($repo->search(null));

echo '<pre>';
var_dump($withConstants->search(ThingRepoWithContants::CAR));
var_dump($withConstants->search(ThingRepoWithContants::TRUCK));
var_dump($withConstants->search(ThingRepoWithContants::UNICYCLE));
var_dump($withConstants->search(ThingRepoWithContants::MOTORCYCLE));
