<?php

class Subscription
{
    protected Gateway $gateway;


    public function create()
    {
    }

    public function cancel()
    {
    }

    public function invoice()
    {
    }

    public function swap($newplan)
    {
    }
}

class Gateway
{
    public function findCustomer()
    {
    }

    public function findSubscriptionByCustomer()
    {
    }
}