$(document).ready(function () {
    // Date & Due Date


    var today = new Date();
    var dd = today.getDate();

    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();

    today = dd + '-' + mm + '-' + yyyy;
    var d = today;
    $("#billCreatedDate").val(d);

    // Quantity array
    quantityTotal = [];

    $('.QTY').each(function (index, value) {
        quantityTotal.push(parseFloat($(this).val()));
    });
    var totalQTY = 0;
    arr1 = quantityTotal.filter(function (e) { return e });
    // console.log("Filter Table "+arr);
    for (var i in arr1) {
        totalQTY += quantityTotal[i];
    }

    $("#quantityCount").html("Quantity = " + totalQTY);
    $("#quantityCounttxt").val(totalQTY);

    // Discount Array

    discountTotal = [];

    $('.DISCOUNT').each(function (index, value) {
        discountTotal.push(parseFloat($(this).val()));
    });
    var totalDISCOUNT = 0;
    arr2 = discountTotal.filter(function (e) { return e });

    for (var j in arr2) {
        totalDISCOUNT += discountTotal[j];
    }
    $("#totalDisc").html("Discount = " + totalDISCOUNT);

    // Final Total Array

    finalTotal = [];

    $('.GROSS').each(function (index, value) {
        finalTotal.push(parseFloat($(this).val()));
    });
    var totalfinalTotal = 0;
    arr3 = finalTotal.filter(function (e) { return e });

    for (var k in arr3) {
        totalfinalTotal += finalTotal[k];
    }
    $("#totalCount").html("Total = " + totalfinalTotal);

    // Trade Discount

    tradeDisTotal = [];

    $('.TRADEDISC').each(function (index, value) {
        tradeDisTotal.push(parseFloat($(this).val()));
    });
    var totalTRADEDISC = 0;
    arr4 = tradeDisTotal.filter(function (e) { return e });

    for (var l in arr4) {
        totalTRADEDISC += tradeDisTotal[l];
    }
    $("#totalTrradeDisc").html("Trade Disc = " + totalTRADEDISC);

    // Taxable Amount Array

    taxableAmt = [];

    $('.TAXABLE').each(function (index, value) {
        taxableAmt.push(parseFloat($(this).val()));
    });
    var tottaxableAmt = 0;
    arr5 = taxableAmt.filter(function (e) { return e });
    for (var m in arr5) {
        tottaxableAmt += taxableAmt[m];
    }
    $("#totalTaxable").html("Taxable = " + tottaxableAmt);
    $("#totalTaxabletxt").val(tottaxableAmt);

    // Final GST Array
    finalGSTArray = [];

    $('.GSTTOTAL').each(function (index, value) {
        finalGSTArray.push(parseFloat($(this).val()));
    });
    var totalGST1 = 0;
    arr6 = finalGSTArray.filter(function (e) { return e });
    // console.log("Filter Table "+arr);
    for (var n in arr6) {
        totalGST1 += finalGSTArray[n];
    }

    $("#totalGSTtxt").val(totalGST1 * 2);
    if (totalGST1 > 0) {
        $(".totalGST").html("GST = " + totalGST1);
    }


    // IGST Array 

    IGSTArray = [];

    $('.IGSTTOTAL').each(function (index, value) {
        IGSTArray.push(parseFloat($(this).val()));
    });
    var totalIGST = 0;
    arr7 = IGSTArray.filter(function (e) { return e });

    for (var o in arr7) {
        totalIGST += IGSTArray[o];
    }

    $("#totalIGSTtxt").val(totalIGST);
    if (totalIGST > 0) {
        $("#totalIGST").html("IGST = " + totalIGST);
    }

});


var finalTotal = [];
var quantityTotal = [];
var discountTotal = [];
var demonetAMT = [];
var finalGSTArray = [];
var taxableAmt = [];
var tradeDisTotal = [];
var IGSTArray = [];

function calculateQuantity(i) {
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

    $("#quantityCount").html("Quantity = " + total);
    $("#quantityCounttxt").val(total);

}


function finalResultGST(i) {

    var sym1 = $("#totalGstFetch").text();

    var txt = sym1;
    var nu1 = txt.match(/\d/g);
    nu1 = parseInt(nu1.join(""));
    gstCount = numb - nu1;

    // alert(gstCount);

}

