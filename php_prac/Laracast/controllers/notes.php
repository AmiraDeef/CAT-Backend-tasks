<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('select * from notes where uc_id = 1')->findall();

require "views/notes.view.php";