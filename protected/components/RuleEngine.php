<?php

class RuleEngine
{
    protected $rules = array();

    public function addRule(RuleInterface $rule)
    {
        $this->rules[] = $rule;
    }

    public function applyRules($model)
    {
        foreach ($this->rules as $rule) {
            if (!$rule->apply($model)) {
                $model->addError('rule', $rule->getErrorMessage());
                return false;
            }
        }
        return true;
    }
}
