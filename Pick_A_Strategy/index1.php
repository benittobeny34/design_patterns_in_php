<?php

interface Notification
{
    public function message($message);
}
//your job is intimate the notification to user. use mail, message and console notification;
class Console implements Notification
{
    public function message($message)
    {
        dump($message . ' via console');
    }
}

class Mail implements Notification
{
    public function message($message)
    {
        dump($message . ' via Mail');
    }
}
class Sms implements Notification
{
    public function message($message)
    {
        dump($message . ' via Sms');
    }
}


class Notify
{
    public function message($message,Notification $notify)
    {
        $notify->message($message);
    }
}

$notify = new Notify;

$notify->message('some message');