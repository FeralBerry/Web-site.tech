<?php

namespace App\Socket\Base;

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;
use Ratchet\ComponentInterface;
class BaseSocket implements MessageComponentInterface
{
    protected $clients;
    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }
    function onOpen(ConnectionInterface $conn)
    {
        // TODO: Implement onOpen() method.
    }

    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
        echo "Connection ({$conn->resourceId}) has disconnected.\n";
    }

    function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "As error has occurred: ({$e->getMessage()}).\n";
        $conn->close();
    }

    function onMessage(ConnectionInterface $from, $msg)
    {
        // TODO: Implement onMessage() method.
    }
}
