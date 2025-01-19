<?php

return function(array $args) {
    $args['meta'] .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
    $args['css'][] = $this->getAssetPath('public/css/mobile-admin.css');
};