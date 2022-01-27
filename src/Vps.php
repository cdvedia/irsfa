<?php

namespace Cdvedia\Irsfa;

class Vps extends AbstractClass
{
    /**
     * Get VPS Product
     * @see https://developer.irsfa.id/documentation/?php#get-vps-product
     */
    public function getProduct($params = [])
    {
        $json = $this->makeAuthorizationRequest("get", "/rest/v2/vps/product", $params);

        return $json;
    }

    /**
     * Get Operating System (OS) VPS
     * @see https://developer.irsfa.id/documentation/?php#get-vps-os
     */
    public function getOperatingSystem($params = [])
    {
        $json = $this->makeAuthorizationRequest("get", "/rest/v2/vps/os-list", $params);

        return $json;
    }

    /**
     * Create VPS
     * @see https://developer.irsfa.id/documentation/?php#create-vps
     */
    public function create($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/create", $params);

        return $json;
    }

    /**
     * Get VPS Detail
     * @see https://developer.irsfa.id/documentation/?php#get-vps-detail
     */
    public function detail($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/detail", $params);

        return $json;
    }

    /**
     * Start VPS
     * @see https://developer.irsfa.id/documentation/?php#start-vps
     */
    public function start($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/start", $params);

        return $json;
    }

    /**
     * Stop VPS
     * @see https://developer.irsfa.id/documentation/?php#stop-vps
     */
    public function stop($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/stop", $params);

        return $json;
    }

    /**
     * Restart VPS
     * @see https://developer.irsfa.id/documentation/?php#restart-vps
     */
    public function restart($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/restart", $params);

        return $json;
    }

    /**
     * Poweroff VPS
     * @see https://developer.irsfa.id/documentation/?php#poweroff-vps
     */
    public function poweroff($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/poweroff", $params);

        return $json;
    }

    /**
     * Suspend VPS
     * @see https://developer.irsfa.id/documentation/?php#suspend-vps
     */
    public function suspend($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/suspend", $params);

        return $json;
    }

    /**
     * Unsuspend VPS
     * @see https://developer.irsfa.id/documentation/?php#unsuspend-vps
     */
    public function unsuspend($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/unsuspend", $params);

        return $json;
    }

    /**
     * Rebuild VPS
     * @see https://developer.irsfa.id/documentation/?php#rebuild-vps
     */
    public function rebuild($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/vps/rebuild", $params);

        return $json;
    }
}
