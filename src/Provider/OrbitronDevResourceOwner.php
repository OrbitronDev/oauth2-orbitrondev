<?php

namespace OrbitronDev\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class OrbitronDevResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array $response
     */
    public function __construct(array $response = array())
    {
        $this->response = $response;
    }

    /**
     * Returns the identifier of the authorized resource owner.
     *
     * @return int|null
     */
    public function getId()
    {
        return (int)$this->response['id'] ?: null;
    }

    /**
     * @return string|null
     */
    public function getUsername()
    {
        return $this->response['username'] ?: null;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->response['name'] ?: null;
    }

    /**
     * @return string|null
     */
    public function getSurname()
    {
        return $this->response['surname'] ?: null;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthday()
    {
        return $this->response['birthday'] ? (new \DateTime())->setTimestamp($this->response['birthday']) : null;
    }

    /**
     * @return string|null
     */
    public function getSubscription()
    {
        return $this->response['subscription_type'] ?: null;
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}