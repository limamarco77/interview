<?php
$json_events_file = file_get_contents('data/events.json');
$json_events = json_decode($json_events_file, true);
