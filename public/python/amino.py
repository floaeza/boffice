from telnetlib import DO
import paramiko
import xtelnet
import requests
import json
#from datetime import datetime
import socket
import base64

t=xtelnet.session()

try:
    ip = input()
    t.connect(ip, username='root', password='root2root', p=23, timeout=8)
    output= t.execute('reboot')
    t.close()
    print('REBOOT FINISHED')
except:
    print('Error')
    print('Finalizo proceso')

