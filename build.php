<?php
//define("API_HOST", ($env === "production") ? "example.com" : "localhost");
define("API_HOST", "http://127.0.0.1:8000/api/");


require("vendor/autoload.php");

$openapi = \OpenApi\scan(['../tse-notebook-back/app', '../tse-notebook-back/routes']);
file_put_contents('swagger.yaml', $openapi->toYaml());
