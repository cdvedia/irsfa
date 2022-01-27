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
     * Set base url property
     */
    public function setBaseUrl($value = null)
    {
        $this->baseUrl = $value;
    }

    /**
     * Get base url
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Make Http request
     */
    protected function makeRequest($http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $response = Http::withHeaders($headers)->{$http}($this->getBaseUrl().$url, $params);
        
        return $response->{$responseType}();
    }

    /**
     * Make Multi-Part Requests
     */
    protected function makeMultipartRequest($field, $file_content, $http, $url, $params = [], $headers = [], $responseType = 'json')
    {
        $response = Http::attach($field, $file_content)->withHeaders($headers)->{$http}($this->getBaseUrl().$url, $params);
        
        return $response->{$responseType}();
    }

    /**
     * Get json request
     */
    protected function getJsonResponse($json, $key)
    {
        return isset($json[$key]) ? $json[$key] : "";
    }
}

