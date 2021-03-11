$(document).ready(function(){
    // Countries
    var country_arr = new Array("Select State","Andaman and Nicobar Islands "
    ,"Andhra Pradesh","Andhra Pradesh (New)",
    "Arunachal Pradesh","Assam","Bihar","Chandigarh","Chattisgarh","Ladakh",
    "Dadar and Nagar Haveli and Daman and Diu","Delhi","Goa","Gujarat"
    ,"Haryana","Himachal Pradesh ","Jammu and Kashmir","Jharkhand",
    "Karnataka","Kerala","Lakshadweep Islands","Madhya Pradesh",
    "Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland",
    "Odisha","Pondicherry","Punjab","Rajasthan","Sikkim",
    "Tamil Nadu","Telangana","Tripura",
    "Uttar Pradesh","Uttarakhand","West Bengal");

    $.each(country_arr, function (i, item) {
        $('#country').append($('<option>', {
            value: i,
            text : item,
        }, '</option>' ));
        
    });

    // States
    var s_a = new Array();
    s_a[0]="State Code";
    s_a[1]="35";
    s_a[2]="28";
    s_a[3]="37";
    s_a[4]="12";
    s_a[5]="18";
    s_a[6]="10";
    s_a[7]="04";
    s_a[8]="22";
    s_a[9]="38";
    s_a[10]="26";
    s_a[11]="07";
    s_a[12]="30";
    s_a[13]="24";
    s_a[14]="06";
    s_a[15]="02";
    s_a[16]="01";
    s_a[17]="20";
    s_a[18]="29";
    s_a[19]="32";
    s_a[20]="31";
    s_a[21]="23";
    s_a[22]="27";
    s_a[23]="14";
    s_a[24]="17";
    s_a[25]="15";
    s_a[26]="13";
    s_a[27]="21";
    s_a[28]="34";
    s_a[29]="3";
    s_a[30]="8";
    s_a[31]="11";
    s_a[32]="33";
    s_a[33]="36";
    s_a[34]="16";
    s_a[35]="9";
    s_a[36]="5";
    s_a[37]="19";
    
   

    // Cities
    var c_a = new Array();
    // c_a['QUEENSLAND']="BRISBANE";
    // c_a['VICTORIA']="MELBOURNE";
    // c_a['ANDHRAPRADESH']="HYDERABAD";
    // c_a['KARNATAKA']="BANGLORE";
    // c_a['TAMILNADU']="CHENNAI";
    // c_a['DELHI']="DELHI";
    // c_a['GOA']="GOA";
    // c_a['W-BENGAL']="KOLKATA";
    // c_a['GUJARAT']="AHMEDABAD1|AHMEDABAD2|AHMEDABAD3|BARODA|BHAVNAGAR|MEHSANA|RAJKOT|SURAT|UNA";
    // c_a['MADHYAPRADESH']="INDORE";
    // c_a['MAHARASHTRA']="MUMBAI|PUNE";
    // c_a['RAJASTHAN']="ABU";
    // c_a['AUCKLAND']="AUCKLAND";
    // c_a['NEWJERSEY']="EDISON";
    // c_a['ILLINOIS']="CHICAGO";
    // c_a['MAURITIUS']="MAURITIUS";
    // c_a['DUBAI']="DUBAI";


    $('#country').change(function(){
        var c = $(this).val();
        
        var state_arr = s_a[c].split("|");
        $('#state').empty();
        $('#city').empty();
        if(c==0){
            $('#state').append($('<option>', {
                value: country_arr,
                text: 'Select State',
            }, '</option>'));
        }else {
            $.each(state_arr, function (i, item_state) {
                $('#state').append($('<option>', {
                    value: item_state,
                    text: item_state,
                }, '</option>'));
            });
        }
        $('#city').append($('<option>', {
            value: '0',
            text: 'Select City',
        }, '</option>'));
    });

    $('#state').change(function(){
        var s = $(this).val();
        if(s=='Select State'){
            $('#city').empty();
            $('#city').append($('<option>', {
                value: s_a,
                text: 'Select City',
            }, '</option>'));
        }
        var city_arr = c_a[s].split("|");
        $('#city').empty();

        $.each(city_arr, function (j, item_city) {
            $('#city').append($('<option>', {
                value: item_city,
                text: item_city,
            }, '</option>'));
        });


    });
});
