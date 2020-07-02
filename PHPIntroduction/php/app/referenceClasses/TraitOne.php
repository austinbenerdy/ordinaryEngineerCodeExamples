<?php


trait TraitOne
{
    public function traitMethod(int $integer) :float
    {
        return floatval($integer);
    }
}