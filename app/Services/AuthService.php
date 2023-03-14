<?php

namespace App\Services;

use App\Traits\SymphonyClient;
use Session;

class AuthService
{
    use SymphonyClient;

    /**
     * authenticate user by email and password
     * 
     * @param array $payload
     */
    public function authenticate($payload)
    {
        try {
            # get token via api
            $response = $this->post($this->url("token"), $payload);

            # set user token in session
            Session::put(["token" => $response["token_key"], "refresh_token" => $response["refresh_token_key"]]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * get profile by current token
     */
    public function me()
    {
        return $this->get($this->url("me"));
    }
}