function calculateDisc(i) {

    discountTotal = [];

    $('.DISCOUNT').each(function (index, value) {
        discountTotal.push(parseFloat($(this).val()));
    });
    var total = 0;
    arr = discountTotal.filter(function (e) { return e });
    //  console.log("Filter Table "+arr);
    for (var i in arr) {
        total += discountTotal[i];
    }

    $("#totalDisc").html("Discount = " + total);
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

    $("#totalCount").html("Total = " + total);

}



function resultGross(i) {

    var nums = i;
    var num1 = parseInt($("#Quantity" + nums).val());
    var num2 = parseFloat($("#MRP" + nums).val());


    var res = num1 * num2;

    $("#Gross" + nums).val(res);

}

function calTotal(i) {
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

    console.log("Total " + total);

    $("#totalCount").html("Total = " + total);

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

}

function resultDiscount(v, i) {
    var num = i;
    var num1 = parseInt($("#discount" + num).val());
    var num2 = parseFloat($("#Gross" + num).val());

    (v.value === "") ? emptyValue() : fillValue();

    function emptyValue() {
        $("#discount" + num).val("00");

        // $("#totalDisc").html(num2);
        $("#netAmt").html("Net = " + num2);
        $("#netAmountTxt").val(num2);
        $("#discountTxt" + num).val(00);
        $("#discountTxtTot" + num).val(num2);

    }

    function fillValue() {

        var disc = num2;
        var a = parseFloat((disc * num1) / 100);
        total = parseFloat(num2 - a);
        total = Math.round(total);
        txtTotal = total;
        $("#totalDisc").html("Disc = " + a);
        $("#netAmt").html("Net = " + total);
        $("#netAmountTxt").val(total);
        $("#discountTxtTot" + num).val(txtTotal);
        $("#discountTxt" + num).val(a);

    }
}

function resultTradeDiscount(v, i) {

    var num = i;

    var numb1 = parseFloat($("#discountTxtTot" + num).val());
    var num2 = parseFloat($("#tradedisc" + num).val());

    (v.value === "") ? emptyValue() : fillValue();

    function emptyValue() {
        $("#tradedisc" + num).val("00");
        $("#tradediscTxt" + num).val(0);
        $("#tradediscTxtTot" + num).val(numb1);

    }

    function fillValue() {

        var a = (numb1 * num2) / 100;

        var tot = numb1 - a;
        tot = Math.round(tot);
        $("#netAmt").html("Net = " + tot);
        $("#netAmountTxt").val(tot);
        $("#totalTrradeDisc").html("Trade Discount " + a);
        $("#tradediscTxt" + num).val(a);
        $("#tradediscTxtTot" + num).val(tot);

    }
}

function calculateTradeDisc() {
    tradeDisTotal = [];

    $('.TRADEDISC').each(function (index, value) {
        tradeDisTotal.push(parseFloat($(this).val()));
    });
    var total = 0;
    arr = tradeDisTotal.filter(function (e) { return e });
    // console.log("Filter Table "+arr);
    for (var i in arr) {
        total += tradeDisTotal[i];
    }
    $("#totalTrradeDisc").html("Trade Disc = " + total);
}

