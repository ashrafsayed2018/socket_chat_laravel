<?php

namespace App\Http\Controllers;

use Auth;
use Ratchet\ConnectionInterface;
use App\Models\Chat;
use App\Models\User;
use SplObjectStorage;

use App\Models\Chat_request;
use Illuminate\Http\Request;

use Ratchet\WebSocket\MessageComponentInterface;
use Illuminate\Database\ConnectionInterface as DatabaseConnectionInterface;

class SocketController extends Controller implements MessageComponentInterface
{
    protected $clients;
    public function __construct()
    {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn)
    {

        $this->clients->attach($conn);
    }

    public function onMessage(ConnectionInterface $conn, $message)
    {

        /// TODO IMPLENENT ON MESSAGE METHOD HERE
    }
    public function onClose(ConnectionInterface $conn)
    {

        $this->clients->detach($conn);
    }
    public function onError(ConnectionInterface $conn, \Exception $e)
    {

        echo "an error has accured" . $e->getMessage();
        $conn->close();
    }
}
