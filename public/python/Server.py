from telnetlib import DO
from sys import platform
import paramiko, xtelnet, requests, json, socket, base64, sys, subprocess, os, ast

def getInterfacesNetwork():
    Interfaces      = []
    Interfaces_ip   = []
    socketNames     = socket.if_nameindex()
    for x in socketNames:
        Interfaces.append(x[1])
    for x in Interfaces:
        output      = subprocess.check_output(['ifconfig', x])
        output      = output.decode('utf-8')
        output      = output.split('\n')
        output      = output[1].strip()
        ip          = output.split(' ')
        Interfaces_ip.append(ip[1])
    aux = []
    aux.append(Interfaces)
    aux.append(Interfaces_ip)
    return aux

def getCpuInfo():
    CpuInfo = subprocess.Popen('mpstat -P ALL', shell=True, stdout=subprocess.PIPE).stdout.read()
    CpuInfo = CpuInfo.decode('utf-8')
    CpuInfo = CpuInfo.strip()
    CpuInfo = CpuInfo.split('\n')
    head    = CpuInfo[2].split(' ')
    info    = CpuInfo[3].split(' ')
    head    = list(filter(None, head))
    info    = list(filter(None, info))

    aux = []
    aux.append(head)
    aux.append(info)
    return aux

def getServiceInfo(command):
    serviceWithoutFilter = subprocess.Popen(command, shell=True, stdout=subprocess.PIPE).stdout.read()
    serviceWithoutFilter = serviceWithoutFilter.decode('utf-8')
    serviceWithoutFilter = serviceWithoutFilter.strip()
    serviceWithoutFilter = serviceWithoutFilter.split('\n')

    ServiceInfoText = []

    for x in serviceWithoutFilter:
        if 'Active' in x or 'Status' in x or 'Tasks' in x:
            ServiceInfoText.append(x.strip())

    head = ['Active', 'Status', 'Tasks']
    info = []
    ServiceInfo = []

    for x in ServiceInfoText:
        if 'Active' in x:
            if 'running' in x:
                ServiceInfo.append('Activo')
                ServiceInfo.append(x)
                info.append(ServiceInfo) 
                ServiceInfo = []
            if 'dead' in x:
                ServiceInfo.append('Inactivo')
                ServiceInfo.append(x)
                info.append(ServiceInfo) 
                ServiceInfo = []
        if 'Status' in x or 'Tasks' in x:
            ServiceInfo.append(x)
            info.append(ServiceInfo) 
            ServiceInfo = []
    aux = []
    aux.append(head)
    aux.append(info)
    return aux

def getNetworkStatus():
    head    = ['Internet', 'DNS']
    hosts   = ['google.com', '8.8.8.13']
    info    = []
    for x in hosts:
        response = os.system("ping -c 1 " + x)
        if response == 0:
            info.append('Available')
        else:
            info.append('Without Connection')
    aux = []
    aux.append(head)
    aux.append(info)
    return aux

def getDiskInfo():
    diskWithoutFilter = subprocess.Popen('df -BG', shell=True, stdout=subprocess.PIPE).stdout.read()
    diskWithoutFilter = diskWithoutFilter.decode('utf-8')
    diskWithoutFilter = diskWithoutFilter.strip()
    diskWithoutFilter = diskWithoutFilter.split('\n')

    diskInfoFilter = []
    for x in diskWithoutFilter:
        aux = x.split(' ')
        aux = list(filter(None, aux))
        diskInfoFilter.append(aux)
    head = []
    headTable = diskInfoFilter[0]
    headTable.pop(len(headTable)-1)
    for x in diskInfoFilter:
        head.append(x[0])
    head.pop(0)
    diskInfoFilter.pop(0)

    head.append('head')
    diskInfoFilter.append(headTable)

    aux = []
    aux.append(head)
    aux.append(diskInfoFilter)

    return aux

def getRamInfo():
    ramWithoutFilter = subprocess.Popen('free', shell=True, stdout=subprocess.PIPE).stdout.read()
    ramWithoutFilter = ramWithoutFilter.decode('utf-8')
    ramWithoutFilter = ramWithoutFilter.strip()
    ramWithoutFilter = ramWithoutFilter.split('\n')

    ramInfoFilter = []
    for x in ramWithoutFilter:
        aux = x.split(' ')
        aux = list(filter(None, aux))
        ramInfoFilter.append(aux)
    head = []
    headTable = ramInfoFilter[0]
    for x in ramInfoFilter:
        head.append(x[0])
    head.pop(0)
    ramInfoFilter.pop(0)

    head.append('head')
    ramInfoFilter.append(headTable)

    aux = []
    aux.append(head)
    aux.append(ramInfoFilter)
    return aux

