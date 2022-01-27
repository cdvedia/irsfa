<?php

namespace Cdvedia\Irsfa\Traits;

use Illuminate\Support\Facades\Http;

/**
 * Trait Request
 */
trait Request
{
    public $baseUrl;

    /**
     * Make Http request
     */
    protected function makeRequest($http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $response = Http::withHeaders($headers)->{$http}($this->baseUrl.$url, $params);
        
        return $response->{$responseType}();
    }

    /**
     * Make Multi-Part Requests
     */
    protected function makeMultipartRequest($field, $file_content, $http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $response = Http::attach($field, $file_content)->withHeaders($headers)->{$http}($this->baseUrl.$url, $params);
        
        return $response->{$responseType}();
    }
}

