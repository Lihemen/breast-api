<?php

// Allow all origins (change "*" to a specific domain if needed)
header("Access-Control-Allow-Origin: *");

// Allow common HTTP methods
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Allow common headers
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Handle preflight CORS requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  http_response_code(200);
  exit();
}

require("./router/index.php");
