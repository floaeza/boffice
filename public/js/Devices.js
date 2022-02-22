// @ts-nocheck

$(document).ready(function(){
    modalHandler();
    $('body').on('click', 'a', function(){
    //   alert($(this).attr('name'))
        if ($(this).attr('id') == 'reboot_Device') {
            rebootDevice($(this).attr('name'));
        }else if ($(this).attr('id') == 'logread_Device') {
            modalHandler(true);
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



function logreadDevice(mac) {
    var PROGAMS = {
        help: function(...a) {
          this.printa({
            "help": ["get commands list"],
            "clear": ["clear terminal"]
          });
        },
        clear: function(...a) {
          this.clear_terminal();
        },
        logread:function(...a) {
            let response = getLog(mac, 'logread');
            this.printa(response);
          },
      };
    $("#terminal" ).setAsTerminal("#terminal","[root","AMINET","]","#", PROGAMS);
}
let modal = document.getElementById("modal");
function modalHandler(val) {
    if (val) {
        fadeIn(modal);
    } else {
        fadeOut(modal);
    }
}
function fadeOut(el) {
    el.style.opacity = 1;
    (function fade() {
        if ((el.style.opacity -= 0.1) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
}
function fadeIn(el, display) {
    el.style.opacity = 0;
    el.style.display = display || "flex";
    (function fade() {
        let val = parseFloat(el.style.opacity);
        if (!((val += 0.2) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
}
function getLog(mac, command){
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
            console.log(response);
            log = JSON.stringify(response);
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        console.log("Status: " + textStatus); 
        console.log("Error: " + errorThrown); 
    }  
    });
    return log;
}
