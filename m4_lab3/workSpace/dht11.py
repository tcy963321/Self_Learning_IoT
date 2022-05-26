import time
from dht import DHT11
from machine import Pin
dht11 = DHT11(Pin(15))

while True:
  time.sleep(3)
  dht11.measure()
  print(dht11.temperature(),dht11.humidity())
