$(document).ready(function () {
    // Date & Due Date


    var today = new Date();
    var dd = today.getDate();

    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();

    today = dd + '-' + mm + '-' + yyyy;
    var d = today;
    $("#billCreatedDate").val(d);

});


var finalTotal = [];
var quantityTotal = [];
var discountTotal = [];
var demonetAMT = [];
var finalGSTArray = [];
var taxableAmt = [];
var IGSTArray = [];

function calculateQuantity(i) {
    quantityTotal = [];

    $('.QTY').each(function (index, value) {
        quantityTotal.push(parseFloat($(this).val()));
    });
    var total = 0;
    arr = quantityTotal.filter(function (e) { return e });
    // console.log("Filter Table " + arr);
    for (var i in arr) {
        total += quantityTotal[i];
        // var total = arr.reduce((a, b) => a + b);

    }
    // console.log("Total "+total);
    // $("#total").html(total);
    console.log("Total " + total);

    $("#quantityCount").html("Quantity = " + total);
    $("#quantityCounttxt").val(total.toFixed(2));

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
    console.log("Filter Table " + arr);
    for (var i in arr) {
        total += discountTotal[i];

    }
    console.log("Filter Total " + total);

    $("#totalDisc").html("Discount = " + total.toFixed(2));

}

function calculateTotal(i) {

    finalTotal = [];

    $('.GROSS').each(function (index, value) {
        finalTotal.push(parseFloat($(this).val()));
    });
    var total = 0;
    arr = finalTotal.filter(function (e) { return e });

    for (var i in arr) {
        total += finalTotal[i];
    }

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

    $("#totalCount").html("Total = " + total.toFixed(2));

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
        $("#discountTxt" + num).val("00");
        $("#discountTxtTot" + num).val(num2);

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
    function fillValue() {

        var disc = num2;
        var a = parseFloat((disc * num1) / 100);

        total = parseFloat(num2 - a);
        txtTotal = total;
        $("#totalDisc").html("Disc = " + a);
        $("#netAmt").html("Net = " + total);
        $("#netAmountTxt").val(Math.round(total));
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
        $("#tradediscTxt" + num).val("00");
        $("#tradediscTxtTot" + num).val(numb1);

    }

    function fillValue() {

        var a = (numb1 * num2) / 100;

        var tot = numb1 - a;
        $("#netAmt").html("Net = " + tot);
        $("#netAmountTxt").val(Math.round(tot));
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
        $(".totalGST").html("GST = " + (withGST / 2));
        $("#gstTxt" + num).val(withGST / 2);

        $("#netAmt").html("Net = " + finalGSTAmt);
        $("#netAmountTxt").val(Math.round(finalGSTAmt));

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

            $("#gstTxt" + num).val(answithGST);

            $(".totalGST").html("GST = " + answithGST);
            $("#netAmt").html("Net = " + finalGSTAmt);
            $("#netAmountTxt").val(Math.round(finalGSTAmt));

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
            $("#totalGSTtxt").val(totalGSTAmt);
            $("#totalIGSTtxt").val(00);

            $("#demonetAMT").val(totalGSTAmt + tot);
            // $("#GST" + num).val("totalGSTAmt" + "tot");
            $("#GSTAA" + num).val(taxableCount + (answithGST * 2));


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

            var gstRowCal = (withGST + taxableCount);
            $("#igstROW" + num).val(gstRowCal);

            var ansfinalGSTAmt = (totalIGSTAmount + totalTaxableAmount);
            // alert(ansfinalGSTAmt)
            $("#netAmt").html("Net = " + ansfinalGSTAmt);

            $("#netAmountTxt").val(Math.round(ansfinalGSTAmt));

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

        $("#gstTxt" + num).val(withGST / 2);

        $(".totalGST").html("GST = " + (withGST / 2));
        $("#netAmt").html("Net = " + finalGSTAmt);
        $("#netAmountTxt").val(Math.round(finalGSTAmt));

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
            $("#gstTxt" + num).val(answithGST);

            $(".totalGST").html("GST = " + answithGST);
            $("#netAmt").html("Net = " + finalGSTAmt);
            $("#netAmountTxt").val(Math.round(finalGSTAmt));

            $("#demonetAMT").val(finalGSTAmt);


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
            $("#GSTAA" + num).val(taxableCount + (answithGST * 2));


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

            var gstRowCal = (withGST + taxableCount);
            $("#igstROW" + num).val(gstRowCal);

            var ansfinalGSTAmt = (totalIGSTAmount + totalTaxableAmount);
            // alert(ansfinalGSTAmt)
            $("#netAmt").html("Net = " + ansfinalGSTAmt);

            $("#netAmountTxt").val(Math.round(ansfinalGSTAmt));

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
        $("#netAmountTxt").val(Math.round(taxableCount));

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
            $("#GSTAA" + num).val(taxableCount + (answithGST * 2));


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

            // console.log(totalTaxableAmount);
            // console.log(withGST);

            var gstRowCal = (withGST + taxableCount);
            $("#igstROW" + num).val(gstRowCal);


            var ansfinalGSTAmt = (totalIGSTAmount + totalTaxableAmount);
            // alert(ansfinalGSTAmt)

            $("#netAmt").html("Net = " + ansfinalGSTAmt);

            $("#netAmountTxt").val(Math.round(ansfinalGSTAmt));

            $("#demonetAMT").val(ansfinalGSTAmt);

            // End IGST Array
        }
    }

}

