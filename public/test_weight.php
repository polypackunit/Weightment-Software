<?php
/**
 * Weighbridge Test Script
 * 
 * Usage:
 * 1. Save as: public/test_weight.php
 * 2. Visit: http://localhost:8000/test_weight.php
 * 3. Follow instructions
 */

use Mpdf\Cache;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Weighbridge API Test</title>
    <style>
        body {
            font-family: Arial;
            max-width: 800px;
            margin: 50px auto;
            background: #f5f5f5;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .test-section {
            margin: 20px 0;
            padding: 15px;
            border-left: 4px solid #007bff;
            background: #f9f9f9;
        }
        input {
            padding: 8px;
            margin: 5px;
            width: 150px;
        }
        button {
            padding: 8px 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .success {
            color: green;
            padding: 10px;
            background: #e8f5e9;
            border-radius: 3px;
            margin: 10px 0;
        }
        .error {
            color: red;
            padding: 10px;
            background: #ffebee;
            border-radius: 3px;
            margin: 10px 0;
        }
        .info {
            color: #007bff;
            padding: 10px;
            background: #e7f3ff;
            border-radius: 3px;
            margin: 10px 0;
        }
        pre {
            background: #f5f5f5;
            padding: 10px;
            border-radius: 3px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>⚖️ Weighbridge API Tester</h1>
        
        <!-- Test 1: POST Weight -->
        <div class="test-section">
            <h3>1️⃣ Send Weight to API</h3>
            <input type="text" id="weightInput" placeholder="Enter weight (e.g., 50)" value="50">
            <button onclick="sendWeight()">Send Weight</button>
            <div id="sendResult"></div>
        </div>

        <!-- Test 2: GET Weight -->
        <div class="test-section">
            <h3>2️⃣ Get Current Weight</h3>
            <button onclick="getWeight()">Fetch Current Weight</button>
            <div id="getResult"></div>
        </div>

        <!-- Test 3: Auto-poll -->
        <div class="test-section">
            <h3>3️⃣ Auto-Poll (Real-time)</h3>
            <button id="pollBtn" onclick="startPolling()">Start Polling (5 sec)</button>
            <div id="pollResult"></div>
        </div>

        <!-- Test 4: File System Check -->
        <div class="test-section">
            <h3>4️⃣ File System Check</h3>
            <button onclick="checkFile()">Check weight.txt</button>
            <div id="fileResult"></div>
        </div>

        <!-- Test 5: Cache Check -->
        <div class="test-section">
            <h3>5️⃣ Cache Status</h3>
            <button onclick="checkCache()">Check Cache</button>
            <div id="cacheResult"></div>
        </div>
    </div>

    <script>
        function sendWeight() {
            const weight = document.getElementById('weightInput').value;
            
            if (!weight || isNaN(weight)) {
                showError('sendResult', 'Please enter valid weight');
                return;
            }

            fetch('/api/weight', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ weight: weight })
            })
            .then(r => r.json())
            .then(data => {
                if (data.status === 'ok') {
                    showSuccess('sendResult', `✓ Weight ${weight} sent successfully!\nTimestamp: ${data.timestamp}`);
                } else {
                    showError('sendResult', `✗ Error: ${data.error}`);
                }
            })
            .catch(e => showError('sendResult', `Network error: ${e.message}`));
        }

        function getWeight() {
            fetch('/api/get-weight')
                .then(r => r.json())
                .then(data => {
                    const weight = data.weight || '0';
                    if (weight && weight !== '0') {
                        showSuccess('getResult', `✓ Current weight: ${weight}\nTimestamp: ${data.timestamp}`);
                    } else {
                        showInfo('getResult', '⚠ No weight data available yet. Send a weight first.');
                    }
                })
                .catch(e => showError('getResult', `Error: ${e.message}`));
        }

        let pollInterval;
        function startPolling() {
            const btn = document.getElementById('pollBtn');
            if (pollInterval) {
                clearInterval(pollInterval);
                pollInterval = null;
                btn.textContent = 'Start Polling (5 sec)';
                btn.style.background = '#007bff';
                return;
            }

            btn.textContent = 'Stop Polling';
            btn.style.background = '#dc3545';
            let count = 0;

            pollInterval = setInterval(() => {
                fetch('/api/get-weight')
                    .then(r => r.json())
                    .then(data => {
                        count++;
                        const weight = data.weight || '0';
                        document.getElementById('pollResult').innerHTML = 
                            `<div class="success">✓ Poll #${count}: Weight = ${weight} at ${new Date().toLocaleTimeString()}</div>`;
                    });
            }, 5000);
        }

        function checkFile() {
            fetch('/test_weight.php?action=check_file')
                .then(r => r.text())
                .then(result => {
                    if (result.includes('exists')) {
                        showSuccess('fileResult', result);
                    } else {
                        showError('fileResult', result);
                    }
                });
        }

        function checkCache() {
            fetch('/test_weight.php?action=check_cache')
                .then(r => r.text())
                .then(result => showInfo('cacheResult', result));
        }

        function showSuccess(id, msg) {
            document.getElementById(id).innerHTML = `<div class="success">${msg}</div>`;
        }

        function showError(id, msg) {
            document.getElementById(id).innerHTML = `<div class="error">${msg}</div>`;
        }

        function showInfo(id, msg) {
            document.getElementById(id).innerHTML = `<div class="info">${msg}</div>`;
        }

        // Check on load
        window.onload = function() {
            showInfo('fileResult', 'Click "Check weight.txt" button');
            showInfo('cacheResult', 'Click "Check Cache" button');
        };
    </script>
</body>
</html>

<?php
// Backend handlers
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'check_file':
            if (file_exists(public_path('weight.txt'))) {
                $content = file_get_contents(public_path('weight.txt'));
                echo "✓ weight.txt exists<br>";
                echo "Content: <code>" . htmlspecialchars($content) . "</code><br>";
                echo "Size: " . filesize(public_path('weight.txt')) . " bytes<br>";
                echo "Last modified: " . date('Y-m-d H:i:s', filemtime(public_path('weight.txt')));
            } else {
                echo "✗ weight.txt does not exist - file will be created on first weight";
            }
            exit;

        case 'check_cache':
            $weight = Cache::get('current_weight');
            if ($weight) {
                echo "✓ Cache contains: <code>$weight</code>";
            } else {
                echo "⚠ Cache is empty - send a weight to populate it";
            }
            exit;
    }
}
?>
