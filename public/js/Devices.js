// @ts-nocheck

$(document).ready(function(){
    $('body').on('click', 'a', function(){
    //   alert($(this).attr('name'))
        rebootDevice($(this).attr('name'));
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
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    }  
    });

}