function resultOther(v, i) {
    var num = i;
    // var otherAmt = pars($("#OTHER" + num).val());
    (v.value === "") ? emptyValue() : fillValue();


    function emptyValue() {
        var gstAmt = parseFloat($("#GSTAA" + num).val());
        var igstAmt = parseFloat($("#igstROW" + num).val());

        if (gstAmt !== 0) {
            $("#OTHER" + num).val("00");
            $("#OTHER1" + num).val(gstAmt);
        }
        else {
            $("#OTHER" + num).val("00");
            $("#OTHER1" + num).val(igstAmt);
        }
    }

    function fillValue() {

        var sym = v.value.charAt(0);

        var txt = v.value;
        var otherAmtAns = txt.match(/\d/g);
        otherAmtAns = parseInt(otherAmtAns.join(""));

        if (sym == "-") {
            var gstAmt = parseFloat($("#GSTAA" + num).val());
            var igstAmt = parseFloat($("#igstROW" + num).val());

            if (gstAmt !== 0) {
                var a = gstAmt - otherAmtAns;
                $("#OTHER1" + num).val(a);
            }
            else {
                var a = igstAmt - otherAmtAns;
                $("#OTHER1" + num).val(a);
            }
        }
        else if (sym == "+") {
            var gstAmt = parseFloat($("#GSTAA" + num).val());
            var igstAmt = parseFloat($("#igstROW" + num).val());

            if (gstAmt !== 0) {

                var a = otherAmtAns + gstAmt;
                $("#OTHER1" + num).val(a);
            }
            else {
                var a = otherAmtAns + igstAmt;
                $("#OTHER1" + num).val(a);
            }
        }
        else if (sym != "+" && sym != "-") {
            var gstAmt = parseFloat($("#GSTAA" + num).val());
            var igstAmt = parseFloat($("#igstROW" + num).val());

            if (gstAmt !== 0) {
                var a = otherAmtAns + gstAmt;
                $("#OTHER1" + num).val(a);
            }
            else {
                var a = otherAmtAns + igstAmt;
                $("#OTHER1" + num).val(a);
            }
        }


    }
}

