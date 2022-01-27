<?php
/*
 * You can place your custom configuration in here.
 */
return [
    /**
     * Base url of irsfa API
     * change this url to use in sandbox mode or production mode
     */
    'base_url' => env('IRSFA_BASE_URL', 'https://api.irsfa.id'),

    /**
     * The client id used for oauth
     */
    'client_id' => env('IRSFA_CLIENT_ID', 'your_client_id'),

    /**
     * The client secret used for oauth
     */
    'client_secret' => env('IRSFA_CLIENT_SECRET', 'your_client_secret'),
];
