$(document).on("ready", onReady);

function onReady() {

    $("#addemployment").on("click", addEmployment);
    $("#addreference").on("click", addReference);
    $("#adddependent").on("click", addDependent);
    $("#addcert").on("click", addCert);
    $(".emp_close").on("click", empCloseCurrentHistory);
    
    $(".radio-employeetype").on("change",changeEmployeeType);

    loadDatePicker();
    
    loadYearDropdown();
    
    $('form').validator();

    

    H5F.setup(document.getElementsByTagName("form")[0], {
    onSubmit: function (event) {
      
    },
    onInvalid: function (invalidInputElement) {
        
       
        
    }
});

}

function addEmployment() {

if ($(".newemployment .cont").length == 2){
    return;
}
    var dup = $(".employment .cont").clone(true);
    
    dup.find('input[type=text],textarea').val('');
dup.find('input[type=checkbox]').removeAttr('checked');
dup.find('input[type=radio]').removeAttr('checked');

    

    dup.find(".showdatepicker").datepicker("destroy").val("").removeAttr("id");

    dup.find("h4 span").text($(".newemployment .cont").length + 2);

    dup.appendTo(".newemployment");
        
    if ($(".newemployment .cont").length == 2) {

        $(this).hide();

    }

    loadDatePicker();
    
    changeEmployeeType();

    event.preventDefault();

}

function addReference(event) {


    var dup = $(".references .cont").clone(true);



    dup.find("h4 span").text($(".newreferences .cont").length + 2);

    dup.appendTo(".newreferences");

    if ($(".newreferences .cont").length == 2) {

        this.remove();


    }

    event.preventDefault();
}

function addDependent() {


    var dup = $(".dependents .cont").clone(true);
    dup.find("h4 span").text($(".newdependents .cont").length + 2);

    dup.appendTo(".newdependents");


    event.preventDefault();

}


function addCert() {



    var dup = $(".cert").clone(true);

    dup.removeClass("cert");
    dup.find("button").remove();

    dup.find(".file-input-wrapper").next().text("");
    dup.find("[type=file]").replaceWith(dup.find("[type=file]").val('').clone(true));


    dup.find("th").html("");


    dup.children().last().append();

    $(".cert").closest("tbody").append(dup);
    $(".cert").closest("tbody").children().last().children().last().append($(".cert").closest("tbody").find("button"));


    event.preventDefault();
}


function loadDatePicker() {

    $(".showdatepicker").datepicker({
        changeYear: true,
        changeMonth: true,
        yearRange: "-100:+0",
        dateFormat: 'dd-mm-yy',
        onSelect: selectedDate

    });

}

function selectedDate(date) {

    switch ($(this).attr("name").trim().toLowerCase()) {

        case "passfrom":
            var cDate = $(this).datepicker('getDate');
            cDate.setMonth(cDate.getMonth() + 1);
            $("[name=passTo]").datepicker('option', 'minDate', cDate);

            break;
            
            
        case "visafrom":
            var cDate = $(this).datepicker('getDate');
            cDate.setMonth(cDate.getMonth() + 1);
            $("[name=visaTo]").datepicker('option', 'minDate', cDate);

            break;
            
           case "visafromfor":
            var cDate = $(this).datepicker('getDate');
            cDate.setMonth(cDate.getMonth() + 1);
            $("[name=visaToFor]").datepicker('option', 'minDate', cDate);

            break;
            case "empfromyear[]":
            var cDate = $(this).datepicker('getDate');
            cDate.setMonth(cDate.getMonth() + 1);
            $(this).closest(".form-group").find(".emptoyear").datepicker('option', 'minDate', cDate);

            break;
    }

}


function loadYearDropdown(){
var minOffset = 0, maxOffset = 100; // Change to whatever you want // minOffset = 0 for current year 
var thisYear = (new Date()).getFullYear();
var m_names = ['January', 'February', 'March','April', 'May', 'June', 'July','August', 'September', 'October','November', 'December'];
var month = 0   // month = (new Date()).getMonth(); // for cuurent month
//for (var j = month; j <= 11; j++) {var months = m_names[ 0 + j].slice( 0, 3 ); $('<option>', {value: months, text: months}).appendTo(".month"); }
for (var i = minOffset; i <= maxOffset; i++) { var year = thisYear - i; $('<option>', {value: year, text: year}).appendTo(".yeardrop");}
    
}


function empCloseCurrentHistory(){

    $(this).closest(".cont").remove();
    
 $(".newemployment").find("h4").each(function(index,value){
     
          $(this).find("span").text(index + 2);
     
 })

    
        
    if ($(".newemployment .cont").length < 2) {

        $("#addemployment").show();

    }
    
 changeEmployeeType();
}

function changeEmployeeType(){
    $("form").validator('destroy')
    setTimeout(function(){
        
 $('form').validator();
        },500)
}