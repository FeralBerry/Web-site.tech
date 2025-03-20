<?php

namespace App\Console\Commands;

use App\Socket\Sockets\ChatSocket;
use Illuminate\Console\Command;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

class ChatServer extends Command
{
    protected $signature = 'chat_server:start';
    protected $description = 'Start chat server.';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $port = env("SOCKET_PORT");
        $this->info("Chat server started on $port");

        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new ChatSocket()
                )
            ),
            $port
        );
        $server->run();
    }
}