// Calculate (Taxable,CGST,SGST,IGST) With net amount 
function resultAddless(v, i) {

    var num = i;

    (v.value === "") ? $("#addlesstotal" + num).val("00") : "";
    var num1 = $("#addlesstotal" + num).val();

    var numb = parseFloat($("#tradediscTxtTot" + num).val());

    var sym = num1.charAt(0);

    if (sym == "-") {

        var sym1 = num1;
        var txt = sym1;
        var numb1 = txt.match(/\d/g);
        numb1 = parseInt(numb1.join(""));
        taxableCount = numb - numb1;
        // alert(taxableCount);
        $("#taxable" + num).val(taxableCount);
        $("#totalTaxable").html("Taxable = " + taxableCount);

        $("#netAmt").html("Net = " + taxableCount);
        $("#netAmountTxt").val(Math.round(taxableCount));

        $("#totalAddLess").html(num1);

        var num11 = $("#SGST" + num).val();
        var GST = num11 * 2;
        // var tt = taxableCount;
        var withGST = (taxableCount * GST) / 100;

        var finalGSTAmt = parseFloat(withGST + taxableCount);
        finalGSTAmt = Math.round(finalGSTAmt);
        $(".totalGST").html("GST = " + (withGST / 2));
        $("#gstTxt" + num).val(withGST / 2);

        $("#netAmt").html("Net = " + finalGSTAmt);
        $("#netAmountTxt").val(finalGSTAmt);

        $("#demonetAMT").val(finalGSTAmt);


        // start add taxable array
        // taxableAmt.push(taxableCount);
        // var tot=0;
        // for(var k in taxableAmt){
        //     tot+= taxableAmt[k];
        // }

        taxableAmt = [];

        $('.TAXABLE').each(function (index, value) {
            taxableAmt.push(parseFloat($(this).val()));
        });
        var tot = 0;
        arr = taxableAmt.filter(function (e) { return e });
        // console.log("Filter Table "+arr);
        for (var i in arr) {
            tot += taxableAmt[i];
        }

        $("#totalTaxable").html("Taxable = " + tot);
        $("#totalTaxabletxt").val(tot);

        // end add taxable array
        var SGST = $("#SGST" + num).val();
        var IGST = $("#IGST" + num).val();

        if (SGST > 0) {
            var GST = SGST * 2;
            // var tt = taxableCount;
            var withGST = (taxableCount * GST) / 100;
            var finalGSTAmt = parseFloat(withGST + taxableCount);
            finalGSTAmt = Math.round(finalGSTAmt);
            var answithGST = withGST / 2;

            $("#gstTxt" + num).val(answithGST);

            $(".totalGST").html("GST = " + answithGST);
            $("#netAmt").html("Net = " + finalGSTAmt);
            $("#netAmountTxt").val(finalGSTAmt);

            $("#demonetAMT").val(finalGSTAmt);
            3
            // finalGSTArray.push(answithGST);
            // var totalGST=0;
            // for(var i in finalGSTArray){
            //     totalGST+= finalGSTArray[i];
            // }

            finalGSTArray = [];

            $('.GSTTOTAL').each(function (index, value) {
                finalGSTArray.push(parseFloat($(this).val()));
            });
            var totalGST = 0;
            arr = finalGSTArray.filter(function (e) { return e });
            // console.log("Filter Table "+arr);
            for (var i in arr) {
                totalGST += finalGSTArray[i];
            }

            $(".totalGST").html("GST = " + totalGST);
            var totalGSTAmt = totalGST * 2;
            totalGSTAmt = Math.round(totalGSTAmt);
            $("#totalGSTtxt").val(totalGSTAmt);
            $("#totalIGSTtxt").val(00);

            $("#demonetAMT").val(totalGSTAmt + tot);

            $("#netAmountTxt").val(totalGSTAmt + tot);
            $("#netAmt").html("Net = " + (totalGSTAmt + tot));
            // End GST Array
        }
        else {

            var withGST = (taxableCount * IGST) / 100;
            $("#totalIGST").html("IGST = " + withGST);
            $("#IGSTTxt" + num).val(withGST);

            IGSTArray = [];

            $('.IGSTTOTAL').each(function (index, value) {
                IGSTArray.push(parseFloat($(this).val()));
            });
            var totalGST = 0;
            arr = IGSTArray.filter(function (e) { return e });

            for (var i in arr) {
                totalGST += IGSTArray[i];
            }

            $("#totalIGST").html("IGST = " + totalGST);

            $("#totalGSTtxt").val(00);

            $("#totalIGSTtxt").val(totalGST);

            var totalTaxableAmount = parseFloat($("#totalTaxabletxt").val());
            var totalIGSTAmount = parseFloat($("#totalIGSTtxt").val());

            var ansfinalGSTAmt = (totalIGSTAmount + totalTaxableAmount);
            ansfinalGSTAmt = Math.round(ansfinalGSTAmt);
            // alert(ansfinalGSTAmt)
            $("#netAmt").html("Net = " + ansfinalGSTAmt);

            $("#netAmountTxt").val(ansfinalGSTAmt);

            $("#demonetAMT").val(ansfinalGSTAmt);

            // End IGST Array
        }
    }
    else if (sym == "+") {
        var sym1 = num1;
        var txt = sym1;
        var numb1 = txt.match(/\d/g);
        numb1 = parseInt(numb1.join(""));
        taxableCount = numb + numb1;
        taxableCount = Math.round(taxableCount);
        // alert(taxableCount);
        $("#taxable" + num).val(taxableCount);
        $("#totalTaxable").html("Taxable = " + taxableCount);

        $("#netAmt").html("Net = " + taxableCount);
        $("#netAmountTxt").val(taxableCount);

        $("#totalAddLess").html(num1);

        var num11 = $("#SGST" + num).val();
        var GST = num11 * 2;
        // var tt = taxableCount;
        var withGST = (taxableCount * GST) / 100;
        var finalGSTAmt = parseFloat(withGST + taxableCount);
        finalGSTAmt = Math.round(finalGSTAmt);
        $("#gstTxt" + num).val(withGST / 2);

        $(".totalGST").html("GST = " + (withGST / 2));
        $("#netAmt").html("Net = " + finalGSTAmt);
        $("#netAmountTxt").val(finalGSTAmt);

        $("#demonetAMT").val(finalGSTAmt);

        // start add taxable array
        // taxableAmt.push(taxableCount);
        // var tot=0;
        // for(var k in taxableAmt){
        //     tot+= taxableAmt[k];                
        // }

        taxableAmt = [];

        $('.TAXABLE').each(function (index, value) {
            taxableAmt.push(parseFloat($(this).val()));
        });
        var tot = 0;
        arr = taxableAmt.filter(function (e) { return e });
        // console.log("Filter Table "+arr);
        for (var i in arr) {
            tot += taxableAmt[i];
        }

        $("#totalTaxable").html("Taxable = " + tot);
        $("#totalTaxabletxt").val(tot);


        // end add taxable array
        var SGST = $("#SGST" + num).val();
        var IGST = $("#IGST" + num).val();

        if (SGST > 0) {
            var GST = SGST * 2;
            // var tt = taxableCount;
            var withGST = (taxableCount * GST) / 100;
            var finalGSTAmt = parseFloat(withGST + taxableCount);
            var answithGST = withGST / 2;
            finalGSTAmt = Math.round(finalGSTAmt);
            $("#gstTxt" + num).val(answithGST);

            $(".totalGST").html("GST = " + answithGST);
            $("#netAmt").html("Net = " + finalGSTAmt);
            $("#netAmountTxt").val(finalGSTAmt);

            $("#demonetAMT").val(finalGSTAmt);

            // finalGSTArray.push(answithGST);
            // var totalGST=0;
            // for(var i in finalGSTArray){
            //     totalGST+= finalGSTArray[i];
            // }

            finalGSTArray = [];

            $('.GSTTOTAL').each(function (index, value) {
                finalGSTArray.push(parseFloat($(this).val()));
            });
            var totalGST = 0;
            arr = finalGSTArray.filter(function (e) { return e });
            // console.log("Filter Table "+arr);
            for (var i in arr) {
                totalGST += finalGSTArray[i];
            }


            $(".totalGST").html("GST = " + totalGST);
            var totalGSTAmt = totalGST * 2;
            totalGSTAmt = Math.round(totalGSTAmt);
            $("#totalGSTtxt").val(totalGSTAmt);
            $("#totalIGSTtxt").val(00);

            $("#demonetAMT").val(totalGSTAmt + tot);

            $("#netAmountTxt").val(totalGSTAmt + tot);
            $("#netAmt").html("Net = " + (totalGSTAmt + tot));

            // End GST Array
        }
        else {

            var withGST = (taxableCount * IGST) / 100;
            $("#totalIGST").html("IGST = " + withGST);
            $("#IGSTTxt" + num).val(withGST);

            IGSTArray = [];

            $('.IGSTTOTAL').each(function (index, value) {
                IGSTArray.push(parseFloat($(this).val()));
            });
            var totalGST = 0;
            arr = IGSTArray.filter(function (e) { return e });

            for (var i in arr) {
                totalGST += IGSTArray[i];
            }

            $("#totalIGST").html("IGST = " + totalGST);

            $("#totalGSTtxt").val(00);

            $("#totalIGSTtxt").val(totalGST);

            var totalTaxableAmount = parseFloat($("#totalTaxabletxt").val());
            var totalIGSTAmount = parseFloat($("#totalIGSTtxt").val());

            var ansfinalGSTAmt = (totalIGSTAmount + totalTaxableAmount);
            ansfinalGSTAmt = Math.round(ansfinalGSTAmt);
            // alert(ansfinalGSTAmt)
            $("#netAmt").html("Net = " + ansfinalGSTAmt);

            $("#netAmountTxt").val(ansfinalGSTAmt);

            $("#demonetAMT").val(ansfinalGSTAmt);

            // End IGST Array
        }
    }
    else if (sym != "+" && sym != "-") {

        // num1 is addless textbox value
        var sym1 = num1;
        var txt = sym1;
        var numb1 = txt.match(/\d/g);
        numb1 = parseInt(numb1.join(""));

        taxableCount = parseFloat(numb + numb1);
        
        // alert(numb1);
        $("#taxable" + num).val(taxableCount);
        $("#totalTaxable").html("Taxable = " + taxableCount);

        $("#netAmt").html("Net = " + taxableCount);
        $("#netAmountTxt").val( Math.round(taxableCount));

        $("#totalAddLess").html(num1);

        taxableAmt = [];

        $('.TAXABLE').each(function (index, value) {
            taxableAmt.push(parseFloat($(this).val()));
        });
        var tot = 0;
        arr = taxableAmt.filter(function (e) { return e });
        // console.log("Filter Table "+arr);
        for (var i in arr) {
            tot += taxableAmt[i];
        }

        $("#totalTaxable").html("Taxable = " + tot);
        $("#totalTaxabletxt").val(tot);

        // end add taxable array
        var SGST = $("#SGST" + num).val();
        var IGST = $("#IGST" + num).val();

        if (SGST > 0) {
            var GST = SGST * 2;
            // var tt = taxableCount;
            var withGST = (taxableCount * GST) / 100;
            var finalGSTAmt = parseFloat(withGST + taxableCount);
            var answithGST = withGST / 2;
            $("#gstTxt" + num).val(answithGST);

            $(".totalGST").html("GST = " + answithGST);

            finalGSTArray = [];

            $('.GSTTOTAL').each(function (index, value) {
                finalGSTArray.push(parseFloat($(this).val()));
            });
            var totalGST = 0;
            arr = finalGSTArray.filter(function (e) { return e });
            // console.log("Filter Table "+arr);
            for (var i in arr) {
                totalGST += finalGSTArray[i];
            }

            $(".totalGST").html("GST = " + totalGST);
            var totalGSTAmt = totalGST * 2;
            $("#totalGSTtxt").val(totalGSTAmt);
            $("#totalIGSTtxt").val(00);

            $("#demonetAMT").val(totalGSTAmt + tot);

            $("#netAmountTxt").val(Math.round(totalGSTAmt + tot));
            $("#netAmt").html("Net = " + (totalGSTAmt + tot));


            // End GST Array
        }
        else {



            var withGST = (taxableCount * IGST) / 100;
            $("#totalIGST").html("IGST = " + withGST);
            $("#IGSTTxt" + num).val(withGST);

            IGSTArray = [];

            $('.IGSTTOTAL').each(function (index, value) {
                IGSTArray.push(parseFloat($(this).val()));
            });
            var totalGST = 0;
            arr = IGSTArray.filter(function (e) { return e });

            for (var i in arr) {
                totalGST += IGSTArray[i];
            }

            $("#totalIGST").html("IGST = " + totalGST);

            $("#totalGSTtxt").val(00);

            $("#totalIGSTtxt").val(totalGST);

            var totalTaxableAmount = parseFloat($("#totalTaxabletxt").val());
            var totalIGSTAmount = parseFloat($("#totalIGSTtxt").val());

            var ansfinalGSTAmt = (totalIGSTAmount + totalTaxableAmount);
            // alert(ansfinalGSTAmt)
            $("#netAmt").html("Net = " + ansfinalGSTAmt);

            $("#netAmountTxt").val( Math.round(ansfinalGSTAmt) );

            $("#demonetAMT").val(ansfinalGSTAmt);

            // End IGST Array
        }
    }

}


