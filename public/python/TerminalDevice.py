from telnetlib import DO
import paramiko
import xtelnet
import requests
import json
#from datetime import datetime
import socket
import base64
import sys

t=xtelnet.session()

parametro = ' '.join(sys.argv[1:])
parametro = parametro.strip()

parametro = parametro.split(',')

if parametro[1] == 'AMINO':
    if parametro[2] == 'logread':       
        try:
            ip = parametro[0]
            t.connect(ip, username='root', password='root2root', p=23, timeout=8)
            output= t.execute('logread')
            t.close()
            print(output)
        except:
            print('DISPOSITIVO NO ALCANZADO')

