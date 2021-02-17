<?php

interface ManageableInterface
{
    function beManaged();
}

interface WorkableInterface
{
    function work();
}

interface SleepableInterface
{
    function sleep();
}

class HumanWorker implements WorkableInterface, ManageableInterface, SleepableInterface
{


    function beManaged()
    {
        $this->work();
        $this->sleep();
    }

    function work()
    {
        return 'Worker is Working!';
    }

    function sleep()
    {
        return 'worker is sleeping';
    }
}

class AndroidWorker implements WorkableInterface, ManageableInterface
{
    function beManaged()
    {
        // TODO: Implement beManaged() method.
    }

    function work()
    {
        // TODO: Implement work() method.
    }
}

class Captain
{
    function manage(ManageableInterface $worker)
    {
        $worker->beManaged();
    }
}
