<?php

interface RuleInterface
{
    public function apply($model);
    public function getErrorMessage();
}
