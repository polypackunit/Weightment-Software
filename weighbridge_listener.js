/**
 * Weighbridge Serial Port Listener
 * 
 * Installation:
 * npm install serialport axios
 * 
 * Usage:
 * node weighbridge_listener.js
 * 
 * Configuration:
 * Update: comPort, baudRate, apiUrl below
 */

const SerialPort = require('serialport');
const axios = require('axios');

// ============ CONFIGURATION ============
const comPort = 'COM3';           // Change as per your COM port
const baudRate = 9600;            // Change as per weighbridge settings
const apiUrl = 'http://localhost:8000/api/weight';  // Your Laravel URL
// ======================================

const port = new SerialPort.SerialPort({
    path: comPort,
    baudRate: baudRate,
    dataBits: 8,
    stopBits: 1,
    parity: 'none',
});

const Readline = SerialPort.parsers.Readline;
const parser = port.pipe(new Readline({ delimiter: '\r\n' }));

port.on('open', () => {
    console.log(`✓ Serial port ${comPort} opened at ${baudRate} baud`);
    console.log(`✓ Listening for weighbridge data...`);
    console.log(`✓ Sending to: ${apiUrl}\n`);
});

parser.on('data', (data) => {
    const weight = data.toString().trim();
    
    if (!weight) return;
    
    console.log(`[${new Date().toLocaleTimeString()}] Raw data: "${weight}"`);
    
    // Extract numeric value only
    const numericWeight = weight.replace(/[^0-9.-]/g, '');
    
    if (!numericWeight || isNaN(numericWeight)) {
        console.log('⚠ Invalid weight value, skipping\n');
        return;
    }
    
    sendToServer(numericWeight);
});

function sendToServer(weight) {
    axios.post(apiUrl, { weight: weight })
        .then(response => {
            console.log(`✓ Sent to server: ${weight}`);
            console.log(`✓ Server response: ${JSON.stringify(response.data)}\n`);
        })
        .catch(error => {
            console.error(`✗ Failed to send weight:`);
            console.error(`  Status: ${error.response?.status}`);
            console.error(`  Error: ${error.message}\n`);
        });
}

port.on('error', (err) => {
    console.error(`✗ Serial port error: ${err.message}`);
    console.error(`  Make sure weighbridge is connected to ${comPort}`);
});

process.on('SIGINT', () => {
    console.log('\n✓ Closing serial port...');
    port.close();
    process.exit(0);
});
