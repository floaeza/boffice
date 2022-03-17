from telnetlib import DO
import paramiko, xtelnet, requests, json, socket, base64, sys, subprocess, os, platform

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

    return dict(zip(Interfaces, Interfaces_ip))

def getCpuInfo():
    CpuInfo = subprocess.Popen('mpstat -P ALL', shell=True, stdout=subprocess.PIPE).stdout.read()
    CpuInfo = CpuInfo.decode('utf-8')
    CpuInfo = CpuInfo.strip()
    CpuInfo = CpuInfo.split('\n')
    head    = CpuInfo[2].split(' ')
    info    = CpuInfo[3].split(' ')
    head    = list(filter(None, head))
    info    = list(filter(None, info))

    return dict(zip(head, info))

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

    return dict(zip(head, info))

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

    return dict(zip(head, info))

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

    return dict(zip(head, diskInfoFilter))

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

    return dict(zip(head, ramInfoFilter))

parametro = ' '.join(sys.argv[1:])
parametro = parametro.strip()
parametro = parametro.split(',')

if len(parametro) == 1:
    if parametro[0] == 'getRaminfo':
        print(getRamInfo())
    if parametro[0] == 'getDiskInfo':
        print(getDiskInfo())
    if parametro[0] == 'getNetworkStatus':
        print(getNetworkStatus())
    if parametro[0] == 'getDiskInfo':
        print(getCpuInfo())
    if parametro[0] == 'getInterfacesNetwork':
        print(getInterfacesNetwork())
else:
    if parametro[0] == 'getServiceInfo':
        print(getServiceInfo(parametro[1]))
