<?php

namespace Cdvedia\Irsfa;

class Contact
{
    use Traits\AuthorizationRequest;

    /**
     * Get Contact/Registrant List
     * @see https://developer.irsfa.id/documentation/?php#get-contactregistrant-list
     */
    public function getContact($params = [])
    {
        $json = $this->makeAuthorizationRequest("get", "/rest/v2/registrant", $params);

        return $json;
    }

    /**
     * Create Registrant / Create Contact
     * @see https://developer.irsfa.id/documentation/?php#create-registrant--create-contact
     */
    public function create($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/registrant/create", $params);

        return $json;
    }

    /**
     * Update Registrant / Update Contact
     * @see https://developer.irsfa.id/documentation/#update-registrant--update-contact
     */
    public function update($params = [])
    {
        $json = $this->makeAuthorizationRequest("put", "/rest/v2/registrant/update", $params);

        return $json;
    }
}
