<?php

use OpenSwoole\Http\Server;
use OpenSwoole\Http\Request;
use OpenSwoole\Http\Response;
use OpenSwoole\WebSocket\Server as WebSocketServer;


$httpServer = new OpenSwoole\HTTP\Server("127.0.0.1", 9501);

$httpServer->on("Start", function(Server $httpServer)
{
    echo "OpenSwoole http server is started at http://127.0.0.1:9501\n";
});

$httpServer->on("Request", function(Request $request, Response $response)
{
    $response->header("Content-Type", "text/plain");
    $response->end("Hel23lo World\n");
});

$httpServer->start();


