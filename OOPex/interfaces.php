<?php

interface Newsletter
{

    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        echo 'subscribed with Campaign Monitor';
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        echo 'subscribed with drip';
    }
}

class NewsletterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'John@Doe.com';
        $newsletter->subscribe($email);
    }
}