function clearText(i) {

    var num = i;

    $("#Quantity" + num).val("");
    $("#Gross" + num).val("");
    $("#MRP" + num).val("");
    $("#Quantity" + num).val("");
    $("#Description" + num).val("");
    $("#item" + num).val("");
    $("#itemId" + num).val("");

    $("#discount" + num).val("");
    $("#discountTxt" + num).val("");
    $("#discountTxtTot" + num).val("");

    $("#tradedisc" + num).val("");
    $("#tradediscTxt" + num).val("");
    $("#tradediscTxtTot" + num).val("");

    $("#addlesstotal" + num).val("");

    $("#taxable" + num).val("");

    $("#CGST" + num).val("");
    $("#GST" + num).val("");
    $("#gstTxt" + num).val("");
    $("#SGST" + num).val("");
    $("#IGST" + num).val("");
    $("#IGSTTxt" + num).val("");


    // Quantity array
    quantityTotal = [];

    $('.QTY').each(function (index, value) {
        quantityTotal.push(parseFloat($(this).val()));
    });
    var totalQTY = 0;
    arr1 = quantityTotal.filter(function (e) { return e });
    // console.log("Filter Table "+arr);
    for (var i in arr1) {
        totalQTY += quantityTotal[i];
    }

    $("#quantityCount").html("Quantity = " + totalQTY);
    $("#quantityCounttxt").val(totalQTY);

    // Discount Array

    discountTotal = [];

    $('.DISCOUNT').each(function (index, value) {
        discountTotal.push(parseFloat($(this).val()));
    });
    var totalDISCOUNT = 0;
    arr2 = discountTotal.filter(function (e) { return e });

    for (var j in arr2) {
        totalDISCOUNT += discountTotal[j];
    }
    $("#totalDisc").html("Discount = " + totalDISCOUNT);

    // Final Total Array

    finalTotal = [];

    $('.GROSS').each(function (index, value) {
        finalTotal.push(parseFloat($(this).val()));
    });
    var totalfinalTotal = 0;
    arr3 = finalTotal.filter(function (e) { return e });

    for (var k in arr3) {
        totalfinalTotal += finalTotal[k];
    }
    $("#totalCount").html("Total = " + totalfinalTotal);

    // Trade Discount

    tradeDisTotal = [];

    $('.TRADEDISC').each(function (index, value) {
        tradeDisTotal.push(parseFloat($(this).val()));
    });
    var totalTRADEDISC = 0;
    arr4 = tradeDisTotal.filter(function (e) { return e });

    for (var l in arr4) {
        totalTRADEDISC += tradeDisTotal[l];
    }
    $("#totalTrradeDisc").html("Trade Disc = " + totalTRADEDISC);

    // Taxable Amount Array

    taxableAmt = [];

    $('.TAXABLE').each(function (index, value) {
        taxableAmt.push(parseFloat($(this).val()));
    });
    var tottaxableAmt = 0;
    arr5 = taxableAmt.filter(function (e) { return e });
    for (var m in arr5) {
        tottaxableAmt += taxableAmt[m];
    }
    $("#totalTaxable").html("Taxable = " + tottaxableAmt);
    $("#totalTaxabletxt").val(tottaxableAmt);

    // Final GST Array
    finalGSTArray = [];

    $('.GSTTOTAL').each(function (index, value) {
        finalGSTArray.push(parseFloat($(this).val()));
    });
    var totalGST1 = 0;
    arr6 = finalGSTArray.filter(function (e) { return e });
    // console.log("Filter Table "+arr);

    for (var n in arr6) {
        totalGST1 += finalGSTArray[n];
    }

    $(".totalGST").html("GST = " + totalGST1);
    $("#totalGSTtxt").val(totalGST1 * 2);


    // IGST Array 

    IGSTArray = [];

    $('.IGSTTOTAL').each(function (index, value) {
        IGSTArray.push(parseFloat($(this).val()));
    });
    var totalIGST = 0;
    arr7 = IGSTArray.filter(function (e) { return e });

    for (var o in arr7) {
        totalIGST += IGSTArray[o];
    }

    $("#totalIGST").html("IGST = " + totalIGST);
    $("#totalIGSTtxt").val(totalIGST);

    var totalTaxabletxt = parseFloat($("#totalTaxabletxt").val());
    var totalGSTtxt = parseFloat($("#totalGSTtxt").val());

    var afterClearTotal = (totalTaxabletxt + totalGSTtxt);

    $("#netAmountTxt").val(Math.round(afterClearTotal));
    $("#demonetAMT").val(afterClearTotal);
    $("#netAmt").html("Net = " + (afterClearTotal));

}