function resultTCS(v, i) {

    var num = i;

    var TCS = parseFloat($("#TCS" + num).val());

    (v.value === "") ? emptyValue() : fillValue();

    function emptyValue() {
        var other1 = parseFloat($("#OTHER1" + num).val());

        $("#TCS" + num).val("00");
        $("#TCS1" + num).val(other1);

        TCSTotal = [];

        $('.TCSTOTAL').each(function (index, value) {
            TCSTotal.push(parseFloat($(this).val()));
        });
        var total = 0;
        arr = TCSTotal.filter(function (e) { return e });
        //  console.log("Filter Table "+arr);
        for (var i in arr) {
            total += TCSTotal[i];
        }

        // Final amount Calculation

        $("#totalTCS").html("TCS = " + total.toFixed(2));
        $("#totalTCStxt").val(total);

        var GST = parseFloat($("#totalGSTtxt").val());
        var IGST = parseFloat($("#totalIGSTtxt").val());

        if (GST !== 0) {

            var ansGst = (total);
            var addRound = ansGst; 
            ansGst = Math.round(ansGst);
            addRound = Math.abs(addRound - ansGst);
            $("#demonetAMT").val(ansGst);
            $("#netAmt").html("Net Amount = " + ansGst);
            $("#addRoundTxt1"),val(addRound.toFixed(2));
            $("#netAmountTxt1").val(ansGst);

        }
        else {

            var ansGst = (total);
            var addRound = ansGst; 
            ansGst = Math.round(ansGst);
            addRound = Math.abs(addRound - ansGst);
            $("#demonetAMT").val(ansGst);
            $("#netAmt").html("Net Amount = " + ansGst);
            $("#addRoundTxt1"),val(addRound.toFixed(2));
            $("#netAmountTxt1").val(ansGst);
        }
        $("#hamaliTxt").val(00);
        $("#cashDiscTxt").val(00);

    }

    function fillValue() {
        var other1 = parseFloat($("#OTHER1" + num).val());

        var per = (other1 * TCS / 100);
        var ans = per + other1;
        $("#TCS1" + num).val(ans);

        TCSTotal = [];

        $('.TCSTOTAL').each(function (index, value) {
            TCSTotal.push(parseFloat($(this).val()));
        });
        var total = 0;
        arr = TCSTotal.filter(function (e) { return e });
        //  console.log("Filter Table "+arr);
        for (var i in arr) {
            total += TCSTotal[i];
        }

        $("#totalTCS").html("TCS = " + total.toFixed(2));
        $("#totalTCStxt").val(total);


        var GST = parseFloat($("#totalGSTtxt").val());
        var IGST = parseFloat($("#totalIGSTtxt").val());

        if (GST !== 0) {

            var ansGst = Math.round((total));

            $("#demonetAMT").val(ansGst);
            $("#netAmt").html("Net Amount = " + ansGst);
            $("#netAmountTxt").val(ansGst);

        }
        else {

            var ansGst = Math.round(total);

            $("#demonetAMT").val(ansGst);
            $("#netAmt").html("Net Amount = " + ansGst);
            $("#netAmountTxt").val(ansGst);
        }
        $("#hamaliTxt").val(00);
        $("#cashDiscTxt").val(00);

    }


}

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
            $("#netAmountTxt1").val(ans);
            $("#netAmt").html("Net = " + ans);

        }
        else {
            var ans = (TCS + IGST);
            var addRound = ans;
            ans = Math.round(ans);
            addRound = Math.abs(addRound - ans);
            // $("#demonetAMT").val(ans);
            $("#demonetAMT").val(ans);
            $("#addRoundTxt1").val(addRound.toFixed(2));
            $("#netAmountTxt1").val(ans);
            $("#netAmt").html("Net = " + ans);

        }
        $("#hamaliTxt").val(00);


    }

    function fillValue() {

        if (GST !== 0) {

            var netAmtTotal = (TCS + GST);
            var hamaliTotal = (netAmtTotal + Hamali);
            // var addRound = netAmtTotal;
            hamaliTotal = Math.round(hamaliTotal);
            // addRound = addRound - hamaliTotal;
            $("#demonetAMT").val(hamaliTotal);
            // $("#netAmountTxt").val(hamaliTotal);
            // $("#addRoundTxt1").val(addRound.toFixed(2));
            $("#netAmountTxt1").val(hamaliTotal);
            $("#netAmt").html("Net = " + hamaliTotal);

        }
        else {

            var netAmtTotal = (TCS + IGST);
            var hamaliTotal = (netAmtTotal + Hamali);
            // var addRound = netAmtTotal;
            hamaliTotal = Math.round(hamaliTotal);
            // addRound = addRound - hamaliTotal;

            $("#demonetAMT").val(hamaliTotal);
            // $("#netAmountTxt").val(hamaliTotal);
            // $("#addRoundTxt1").val(addRound.toFixed(2));
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
            $("#netAmt").html("Net = " + ans);

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
            $("#netAmt").html("Net = " + ans);

        }
        $("#cashDiscTxt").val(00);

    }

    function fillValue() {


        var netAmtTotal = parseFloat($("#demonetAMT").val());


        var cashDiscTotal = (netAmtTotal - Discount);

        // var cashDiscTotal = netAmtTotal - a;
        $("#demonetAMT").val(cashDiscTotal.toFixed(2));
        // $("#netAmountTxt").val(cashDiscTotal);
        $("#netAmountTxt1").val(cashDiscTotal.toFixed(2));
        $("#netAmt").html("Net = " + cashDiscTotal.toFixed(2));


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

    $("#gstTxt" + num).val("");
    $("#SGST" + num).val("");
    $("#IGST" + num).val("");
    $("#IGSTTxt" + num).val("");
    $("#igstROW" + num).val("");
    $("#OTHER" + num).val("");
    $("#OTHER1" + num).val("");
    $("#TCS" + num).val("");
    $("#TCS1" + num).val("");
    $("#GSTAA" + num).val("");
    $("#GST" + num).val("");


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

    $("#quantityCount").html("Quantity = " + totalQTY.toFixed(2));
    $("#quantityCounttxt").val(totalQTY.toFixed(2));

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
    $("#totalDisc").html("Discount = " + totalDISCOUNT.toFixed(2));

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
    $("#totalCount").html("Total = " + totalfinalTotal.toFixed(2));

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
    $("#totalTrradeDisc").html("Trade Disc = " + totalTRADEDISC.toFixed(2));

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
    $("#totalTaxable").html("Taxable = " + tottaxableAmt.toFixed(2));
    $("#totalTaxabletxt").val(tottaxableAmt.toFixed(2));

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

    $(".totalGST").html("GST = " + totalGST1.toFixed(2));
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

    $("#totalIGST").html("IGST = " + totalIGST.toFixed(2));
    
    $("#totalIGSTtxt").val(totalIGST.toFixed(2));


    // --------------------

    TCSTotal = [];

    $('.TCSTOTAL').each(function (index, value) {
        TCSTotal.push(parseFloat($(this).val()));
    });
    var total = 0;
    arr = TCSTotal.filter(function (e) { return e });
    //  console.log("Filter Table "+arr);
    for (var i in arr) {
        total += TCSTotal[i];
    }

    // Final amount Calculation

    $("#totalTCS").html("TCS = " + total);
    $("#totalTCStxt").val(total.toFixed(2));

}

// Fetch Item with Price ------------------------
function itemName(i) {

    var nums = i;
    var val = $('#item' + nums).val();
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
    // alert(numb);
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
        $("#IGSTTTotal" + nums).val("00");
        $("#igstROW" + nums).val("00");
    }
    else if (gstparty == "OutState") {
        $("#CGST" + nums).val("00");
        $("#SGST" + nums).val("00");
        $("#gstTxt" + nums).val("00");
        $("#GSTAA" + nums).val("00");
        $("#IGST" + nums).val(numb);
    }
    else if (gstparty == "") {
        // alert("Select Customer");
        $("#CGST" + nums).val(totalTax);
        $("#SGST" + nums).val(totalTax);
        $("#IGST" + nums).val("00");
        $("#IGSTTxt" + nums).val("00");
        $("#IGSTTTotal" + nums).val("00");
        $("#igstROW" + nums).val("00");

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

        // ------------ 



