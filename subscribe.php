<?php
 
use PhpMqtt\Client\ConnectionSettings;
use PhpMqtt\Client\MqttClient;
 
require_once __DIR__.'/vendor/autoload.php';
 

if (isset($_GET['topic'])) {
    $TOPIC = $_GET['topic'];
    $DATA = $_GET['data'];
    
}
const MQTT_HOST = 'broker.mqttdashboard.com';
const MQTT_PORT = 1883;
//const MQTT_CLIENT_ID = 'clientId-rwXMbHZF72';
const MQTT_USER = 'david';
const MQTT_PASSWORD = '';
//const TOPIC = 'NEW';
 
$client = new MqttClient(MQTT_HOST, MQTT_PORT);
 
$settings = (new ConnectionSettings)
    ->setUsername(NULL)
    ->setPassword(NULL);
$client->connect($settings, true);
 
//$data = 'Hello';
$client->publish($TOPIC, $DATA);