// Fetch Item with Price ------------------------ 

function itemName(i) {

    var nums = i;
    var val = $('#item' + nums).val()
    var itemId = $('#item option').filter(function () {
        return this.value == val;
    }).data('id');

    var tax = $('#item option').filter(function () {
        return this.value == val;
    }).data('tax');

    var xyz = $('#item option').filter(function () {
        return this.value == val;
    }).data('rate');

    var rate = xyz;
    var txt = tax;
    var numb = txt.match(/\d/g);
    numb = numb.join("");

    var gstparty = $('#gstpartytype').val();


    var totalTax = numb / 2;
    // alert(totalTax);     
    $("#MRP" + nums).val(rate);
    $("#GST" + nums).val(tax);
    $("#itemId" + nums).val(itemId);

    if (gstparty == "InState") {
        $("#CGST" + nums).val(totalTax);
        $("#SGST" + nums).val(totalTax);
        $("#IGST" + nums).val("00");
        $("#IGSTTxt" + nums).val("00");
    }
    else if (gstparty == "OutState") {
        $("#CGST" + nums).val("00");
        $("#SGST" + nums).val("00");
        $("#gstTxt" + nums).val("00");
        $("#IGST" + nums).val(numb);
    }
    else if (gstparty == "") {
        // alert("Select Customer");
        $("#CGST" + nums).val(totalTax);
        $("#SGST" + nums).val(totalTax);
        $("#IGST" + nums).val("00");
        $("#IGSTTxt" + nums).val("00");

    }
};

