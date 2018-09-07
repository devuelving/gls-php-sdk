<?php

namespace devuelving\GLS;

class GLS
{
    /**
     * Define the user
     *
     * @var string
     */
    protected $user;

    /**
     * Define the password
     *
     * @var string
     */
    protected $password;

    /**
     * Define the server route
     *
     * @var string
     */
    protected $server;

    /**
     * Constructor to start the connection to the server
     *
     * @param string $user
     * @param string $password
     * @param string $server
     */
    function __construct($user, $password, $server) {
        $this->user = $user;
        $this->password = $password;
        $this->server = $server;
    }
}
