import time
from machine import Pin

led1 = Pin(23,Pin.OUT)

while True:
  led1.value(1)
  time.sleep(2)
  led1.value(0)
  time.sleep(1)
