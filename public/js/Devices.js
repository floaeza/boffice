// @ts-nocheck

$(document).ready(function(){
    $('body').on('click', 'a', function(){
    //   alert($(this).attr('name'))
        if ($(this).attr('id') == 'reboot_Device') {
            rebootDevice($(this).attr('name'));
        }else if ($(this).attr('id') == 'logread_Device') {
            logreadDevice($(this).attr('name'));
        }
    });
});


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

function logreadDevice(mac) {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
    });
    $.ajax({
        type: 'GET',
        url: '/BBINCO/Device/LogRead/',
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

