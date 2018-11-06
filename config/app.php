<?php

$config = [
    'displayErrorDetails'    => getenv('APP_DEBUG'),
    'addContentLengthHeader' => false,
];

return $config;