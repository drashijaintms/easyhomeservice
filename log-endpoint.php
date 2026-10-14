<?php
error_reporting(0);
ini_set('display_errors', 0);
header('Content-Type: application/json');

$dir = __DIR__ . '/logs';
if (!is_dir($dir)) mkdir($dir, 0775, true);

$raw = $_POST['payload'] ?? file_get_contents('php://input');
if (empty($raw)) $raw = '(no body)';

file_put_contents("$dir/form-raw.log", "[".date('c')."] ".$_SERVER['REMOTE_ADDR']."\n".$raw."\n----\n", FILE_APPEND);

$data = json_decode($raw, true);
if (json_last_error() !== JSON_ERROR_NONE) {
  file_put_contents("$dir/form-errors.log", "[".date('c')."] ".$_SERVER['REMOTE_ADDR']." | ".json_last_error_msg()."\nPayload: ".$raw."\n----\n", FILE_APPEND);
  echo json_encode(['ok'=>false,'error'=>json_last_error_msg()]);
  exit;
}

file_put_contents("$dir/form-requests.log", json_encode($data, JSON_UNESCAPED_SLASHES)."\n", FILE_APPEND);
echo json_encode(['ok'=>true]);
