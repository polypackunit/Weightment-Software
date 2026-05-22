import serial
import requests
import time
import random
from serial.tools import list_ports

# ==================== CONFIG ====================
USE_MOCK_DATA = False  # Set to False when deploying on actual weighbridge system
API_URL = "http://localhost:8000/api/weight"  # Change to your domain in production
# =================================================

if USE_MOCK_DATA:
    # Mock mode for testing without weighbridge
    print("🔧 Running in MOCK mode (for testing)")
    print("-" * 40)
    
    mock_weights = [100, 150, 200, 175, 250, 300]
    i = 0
    
    while True:
        weight = mock_weights[i % len(mock_weights)]
        # Add small random variation
        weight = weight + random.uniform(-0.5, 0.5)
        weight = round(weight, 1)
        
        print(f"Weight: {weight}")
        
        try:
            response = requests.post(
                API_URL,
                data={"weight": weight},
                timeout=5
            )
            print(f"Server: {response.text}")
        except Exception as e:
            print(f"API Error: {e}")
        
        i += 1
        time.sleep(2)  # New weight every 2 seconds
        
else:
    # Real weighbridge mode
    def find_weighbridge_port():
        ports = list_ports.comports()
        print("Available ports:")
        for port in ports:
            print(f"  {port.device} - {port.description}")
        
        for port in ports:
            if "USB" in port.description or "COM" in port.device:
                return port.device
        
        return "COM3"

    port = find_weighbridge_port()
    print(f"Using port: {port}")

    try:
        ser = serial.Serial(port, 9600, timeout=1)
        print("Connected to weighbridge")
    except Exception as e:
        print(f"Failed to connect: {e}")
        exit()

    while True:
        try:
            data = ser.readline().decode(errors='ignore').strip()
            
            if data:
                import re
                match = re.search(r'(\d+(?:\.\d+)?)', data)
                if match:
                    weight = match.group(1)
                    print("Weight:", weight)
                    
                    try:
                        response = requests.post(
                            API_URL,
                            data={"weight": weight},
                            timeout=5
                        )
                        print("Server:", response.text)
                    except requests.exceptions.RequestException as e:
                        print(f"API Error: {e}")
            
            time.sleep(0.5)
            
        except serial.SerialException as e:
            print(f"Serial error: {e}")
            time.sleep(5)
        except Exception as e:
            print("Error:", e)