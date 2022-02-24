// @ts-nocheck

$(document).ready(function(){
    $('body').on('click', 'button', function(){
    //   alert($(this).attr('name'))
        if ($(this).attr('id') == 'reboot_Device') {
            rebootDevice($(this).attr('name'));
            //alert($(this).attr('name'));
        }else if ($(this).attr('id') == 'logread_Device') {
            toggleModal('modal-id');
            let commandLine = document.getElementById('commandLine');
            let macTobeCommand = $(this).attr('name'); 
            let commandResponse = document.getElementById('commandResponse');
            commandLine.addEventListener("keyup", function (event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                    let command = commandLine.value;
                    let response = getInfoByCommand(macTobeCommand, command);
                    commandResponse.innerHTML = response;
                }
            });
        }
    });
});

/*++++++Funciones de retorno para los dispositivos+++++*/

function rebootDevice(mac){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
    });
    $.ajax({
        type: 'GET',
        url: '/BBINCO/Device/Reboot/',
        data: {
            mac : mac
        },
        success: function (response) {
            console.log(response);
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); 
        console.log("Error: " + errorThrown); 
    }  
    });
}

function getInfoByCommand(mac, command){
    let log = ''
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
    });
    $.ajax({
        type: 'GET',
        url: '/BBINCO/Device/Terminal/',
        data: {
            mac : mac,
            command : command
        },
        success: function (response) {
            // let aux = response[0].replace( /'/g,"");
            //     log = aux.split('\r\n');
            console.log(response[0]);
            log = response[0];
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); 
        console.log("Error: " + errorThrown); 
    }  
    });
    return log;
}

/*++++++++++++++++++++++++++++++++++++++++++++++++++++*/

/*++++++Funciones para los paneles de tipo Modal+++++*/
function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
}
/*++++++++++++++++++++++++++++++++++++++++++++++++++++*/
