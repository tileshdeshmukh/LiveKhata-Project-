
// Run After Click Preview Button
$(document).ready(function () {

    quantityTotal = [];
    $('.QTY').each(function (index, value) {
        quantityTotal.push(parseFloat($(this).val()));
    });
    arr = quantityTotal.filter(function (e) { return e });
    // console.log(arr);
    var total = 0;
    // console.log("Filter Table "+arr);
    for (var i in arr) {
        total += quantityTotal[i];
    }
    // console.log("Total "+total);
    // $("#total").html(total);

    $("#quantityCountAfter").html("Quantity= " + total);
    $("#quantityCounttxt1").val(total);
    // ----------------------------------------------


    finalTotal = [];

    $('.GROSS').each(function (index, value) {
        finalTotal.push(parseFloat($(this).val()));
    });
    arr1 = finalTotal.filter(function (e1) { return e1 });
    // console.log("Filter Table "+arr);
    var total1 = 0;
    for (var j in arr1) {
        total1 += finalTotal[j];
    }

      // claculate Round off values -------------------------- @tilesh
      var round = total;
      total = Math.round(total);
      round = round - total;
      $("#addRoundTxt").val(round.toFixed(2));
  
    $("#totalCountAfter").html("Total = " + total1);
    $("#totalCounttxt1").val(total1);

    // ----------------------------------------------
    // Date & Due Date

    var today = new Date();
    var dd = today.getDate();

    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();

    today = dd + '-' + mm + '-' + yyyy;
    var d = today;
    $("#billCreatedDate").val(d);


});


function calculateQuantity() {

    quantityTotal = [];

    $('.QTY').each(function (index, value) {
        quantityTotal.push(parseFloat($(this).val()));
    });
    var total = 0;
    arr = quantityTotal.filter(function (e) { return e });
    console.log("Filter Table " + arr);
    for (var i in arr) {
        total += quantityTotal[i];
    }
    // console.log("Total "+total);
    // $("#total").html(total);
    console.log("Total " + total);

    $("#quantityCountAfter").html("Quantity= " + total);
    $("#quantityCounttxt1").val(total);

}

function calculateTotal(i) {

    finalTotal = [];

    $('.GROSS').each(function (index, value) {
        finalTotal.push(parseFloat($(this).val()));
    });
    var total = 0;
    arr = finalTotal.filter(function (e) { return e });
    console.log("Filter Table " + arr);
    for (var i in arr) {
        total += finalTotal[i];
    }
    // console.log("Total "+total);
    // $("#total").html(total);
    console.log("Total " + total);

      // claculate Round off values -------------------------- @tilesh
      var round = total;
      total = Math.round(total);
      round = round - total;
      $("#addRoundTxt").val(round.toFixed(2));
  
    $("#totalCountAfter").html("Total = " + total);
    $("#totalCounttxt1").val(total);



}

function resultGross(i) {

    var nums = i;
    var num1 = parseInt($("#Quantity" + nums).val());
    var num2 = parseFloat($("#MRP" + nums).val());


    var res = num1 * num2;

    $("#Gross" + nums).val(res);

}

function calTotal() {
    // var nums=i;
    // var num1 =  parseFloat($("#Gross"+nums).val());
    // var tot = $("#totalCountAfter").text();           

    // var txt = tot;
    // var numb1 = txt.match(/\d/g);
    // total1 = parseInt(numb1.join(""));

    // if(num1){
    //     finalTotal.push(num1);
    //     var total=total1;
    //     for(var i in finalTotal){ 
    //         total+= finalTotal[i];
    //     }  
    finalTotal = [];

    $('.GROSS').each(function (index, value) {
        finalTotal.push(parseFloat($(this).val()));
    });
    var total = 0;
    arr = finalTotal.filter(function (e) { return e });
    console.log("Filter Table " + arr);
    for (var i in arr) {
        total += finalTotal[i];
    }

    // console.log("Total "+total);
      // claculate Round off values -------------------------- @tilesh
      var round = total;
      total = Math.round(total);
      round = Math.abs(round - total);
      $("#addRoundTxt").val(round.toFixed(2));
  

    $("#totalCountAfter").html("Total = " + total);
    $("#totalCounttxt").val(total);


}
function resultMrp(i) {

    var num = i;

    var num1 = parseInt($("#Quantity" + num).val());
    var num2 = parseFloat($("#Gross" + num).val());

    var res = num2 / num1;
    $("#MRP" + num).val(res);



};
function resultQuantity(i) {

    var num = i;

    var num1 = parseInt($("#Quantity" + num).val());
    var num2 = parseFloat($("#MRP" + num).val());

    var res = num1 * num2;
    $("#Gross" + num).val(res);


};

// Fetch Item with Price ------------------------ 


function itemName(i) {
    var nums = i;
    var val = $('#item' + nums).val();
    var xyz = $('#item option').filter(function () {
        return this.value == val;
    }).data('rate');
    var msg = xyz;

    var abc = $('#item option').filter(function () {
        return this.value == val;
    }).data('id');
    var msg1 = abc;

    $("#MRP" + nums).val(msg);
    $("#itemId" + nums).val(msg1);

};

// Fetch Praty A/C with Mobile No ------------------------ 


function serviceBill_party() {
    var val = $('.partyAccount').val()
    var xyz = $('#partyAccount option').filter(function () {
        return this.value == val;
    }).data('id');
    var msg = xyz;
    // alert(msg)
    $("#serviceBill_mobile").val(msg);

};

//  Clear TextField data

function clearText(i) {

    var num = i;
    var Quantity = parseInt($("#Quantity" + num).val());
    var Gross = parseInt($("#Gross" + num).val());

    $("#Quantity" + num).val("");
    $("#Gross" + num).val("");
    $("#MRP" + num).val("");
    $("#Quantity" + num).val("");
    $("#Description" + num).val("");
    $("#item" + num).val("");
    $("#itemId" + num).val("");

    quantityTotal = [];
    $('.QTY').each(function (index, value) {
        quantityTotal.push(parseFloat($(this).val()));
    });
    arr = quantityTotal.filter(function (e) { return e });
    // console.log(arr);
    var total = 0;
    // console.log("Filter Table "+arr);
    for (var i in arr) {
        total += quantityTotal[i];
    }
    // console.log("Total "+total);
    // $("#total").html(total);

    $("#quantityCountAfter").html("Quantity= " + total);
    $("#quantityCounttxt1").val(total);
    // ----------------------------------------------


    finalTotal = [];

    $('.GROSS').each(function (index, value) {
        finalTotal.push(parseFloat($(this).val()));
    });
    arr1 = finalTotal.filter(function (e1) { return e1 });
    // console.log("Filter Table "+arr);
    var total1 = 0;
    for (var j in arr1) {
        total1 += finalTotal[j];
    }
      // claculate Round off values -------------------------- @tilesh
      var round = total;
      total = Math.round(total);
      round = Math.abs(round - total);
      $("#addRoundTxt").val(round.toFixed(2));
  
    $("#totalCountAfter").html("Total = " + total1);
    $("#totalCounttxt1").val(total1);


}




// Due Date
function resultDueDate() {

    var fetchDate = parseInt($("#dueDate").val());


    var someDate = new Date();
    var numberofDaystoAdd = fetchDate;

    someDate.setDate(someDate.getDate() + numberofDaystoAdd);

    var dd = someDate.getDate();
    var mm = someDate.getMonth() + 1;
    var yyyy = someDate.getFullYear();


    var today1 = dd + '/' + mm + '/' + yyyy;
    var gotDate = today1;

    $("#dueDate").val(gotDate);


};


