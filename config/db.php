<?php
use craft\helpers\App;
return [
    'tablePrefix' => App::env('DB_TABLE_PREFIX') ?? '',
];
