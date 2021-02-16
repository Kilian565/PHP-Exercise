<?php

abstract class AchievementType                  #CANNOT INSTANTIATE AN ABSTRACT CLASS!
{
    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));

    }

    abstract function qualifier($user);

}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
    }


}

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {
    }


}

class FirstBestAnswer extends AchievementType
{

    public function qualifier($user)
    {
    }


}

