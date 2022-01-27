<?php

namespace Cdvedia\Irsfa;

class Office365 extends AbstractClass
{
    /**
     * Get Product Office365
     * @see https://developer.irsfa.id/documentation/?php#get-product-office365
     */
    public function getProduct($params = [])
    {
        $json = $this->makeAuthorizationRequest("get", "/rest/v2/office365/product", $params);

        return $json;
    }

    /**
     * Create Customer Office365
     * @see https://developer.irsfa.id/documentation/?php#create-customer-office365
     */
    public function createCustomer($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/office365/customer/create", $params);

        return $json;
    }

    /**
     * Create Tenant Office365
     * @see https://developer.irsfa.id/documentation/?php#create-tenant-office365
     */
    public function createTenant($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/office365/tenant/create", $params);

        return $json;
    }

    /**
     * Create Agreement Office365
     * @see https://developer.irsfa.id/documentation/?php#create-agreement-office365
     */
    public function createAgreement($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/office365/agreement/create", $params);

        return $json;
    }

    /**
     * Order Office365
     * @see https://developer.irsfa.id/documentation/?php#order-office365
     */
    public function order($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/office365/order", $params);

        return $json;
    }

    /**
     * Get Detail Office365
     * @see https://developer.irsfa.id/documentation/?php#get-list-office365
     */
    public function detail($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/office365/detail", $params);

        return $json;
    }

    /**
     * Suspend Subscription Office365
     * @see https://developer.irsfa.id/documentation/?php#suspend-subscription-office365
     */
    public function suspendSubscription($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/office365/suspend/subscription", $params);

        return $json;
    }

    /**
     * Unsuspend Subscription Office365
     * @see https://developer.irsfa.id/documentation/?php#unsuspend-subscription-office365
     */
    public function unsuspendSubscription($params = [])
    {
        $json = $this->makeAuthorizationRequest("post", "/rest/v2/office365/unsuspend/subscription", $params);

        return $json;
    }
}
