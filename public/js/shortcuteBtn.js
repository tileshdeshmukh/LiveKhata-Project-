$(document).ready(function(){

    createShortcutes

    $(".createShortcutes").click(function(){
        $(".showShortcuts").css("display","block");      
    });
    $("#Company_DetailsBTN").click(function(){
        $("#showHeading").css("display","block");      
        $("#Company_Details").css("display","block");      
    });
    $("#Accounts_MasterBTN").click(function(){
        $("#showHeading").css("display","block");  
        $("#Accounts_Master").css("display","block");      
    });
    $("#Product_MasterBTN").click(function(){
        $("#showHeading").css("display","block");  
        $("#Product_Master").css("display","block");      
    });

  })


  $(".shortcutName").click(function(){

    var name = $(this).data('id');
    var urlname = $(this).data('urlname');
    var cmp_id = $(this).attr('id');

    
    var obj = {"name":name,"urlname":urlname,"cmp_id":cmp_id};
    var data = JSON.stringify(obj);

    // alert(urlname);
    window.location.href = '/shortcuts/'+data;

});