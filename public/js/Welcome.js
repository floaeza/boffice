$(document).ready(function() {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
    });
    $.ajax({
        type: 'GET',
        url: 'BBINCO/WelcomeInfo/',
        success: function (response) {
            console.log(response);
            quitChargeAnimation();
            setInformation(response[0])
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); 
        console.log("Error: " + errorThrown); 
    }  
    });
});

function quitChargeAnimation() {
    let deviceSVG, locationSVG, channelSVG, scheduleSVG;
        deviceSVG   = document.getElementById('deviceSVG');
        locationSVG = document.getElementById('locationSVG');
        channelSVG  = document.getElementById('channelSVG');
        scheduleSVG = document.getElementById('scheduleSVG');
    let svgList = [deviceSVG, locationSVG, channelSVG, scheduleSVG];
    let spinners = document.getElementsByName('spinner');
    spinners.forEach(element => {
        element.classList.add('invisible')
    });
    svgList.forEach(element => {
        element?.classList.remove('invisible');
        element?.classList.add('visible');
    });
}

function setInformation(infoArray){
    let cpuUsagePercentage = document.getElementById('cpuUsagePercentage'),
        phpInfo            = document.getElementById('phpInfo'),
        httpInfo           = document.getElementById('httpInfo'),
        ntpInfo            = document.getElementById('ntpInfo'),
        dhcpInfo           = document.getElementById('dhcpInfo'),
        infoTable          = document.getElementById('infoTable'),
        loadingTable       = document.getElementById('loadingTable'),
        cpuBarFondo        = document.getElementById('cpuBarFondo'),
        cpuBar             = document.getElementById('cpuBar');
    
    let infoList = [cpuUsagePercentage, phpInfo, httpInfo, ntpInfo, dhcpInfo, infoTable, loadingTable];
    
    let cardsText = Array.from(document.getElementsByClassName('text-2xl'));
        cardsText[0].innerHTML = infoArray['DEVICES'];
        cardsText[1].innerHTML = infoArray['TopLocation']['location'];
        cardsText[2].innerHTML = infoArray['TopChannel']['nombreCanal'];
        cardsText[3].innerHTML = infoArray['TopSchedule'];
        infoList.forEach(element => {
            let aux = null;
            switch (element?.id) {
                case 'cpuUsagePercentage':
                    aux = Math.ceil((parseFloat(infoArray['CPU']))*100);
                    if(cpuBar && cpuBarFondo) {
                        cpuBar.style.width = aux.toString()+'%';
                        if (aux < 50) {
                            cpuBarFondo.style.backgroundColor = '#BCEDD1';
                            cpuBar.style.backgroundColor = '#069B45';
                        }else if(aux > 50 && aux < 70){
                            cpuBarFondo.style.backgroundColor = '#F9A96A';
                            cpuBar.style.backgroundColor = '#FF7000';
                        }else if (aux > 70) {
                            cpuBarFondo.style.backgroundColor = '#FD8575';
                            cpuBar.style.backgroundColor = '#FF1E00';
                        }
                    }
                    element.innerHTML = aux.toString()+'%';
                    break;
                case 'phpInfo':
                    element.innerHTML = infoArray['PHP']['tasks']+'/'+infoArray['PHP']['maxTasks'];
                    break;
                case 'httpInfo':
                    element.innerHTML = infoArray['HTTP']['tasks']+'/'+infoArray['HTTP']['maxTasks'];
                    break;
                case 'DB':
                    element.innerHTML = infoArray['HTTP']['tasks']+'/'+infoArray['HTTP']['maxTasks'];
                    break;
            }
        });    
    if(loadingTable) loadingTable.style.display = 'none';
    if(infoTable) infoTable.style.display = 'contents';
}



    

