let mqtt = require('mqtt')

let options = {
    host: 'broker.mqttdashboard.com',
    port: 1883,
    protocol: 'MQTT',
    username: '',
    password: ''
}

// Initialize the MQTT client
let client = mqtt.connect(options);

// Setup the callbacks
client.on('connect', () => console.log('Connected'));

client.on('error', (error) => console.log(error));

// Called each time a message is received
client.on('message', (topic, message) => {
  console.log('Received message:', topic, message.toString())
});

// subscribe to topic 'pot/adc/1'
client.subscribe('speed');
client.publish('pot/adc/1','another hey');