def getInfoForWindows():
    parametro = ' '.join(sys.argv[1:])
    parametro = parametro.strip()
    parametro = parametro.split(',')
    if len(parametro) == 1:
        if parametro[0] == 'getRamInfo':
            aux = ast.literal_eval("[['Mem:', 'Swap:', 'head'], [['Mem:', '3958548', '700632', '2175212', '23276', '1082704', '2903868'], ['Swap:', '8152052', '0', '8152052'], ['total', 'used', 'free', 'shared', 'buff/cache', 'available']]]")
            jsonObj = json.dumps(aux, indent=4)
            print(jsonObj)
        if parametro[0] == 'getDiskInfo':
            aux= ast.literal_eval("[['devtmpfs', 'tmpfs', 'tmpfs', '/dev/mapper/fedora_fedora-root', 'tmpfs', '/dev/mapper/fedora_fedora-var', '/dev/mapper/fedora_fedora-home', '/dev/sda3', '/dev/loop3', '/dev/loop1', '/dev/loop2', '/dev/loop0', 'tmpfs', 'head'], [['devtmpfs', '1G', '0G', '1G', '0%', '/dev'], ['tmpfs', '2G', '0G', '2G', '0%', '/dev/shm'], ['tmpfs', '1G', '1G', '1G', '1%', '/run'], ['/dev/mapper/fedora_fedora-root', '60G', '5G', '56G', '8%', '/'], ['tmpfs', '2G', '1G', '2G', '1%', '/tmp'], ['/dev/mapper/fedora_fedora-var', '118G', '3G', '116G', '3%', '/var'], ['/dev/mapper/fedora_fedora-home', '65G', '1G', '65G', '1%', '/home'], ['/dev/sda3', '2G', '1G', '2G', '15%', '/boot'], ['/dev/loop3', '1G', '1G', '0G', '100%', '/var/lib/snapd/snap/snapd/15177'], ['/dev/loop1', '1G', '1G', '0G', '100%', '/var/lib/snapd/snap/nmap/2536'], ['/dev/loop2', '1G', '1G', '0G', '100%', '/var/lib/snapd/snap/snapd/14978'], ['/dev/loop0', '1G', '1G', '0G', '100%', '/var/lib/snapd/snap/core18/2284'], ['tmpfs', '1G', '1G', '1G', '1%', '/run/user/0'], ['Filesystem', '1G-blocks', 'Used', 'Available', 'Use%', 'Mounted']]]")
            jsonObj = json.dumps(aux, indent=4)
            print(jsonObj)
        if parametro[0] == 'getNetworkStatus':
            aux = ast.literal_eval("[['Internet', 'DNS'], ['Available', 'Without Connection']]")
            jsonObj = json.dumps(aux, indent=4)
            print(jsonObj)
        if parametro[0] == 'getCpuInfo':
            aux = ast.literal_eval("[['01:41:37', 'PM', 'CPU', 'usr', 'nice', 'sys', 'iowait', 'irq', 'soft', 'steal', 'guest', 'gnice', 'idle'], ['01:41:37', 'PM', 'all', '0.58', '0.03', '0.48', '0.14', '0.25', '0.15', '0.00', '0.00', '0.00', '98.37']]")
            jsonObj = json.dumps(aux, indent=4)
            print(jsonObj)
        if parametro[0] == 'getInterfacesNetwork':
            aux = ast.literal_eval("[['lo', 'ens192', 'ens224'], ['127.0.0.1', '10.0.3.248', '172.16.0.84']]")
            jsonObj = json.dumps(aux, indent=4)
            print(jsonObj)
    else:
        if parametro[0] == 'getServiceInfo':
            aux = ast.literal_eval("[['Active', 'Status', 'Tasks'], [['Dead', 'Active: active (running) since Wed 2022-03-16 11:26:59 CST; 2 days ago'], ['Status: Total requests: 96; Idle/Busy workers 100/0;Requests/sec: 0.00053; Bytes served/sec:  15 B/sec'], ['Tasks: 230 (limit: 4591)']]]")
            jsonObj = json.dumps(aux, indent=4)
            print(jsonObj)

def getInfoForLinux():
    parametro = ' '.join(sys.argv[1:])
    parametro = parametro.strip()
    parametro = parametro.split(',')
    if len(parametro) == 1:
        if parametro[0] == 'getRamInfo':
            print(getRamInfo())
        if parametro[0] == 'getDiskInfo':
            print(getDiskInfo())
        if parametro[0] == 'getNetworkStatus':
            print(getNetworkStatus())
        if parametro[0] == 'getCpuInfo':
            print(getCpuInfo())
        if parametro[0] == 'getInterfacesNetwork':
            print(getInterfacesNetwork())
    else:
        if parametro[0] == 'getServiceInfo':
            print(getServiceInfo(parametro[1]))

if platform == 'linux' or platform == 'linux2':
    getInfoForLinux()
elif platform == 'win32':
    getInfoForWindows()
