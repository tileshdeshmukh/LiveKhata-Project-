$( document ).ready(function() {
     // Date & Due Date

        
     var today = new Date();
     var dd = today.getDate();
     
     var mm = today.getMonth()+1; 
     var yyyy = today.getFullYear();
     
     today = dd+'-'+mm+'-'+yyyy;
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

    function calculateQuantity(i){
        quantityTotal = [];

        $('.QTY').each(function(index, value){
            quantityTotal.push(parseFloat($(this).val()));
        });
        var total=0;
        arr = quantityTotal.filter(function(e){return e});
        console.log("Filter Table "+arr);
            for(var i in arr){
                total+= quantityTotal[i];
            }
            // console.log("Total "+total);
            // $("#total").html(total);
            console.log("Total "+total);

     $("#quantityCount").html("Quantity = " + total);   
     $("#quantityCounttxt").val(total);

}
  
    function finalResultGST(i){
                       
    var sym1 = $("#totalGstFetch").text();
    
    var txt = sym1;
    var nu1 = txt.match(/\d/g);
    nu1 = parseInt(nu1.join(""));
    gstCount = numb - nu1;
    alert(gstCount);
  
}
   
    function calculateDisc(i){
     
     discountTotal = [];

     $('.DISCOUNT').each(function(index, value){
         discountTotal.push(parseFloat($(this).val()));
     });
     var total=0;
     arr = discountTotal.filter(function(e){return e});
    //  console.log("Filter Table "+arr);
         for(var i in arr){
             total+= discountTotal[i];
         }
        
         $("#totalDisc").html("Discount = "+ total); 
  
}
      
    function calculateTotal(i){
                
        finalTotal = [];

        $('.GROSS').each(function(index, value){
            finalTotal.push(parseFloat($(this).val()));
        });
        var total=0;
        arr = finalTotal.filter(function(e){return e});
        
            for(var i in arr){
                total+= finalTotal[i];
            }
           
        $("#totalCount").html("Total = " + total);
}
 
  function resultGross(i){
        
        var nums=i;
        var num1 =  parseInt($("#Quantity"+nums).val());
        var num2 = parseFloat($("#MRP"+nums).val());
                
        var res= num1 * num2;
        $("#Gross"+nums).val(res);
                               
    }

    function calTotal(i){
        finalTotal = [];

        $('.GROSS').each(function(index, value){
            finalTotal.push(parseFloat($(this).val()));
        });
        var total=0;
        arr = finalTotal.filter(function(e){return e});
        console.log("Filter Table "+arr);
            for(var i in arr){
                total+= finalTotal[i];
            }
           
            console.log("Total "+total);

        $("#totalCount").html("Total = " + total);
        
    }

    function resultMrp(i){
                
        var num=i;

        var num1 =  parseInt($("#Quantity"+num).val());
        var num2 = parseFloat($("#Gross"+num).val());

        var res= num2 / num1;
        $("#MRP"+num).val(res);      
                              
    };
    function resultQuantity(i){
        
        var num=i;

        var num1 =  parseInt($("#Quantity"+num).val());
        var num2 = parseFloat($("#MRP"+num).val());

        var res= num1 * num2;
        $("#Gross"+num).val(res); 
               
    };

    function resultDiscount(v,i){
        var num=i;
        var num1 =  parseInt($("#discount"+num).val());        
        var num2 = parseFloat($("#Gross"+num).val());

        (v.value === "") ? emptyValue() : fillValue();

        function emptyValue(){
            $("#discount"+num).val("00");

            // $("#totalDisc").html(num2);
            $("#netAmt").html("Net = " + num2);
            $("#netAmountTxt").val(num2);
            $("#discountTxt"+num).val(00);
            $("#discountTxtTot"+num).val(num2);

            discountTotal = [];

            $('.DISCOUNT').each(function(index, value){
                discountTotal.push(parseFloat($(this).val()));
            });
            var total=0;
            arr = discountTotal.filter(function(e){return e});
           //  console.log("Filter Table "+arr);
                for(var i in arr){
                    total+= discountTotal[i];
                }
               
                $("#totalDisc").html("Discount = "+ total); 
            

        }
        function fillValue(){

            var disc = num2;
            var a= parseFloat((disc*num1)/100);
            
            total = parseFloat(num2-a);
            txtTotal = total;
            $("#totalDisc").html("Disc = " + a);
            $("#netAmt").html("Net = " + total);
            $("#netAmountTxt").val(total);
            $("#discountTxtTot"+num).val(txtTotal);
            $("#discountTxt"+num).val(a);

        }
    }

    function resultTradeDiscount(v,i){
        
        var num=i;

        var numb1 = parseFloat($("#discountTxtTot"+num).val());    
        var num2 = parseFloat($("#tradedisc"+num).val());

        (v.value === "") ? emptyValue() : fillValue();

        function emptyValue(){
            $("#tradedisc"+num).val("00");
            $("#tradediscTxt"+num).val(0);
            $("#tradediscTxtTot"+num).val(numb1);

        }

        function fillValue(){
            
            var a=(numb1*num2)/100;

            var tot = numb1 - a;
            $("#netAmt").html("Net = " + tot);
            $("#netAmountTxt").val(tot);
            $("#totalTrradeDisc").html("Trade Discount "+a);
            $("#tradediscTxt"+num).val(a);
            $("#tradediscTxtTot"+num).val(tot);

        }

    }

    function calculateTradeDisc(){
        tradeDisTotal = [];

        $('.TRADEDISC').each(function(index, value){
            tradeDisTotal.push(parseFloat($(this).val()));
        });
        var total=0;
        arr = tradeDisTotal.filter(function(e){return e});
        // console.log("Filter Table "+arr);
            for(var i in arr){
                total+= tradeDisTotal[i];
            }
        $("#totalTrradeDisc").html("Trade Disc = "+ total);
    }

    
    // Calculate (Taxable,CGST,SGST,IGST) With net amount 
    function resultAddless(v,i){

        var num=i;
        
        (v.value === "") ? $("#addlesstotal"+num).val("00") : "";
        var num1 =  $("#addlesstotal"+num).val();
        
        var numb =  parseFloat($("#tradediscTxtTot"+num).val());

        var sym = num1.charAt(0);
            
        if(sym == "-"){            
                
                    var sym1 = num1;
                    var txt = sym1;
                    var numb1 = txt.match(/\d/g);
                    numb1 = parseInt(numb1.join(""));                    
                    taxableCount = numb - numb1;
                    // alert(taxableCount);
                $("#taxable"+num).val(taxableCount);
                $("#totalTaxable").html("Taxable = " + taxableCount);

                $("#netAmt").html("Net = " + taxableCount);
            $("#netAmountTxt").val(taxableCount);

                $("#totalAddLess").html(num1);

                var num11 =  $("#SGST"+num).val();
                var GST = num11 * 2;        
                // var tt = taxableCount;
                var withGST = (taxableCount * GST) / 100;

                var finalGSTAmt = parseFloat(withGST + taxableCount);     
                $(".totalGST").html("GST = " + (withGST / 2));
                $("#gstTxt"+num).val(withGST / 2);

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

            $('.TAXABLE').each(function(index, value){
                taxableAmt.push(parseFloat($(this).val()));
            });
            var tot=0;
            arr = taxableAmt.filter(function(e){return e});
            // console.log("Filter Table "+arr);
                for(var i in arr){
                    tot+= taxableAmt[i];
                }
           
            $("#totalTaxable").html("Taxable = "+ tot); 
            $("#totalTaxabletxt").val(tot); 

            // end add taxable array
            var SGST =  $("#SGST"+num).val();
            var IGST =  $("#IGST"+num).val();

            if(SGST > 0){
                var GST = SGST * 2;        
                // var tt = taxableCount;
                var withGST = (taxableCount * GST) / 100 ;
                var finalGSTAmt = parseFloat(withGST + taxableCount);
                var answithGST = withGST / 2 ;

                $("#gstTxt"+num).val(answithGST);

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

                $('.GSTTOTAL').each(function(index, value){
                    finalGSTArray.push(parseFloat($(this).val()));
                });
                var totalGST=0;
                arr = finalGSTArray.filter(function(e){return e});
                // console.log("Filter Table "+arr);
                    for(var i in arr){
                        totalGST+= finalGSTArray[i];
                    }

             
                $(".totalGST").html("GST = " + totalGST);
                $("#totalGSTtxt").val(totalGST * 2);
                // End GST Array
            }
            else{

                var withGST = (taxableCount * IGST) / 100 ;                
                $("#totalIGST").html("IGST = " + withGST);            
                $("#IGSTTxt"+num).val(withGST);

                IGSTArray = [];

                $('.IGSTTOTAL').each(function(index, value){
                    IGSTArray.push(parseFloat($(this).val()));
                });
                var totalGST=0;
                arr = IGSTArray.filter(function(e){return e});
                
                    for(var i in arr){
                        totalGST+= IGSTArray[i];
                    }

                $("#totalIGST").html("IGST = " + totalGST);
                $("#totalGSTtxt").val(totalGST);

                var totalTaxableAmount = parseFloat($("#totalTaxabletxt").val());
                
                var ansfinalGSTAmt = (totalGST + totalTaxableAmount);
                alert(ansfinalGSTAmt)                
                $("#netAmt").html("Net = " + ansfinalGSTAmt);

                $("#netAmountTxt").val(ansfinalGSTAmt);

                $("#demonetAMT").val(ansfinalGSTAmt);

                // End IGST Array
            }
        }
        else if(sym == "+"){            
                    var sym1 = num1;                    
                    var txt = sym1;
                    var numb1 = txt.match(/\d/g);
                    numb1 = parseInt(numb1.join(""));
                    taxableCount = numb + numb1;
                    // alert(taxableCount);
                $("#taxable"+num).val(taxableCount);
                $("#totalTaxable").html("Taxable = " + taxableCount);

                $("#netAmt").html("Net = " + taxableCount);
            $("#netAmountTxt").val(taxableCount);

                $("#totalAddLess").html(num1);

                var num11 =  $("#SGST"+num).val();
                var GST = num11 * 2;        
                // var tt = taxableCount;
                var withGST = (taxableCount * GST) / 100;
                var finalGSTAmt = parseFloat(withGST + taxableCount);

                $("#gstTxt"+num).val(withGST / 2);

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

            $('.TAXABLE').each(function(index, value){
                taxableAmt.push(parseFloat($(this).val()));
            });
            var tot=0;
            arr = taxableAmt.filter(function(e){return e});
            // console.log("Filter Table "+arr);
                for(var i in arr){
                    tot+= taxableAmt[i];
                }
     
            $("#totalTaxable").html("Taxable = "+ tot); 
            $("#totalTaxabletxt").val(tot); 


            // end add taxable array
            var SGST =  $("#SGST"+num).val();
            var IGST =  $("#IGST"+num).val();

            if(SGST > 0){
                var GST = SGST * 2;
                // var tt = taxableCount;
                var withGST = (taxableCount * GST) / 100 ;
                var finalGSTAmt = parseFloat(withGST + taxableCount);     
                var answithGST = withGST / 2 ;
                $("#gstTxt"+num).val(answithGST);

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

                $('.GSTTOTAL').each(function(index, value){
                    finalGSTArray.push(parseFloat($(this).val()));
                });
                var totalGST=0;
                arr = finalGSTArray.filter(function(e){return e});
                // console.log("Filter Table "+arr);
                    for(var i in arr){
                        totalGST+= finalGSTArray[i];
                    }


                $(".totalGST").html("GST = " + totalGST);
                $("#totalGSTtxt").val(totalGST * 2);

                // End GST Array
            }
            else{
            
                var withGST = (taxableCount * IGST) / 100 ;                
                $("#totalIGST").html("IGST = " + withGST);            
                $("#IGSTTxt"+num).val(withGST);

                IGSTArray = [];

                $('.IGSTTOTAL').each(function(index, value){
                    IGSTArray.push(parseFloat($(this).val()));
                });
                var totalGST=0;
                arr = IGSTArray.filter(function(e){return e});
                
                    for(var i in arr){
                        totalGST+= IGSTArray[i];
                    }

                $("#totalIGST").html("IGST = " + totalGST);
                $("#totalGSTtxt").val(totalGST);

                var totalTaxableAmount = parseFloat($("#totalTaxabletxt").val());
                
                var ansfinalGSTAmt = (totalGST + totalTaxableAmount);
                alert(ansfinalGSTAmt)                
                $("#netAmt").html("Net = " + ansfinalGSTAmt);

                $("#netAmountTxt").val(ansfinalGSTAmt);

                $("#demonetAMT").val(ansfinalGSTAmt);
                // End IGST Array
            }           
        }
        else if(sym != "+" && sym != "-"){

            // num1 is addless textbox value
                var sym1 = num1;                   
                var txt = sym1;
                var numb1 = txt.match(/\d/g);
                numb1 = parseInt(numb1.join(""));
                
                taxableCount = parseFloat(numb + numb1);
                
                // alert(numb1);
            $("#taxable"+num).val(taxableCount);
            $("#totalTaxable").html("Taxable = " + taxableCount);

            $("#netAmt").html("Net = " + taxableCount);
            $("#netAmountTxt").val(taxableCount);

            $("#totalAddLess").html(num1);

            taxableAmt = [];

            $('.TAXABLE').each(function(index, value){
                taxableAmt.push(parseFloat($(this).val()));
            });
            var tot=0;
            arr = taxableAmt.filter(function(e){return e});
            // console.log("Filter Table "+arr);
                for(var i in arr){
                    tot+= taxableAmt[i];
                }
                      
            $("#totalTaxable").html("Taxable = "+ tot);
            $("#totalTaxabletxt").val(tot); 

            // end add taxable array
            var SGST =  $("#SGST"+num).val();
            var IGST =  $("#IGST"+num).val();

            if(SGST > 0){
                var GST = SGST * 2;
                // var tt = taxableCount;
                var withGST = (taxableCount * GST) / 100 ;
                var finalGSTAmt = parseFloat(withGST + taxableCount);
                var answithGST = withGST / 2 ;
                $("#gstTxt"+num).val(answithGST);

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

                $('.GSTTOTAL').each(function(index, value){
                    finalGSTArray.push(parseFloat($(this).val()));
                });
                var totalGST=0;
                arr = finalGSTArray.filter(function(e){return e});
                // console.log("Filter Table "+arr);
                    for(var i in arr){
                        totalGST+= finalGSTArray[i];
                    }


                $(".totalGST").html("GST = " + totalGST);
                $("#totalGSTtxt").val(totalGST * 2);

                // End GST Array
            }
            else{
                
            

                var withGST = (taxableCount * IGST) / 100 ;                
                $("#totalIGST").html("IGST = " + withGST);            
                $("#IGSTTxt"+num).val(withGST);

                IGSTArray = [];

                $('.IGSTTOTAL').each(function(index, value){
                    IGSTArray.push(parseFloat($(this).val()));
                });
                var totalGST=0;
                arr = IGSTArray.filter(function(e){return e});
                
                    for(var i in arr){
                        totalGST+= IGSTArray[i];
                    }

                $("#totalIGST").html("IGST = " + totalGST);
                $("#totalGSTtxt").val(totalGST);

                var totalTaxableAmount = parseFloat($("#totalTaxabletxt").val());
                
                var ansfinalGSTAmt = (totalGST + totalTaxableAmount);
                alert(ansfinalGSTAmt)                
                $("#netAmt").html("Net = " + ansfinalGSTAmt);

                $("#netAmountTxt").val(ansfinalGSTAmt);

                $("#demonetAMT").val(ansfinalGSTAmt);
            }


        }

    }

    // Fetch Item with Price ------------------------      
    function itemName(i) {

        var nums=i;
        var val = $('#item'+nums).val()
        var itemId = $('#item option').filter(function(){
            return this.value == val;
        }).data('id');

        var tax = $('#item option').filter(function() {
            return this.value == val;
        }).data('tax');

        var xyz = $('#item option').filter(function() {
            return this.value == val;
        }).data('rate');

        
        var rate = xyz;        
        var txt = tax;
        var numb = txt.match(/\d/g);
        numb = numb.join("");
        
        var gstparty = $('#gstpartytype').val();
       
        var totalTax = numb/2;   
        // alert(totalTax);     
        $("#MRP"+nums).val(rate);             
        $("#GST"+nums).val(tax);             
        $("#itemId"+nums).val(itemId);             

        if(gstparty == "InState"){
            $("#CGST"+nums).val(totalTax);
            $("#SGST"+nums).val(totalTax);
            $("#IGST"+nums).val("00");   
            $("#IGSTTxt"+nums).val("00");   
        }
        else if(gstparty == "OutState"){
            $("#CGST"+nums).val("00");
            $("#SGST"+nums).val("00");
            $("#gstTxt"+nums).val("00");
            $("#IGST"+nums).val(9);  
        }
        else if(gstparty == ""){
            // alert("Select Customer");
            $("#CGST"+nums).val(totalTax);
            $("#SGST"+nums).val(totalTax);
            $("#IGST"+nums).val("00");
            $("#IGSTTxt"+nums).val("00");   

        }                         
    };

    // Fetch Praty A/C with Mobile No ------------------------ 
     
    function serviceBill_party() {
        var val = $('.partyAccount').val()
        var xyz = $('#partyAccount option').filter(function() {
            return this.value == val;
        }).data('id');

        var gst = $('#partyAccount option').filter(function() {
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
        var obj = {"mobile":mobile,"Date":n,"Amount":amount,"Cmp_Name":cName,"Voucher_No":Voucher_no};
        var SMS = JSON.stringify(obj);
       
        window.location.href = '/servicebill-sms/'+SMS ;
    }
           
    // Due Date
    function resultDueDate(){

        var fetchDate =  parseInt($("#dueDate").val());

            
        var someDate = new Date();        
        var numberofDaystoAdd = fetchDate;

        someDate.setDate(someDate.getDate()+numberofDaystoAdd);

        var dd = someDate.getDate();
        var mm = someDate.getMonth()+1; 
        var yyyy = someDate.getFullYear();
        

        var today1 = dd+'/'+mm+'/'+yyyy;
        var gotDate = today1;

        $("#dueDate").val(gotDate);
        

        };

        // ------------ 


     
