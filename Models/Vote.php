<?php

class Vote
{
    public $vote;

    public function get_vote()
    {
        $this->vote = rand(1, 10);
        return $this->vote;
    }
}
;