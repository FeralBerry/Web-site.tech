<?php

namespace App\Socket\Sockets;

use App\Socket\Base\BaseSocket;
use Ratchet\ConnectionInterface;

class ChatSocket extends BaseSocket
{
    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        echo "New conn: ({$conn->resourceId})";
    }

    public function onMessage(ConnectionInterface $from, $msg)
    {
        $numRecv = count($this->clients) - 1;
        echo sprintf('connection %d sending message "%s" to %d other connection %s' . "\n" , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

        foreach ($this->clients as $client){
            if($from !== $client){
                $client->send($msg);
            }
        }
    }
}
