<?php


trait Loggable{
    public function log($message) {
        $logFile = fopen('log.txt', 'a');
        fwrite($logFile, date('Y-m-d H:i:s') . ' ' . $message . "\n");
        fclose($logFile);
    }

}





?>