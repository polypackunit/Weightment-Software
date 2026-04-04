import serial
import requests
import time

ser = serial.Serial('COM3', 9600, timeout=1)

while True:
    data = ser.readline().decode(errors='ignore').strip()

    if data:
        weight = ''.join(filter(str.isdigit, data))

        if weight:
            print("Weight:", weight)

            requests.post(
                "http://127.0.0.1:8000/get-weight",
                data={"weight": weight}
            )
            
    time.sleep(1)