<?php

class Thing
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class ThingRepository
{
    protected $things;

    public function __construct(array $things)
    {
        $this->things = $things;
    }

    public function get(int $id) : ?Thing
    {
        return isset($this->things[$id]) ? $this->things[$id] : null;
    }

    public function search(?string $name) : array
    {
        return array_values(array_filter($this->things, function(Thing $thing) use ($name) {
            return ! $name ?: $thing->getName() === $name;
        }));
    }
}

$repo = new ThingRepository([1 => new Thing('car'), 2 => new Thing('truck'), 3 => new Thing('car'), 4 => new Thing('motorcycle')]);
