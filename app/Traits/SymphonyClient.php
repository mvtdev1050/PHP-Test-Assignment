<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;
use Session;

trait SymphonyClient
{
    /**
     * get method
     * 
     * @param string $endpoint
     */
    public function get($endpoint)
    {
        return Http::acceptJson()
            ->withToken($this->getToken())
            ->get($endpoint)
            ->json();
    }

    /**
     * post method
     * 
     * @param string $endpoint
     * @param array $body
     */
    public function post($endpoint, $body)
    {
        return Http::acceptJson()
            ->withToken($this->getToken())
            ->post($endpoint, $body)
            ->json();
    }

    /**
     * delete method
     * 
     * @param string $endpoint
     */
    public function delete($endpoint)
    {
        return Http::acceptJson()
            ->withToken($this->getToken())
            ->delete($endpoint);
    }

    /**
     * get base url from config file
     */
    private function url($path)
    {
        return config('symphony.base_url') . $path;
    }

    /**
     * get token from session
     */
    private function getToken()
    {
        return Session::get('token');
    }
}
