<?php
//STRATEGY PATTERN
interface Logger
{
    public function log($data);
}

class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump($data . ' via file');
    }
}

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump($data . ' via database');
    }
}

class LogToXWebService implements logger
{
    public function log($data)
    {
        var_dump($data . ' via a webservice');
    }
}

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }
}

$app = new App();
$logger = new LogToXWebService();
$app->log('logging some data for the app', $logger);