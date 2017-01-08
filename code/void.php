<?php

class Sample
{
    public function returnNoData() : void {
        // Would do some logic here that doesn't
        // generate any data to return to the
        // end user
        return;
    }

}

var_dump((new Sample)->returnNoData());