// Fetch Praty A/C with Mobile No ------------------------ 

function serviceBill_party() {
    var val = $('.partyAccount').val()
    var xyz = $('#partyAccount option').filter(function () {
        return this.value == val;
    }).data('id');

    var gst = $('#partyAccount option').filter(function () {
        return this.value == val;
    }).data('gst');

    var msg = xyz;
    var msg2 = gst;
    // alert(msg)
    $("#serviceBill_mobile").val(msg);
    $("#gstpartytype").val(msg2);

};

function sendSms() {

    var Voucher_no = $('#Voucher_no').val()
    var mobile = $('#serviceBill_mobile').val()
    var date = $('#billCreatedDate').val()
    var n = date.toString();
    var amount = $('#totalCount').text();
    var cName = $('#cName').text();
    // var cName = "Rishi's Company";              
    var obj = { "mobile": mobile, "Date": n, "Amount": amount, "Cmp_Name": cName, "Voucher_No": Voucher_no };
    var SMS = JSON.stringify(obj);

    window.location.href = '/servicebill-sms/' + SMS;
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



// Calculate Hamali for composition Bill


function resultHamali(v, i) {


    var Hamali = parseFloat(v.value);

    var TCS = parseFloat($("#totalTaxabletxt").val());
    var GST = parseFloat($("#totalIGSTtxt").val());
    var IGST = parseFloat($("#totalGSTtxt").val());

    (v.value === "0" || v.value === "") ? emptyValue() : fillValue();

    function emptyValue() {

        if (GST !== 0) {

            var ans = (TCS + GST);
            var addRound = ans;
            ans = Math.round(ans);
            addRound = Math.abs(addRound - ans);
            // $("#demonetAMT").val(ans);
            $("#demonetAMT").val(ans);
            $("#addRoundTxt1").val(addRound.toFixed(2));
            $("#netAmountTxt1").val(Math.round(ans));
            $("#netAmt").html("Net = " + ans.toFixed(2));

        }
        else {
            var ans = (TCS + IGST);
            var addRound = ans;
            ans = Math.round(ans);
            addRound = Math.abs(addRound - ans);
            // $("#demonetAMT").val(ans);
            $("#demonetAMT").val(ans);
            $('#addRoundTxt1').val(addRound.toFixed(2));
            $("#netAmountTxt1").val(ans);
            $("#netAmt").html("Net = " + ans.toFixed(2));

        }
        $("#hamaliTxt").val(00);


    }

    function fillValue() {

        if (GST !== 0) {

            var netAmtTotal = (TCS + GST);
            var hamaliTotal = (netAmtTotal + Hamali);
            var addRound = hamaliTotal;
            hamaliTotal = Math.round(hamaliTotal);
            addRound = Math.abs(addRound - hamaliTotal);
            $("#demonetAMT").val(hamaliTotal);
            // $("#netAmountTxt").val(hamaliTotal);
            $("#addRoundTxt1").val(addRound.toFixed(2));
            $("#netAmountTxt1").val(hamaliTotal);
            $("#netAmt").html("Net = " + hamaliTotal);

        }
        else {

            var netAmtTotal = (TCS + IGST);
            var hamaliTotal = (netAmtTotal + Hamali);
            var addRound = hamaliTotal;
            hamaliTotal = Math.round(hamaliTotal);
            addRound = Math.abs(addRound - hamaliTotal);
            $("#demonetAMT").val(hamaliTotal);
            // $("#netAmountTxt").val(hamaliTotal);
            $("#addRoundTxt1").val(addRound.toFixed(2));
            $("#netAmountTxt1").val(hamaliTotal);
            $("#netAmt").html("Net = " + hamaliTotal);

        }



    }
}

function resultCashDisc(v, i) {

    var Discount = parseFloat(v.value);

    var TCS = parseFloat($("#totalTaxabletxt").val());
    var GST = parseFloat($("#totalIGSTtxt").val());
    var IGST = parseFloat($("#totalGSTtxt").val());
    var hamaliValue = parseFloat($("#hamaliTxt").val());

    (v.value === "0" || v.value === "") ? emptyValue() : fillValue();

    function emptyValue() {

        if (GST !== 0) {

            var ans = (TCS + GST + hamaliValue);
            var addRound = ans;
            ans = Math.round(ans);
            addRound = Math.abs(addRound - ans);
            // var ans = parseFloat($("#demonetAMT").val());
            $("#demonetAMT").val(ans);
            // $("#netAmountTxt").val(ans);
            $("#addRoundTxt1").val(addRound.toFixed(2));
            $("#netAmountTxt1").val(ans);
            $("#netAmt").html("Net = " + ans.toFixed(2));

        }
        else {

            var ans = (TCS + IGST + hamaliValue);
            var addRound = ans;
            ans = Math.round(ans);
            addRound = Math.abs(addRound - ans);
            // var ans = parseFloat($("#demonetAMT").val());
            $("#demonetAMT").val(ans);
            // $("#netAmountTxt").val(ans);
            $("#addRoundTxt1").val(addRound.toFixed(2));
            $("#netAmountTxt1").val(ans);
            $("#netAmt").html("Net = " + ans.toFixed(2));

        }
        $("#cashDiscTxt").val(00);

    }

    function fillValue() {


        var netAmtTotal = parseFloat($("#demonetAMT").val());

        var cashDiscTotal = (netAmtTotal - Discount);
        var addRound = cashDiscTotal;
        cashDiscTotal = Math.round(cashDiscTotal);
        addRound = Math.abs(addRound - cashDiscTotal);
        // var cashDiscTotal = netAmtTotal - a;
        $("#demonetAMT").val(cashDiscTotal);
        // $("#netAmountTxt").val(cashDiscTotal);
        // $("#addRoundTxt1").val(addRound.toFixed(2));
        $("#netAmountTxt1").val(cashDiscTotal);
        $("#netAmt").html("Net = " + cashDiscTotal);


    }
}