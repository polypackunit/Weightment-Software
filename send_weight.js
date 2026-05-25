/**
 * Manual Weight Sender - For Testing
 * 
 * Usage:
 * node send_weight.js 50
 * node send_weight.js 75.5
 * 
 * Or run test loop:
 * node send_weight.js test
 */

const axios = require('axios');

const apiUrl = 'http://localhost:8000/api/weight';  // Change to your URL
const weight = process.argv[2] || '50';

async function sendWeight(value) {
    try {
        const response = await axios.post(apiUrl, { weight: value });
        console.log(`✓ Weight sent: ${value}`);
        console.log(`✓ Response:`, response.data);
        return true;
    } catch (error) {
        console.error(`✗ Error:`, error.response?.data || error.message);
        return false;
    }
}

if (weight === 'test') {
    let counter = 50;
    setInterval(() => {
        sendWeight(counter);
        counter += 5;
        if (counter > 100) counter = 50;
    }, 2000);
    console.log('Testing mode: Sending weights every 2 seconds...');
} else {
    sendWeight(weight);
}
