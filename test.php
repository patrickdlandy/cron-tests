<?php

    //Log file update
    function my_file_log($line = "hi") {
        $line_str = my_timestamp() . ": " . $line . "\n";
        $log_file = fopen("./logs/log.txt", "a") or die ("Unable to open file!");
        fwrite($log_file, $line_str);
        fclose($log_file);
    }

    //Local timestamp string function
    function my_timestamp() {
        $date = date_create();
        date_default_timezone_set('US/Eastern');
        $raw_date = date_timestamp_get($date);
        $clean_date = date('D, d M Y H:i:s', $raw_date);
        return $clean_date;
    }

    my_file_log("cron job test");

?>