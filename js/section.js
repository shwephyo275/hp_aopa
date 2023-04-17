$(document).ready(function(){
  $("#about").show();
  $("#date").hide();
  $("#upload").hide();
  $("#acc1").hide();
  $("#acc2").hide();
  $("#acc3").hide();
  $("#submit").hide();
  $(".icons").hide();
  $(".confirm").hide();
 
  var acc1 = document.getElementById("acc1");
  var acc2 = document.getElementById("acc2");
  var acc3 = document.getElementById("acc3");
  acc1.addEventListener("click", function() {
    var panel = this.nextElementSibling;
    if (panel == panel) {
      $("#about").show();
      $("#date").hide();
      $("#upload").hide();
      $("#acc2").hide();
      $("#acc3").hide();
      $(".step-one").addClass("is-active");
      $(".step-two").removeClass("is-active");
      $(".step-three").removeClass("is-active");
    }
  });
  acc2.addEventListener("click", function() {
    var panel = this.nextElementSibling;
    if (panel == panel) {
      $("#about").hide();
      $("#date").show();
      $("#upload").hide();
      $("#acc1").hide();
      $("#acc3").hide();
     $(".step-two").addClass("is-active");
     $(".step-one").removeClass("is-active");
     $(".step-three").removeClass("is-active");
    }
  });
  acc3.addEventListener("click", function() {
    var panel = this.nextElementSibling;
    if (panel == panel) {
      $("#about").hide();
      $("#date").hide();
      $("#upload").show();
      $("#acc2").hide();
      $("#acc3").hide();
      $(".step-one").removeClass("is-active");
      $(".step-two").removeClass("is-active");
      $(".step-three").addClass("is-active");
    }
  });
//}

  const customTxt = document.getElementById("custom-text");
  const customTxt2 = document.getElementById("custom-text2");
  //multiple file upload
  var i;
  var uploadFiles = document.getElementById("fileupload");
  $('#fileupload').on("change", function () {
    // console.log(file[value]);
    var myObj, x, y;
    myObj = {
      "files":[ uploadFiles.value ],
      "file":[ uploadFiles.value ]
    };
    x = myObj.files[0];
    customTxt.innerHTML = x.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    y = myObj.file[0];
    document.getElementById("custom-text2").innerHTML = y;
  })

});

//About You Section
function aboutValidate() {
  //console.log("hi");
  var title = document.getElementById("title");
  var firstname = document.getElementById("firstname");
  var lastname = document.getElementById("lastname");
  var company = document.getElementById("company");
  var position = document.getElementById("position");
  var department = document.getElementById("department");
  var email = document.getElementById("email");
 
  var valid = true;
  if(title.value.length==0) {
    $("#icon-title").show();
    $("select").addClass("warning");
    $("th").addClass("warning-title");
    valid = false;
  }
  if(firstname.value.length==0) {
    $("#icon-first").show();
    $("input").addClass("warning");
    $("th").addClass("warning-title");
    valid = false;
  }
  if(lastname.value.length==0) {
    $("#icon-last").show();
    $("input").addClass("warning");
    $("th").addClass("warning-title");
    valid = false;
  }
  if(company.value.length==0) {
    $("#icon-company").show();
    $("input").addClass("warning");
    $("th").addClass("warning-title");
    valid = false;
  }
  if(position.value.length==0) {
    $("#icon-position").show();
    $("input").addClass("warning");
    $("th").addClass("warning-title");
    valid = false;
  }
  if(department.value.length==0) {
    $("#icon-department").show();
    $("input").addClass("warning");
    $("th").addClass("warning-title");
    valid = false;
  }
  if(email.value.length==0) {
    $("#icon-email").show();
    $("input").addClass("warning");
    $("th").addClass("warning-title");
    valid = false;
  }
  if(valid==true) {
    $("#date").show();
    $("#about").hide();
    $("#upload").hide(); 
    $("#acc1").show();
    $("#acc2").hide();
    $("#acc3").hide();
    $(".step-one").removeClass("is-active");
    $(".step-two").addClass("is-active");
  }
  return valid;
};

$("#about input,#about select").on('change', function(){
  //console.log("Change");
  if($(this).val()!='')
  {
    //$("#icon-title").hide();
    $(this).closest('.row').children('div').children('.icons').hide();
    $(this).removeClass("warning");
  }
  else {
    $(this).closest('.row').children('div').children('.icons').show();
    $(this).addClass("warning");
  }
});

//Date and Time Selection
function dateTime(){
  var s1 = $('#selection1').val();
  var s2 = $('#selection2').val();
  var s3 = $('#selection3').val();
  var counter=0;
    if($('#selection1').val()!=''){
      counter++;
    }
    if($('#selection2').val()!=''){
      counter++;
    }
    if($('#selection3').val()!=''){
      counter++;
    }
 // console.log(counter);
  if(counter==0){
    //console.log("Errors All");
    $("#icon1,#icon2,#icon3").show();
    $("#selection1 select,#selection2 select,#selection3 select").addClass("warning");
    }else if(counter>1){
      //console.log("Error");
      if(s1!='') {
     //   console.log("Error in selection1");
        $("#icon1").show();
        $("#selection1 select").addClass("warning");
      }
      if(s2!='') {
        $("#icon2").show();
        $("#selection2 select").addClass("warning");
      } 
      if(s3!='') {
        $("#icon3").show();
        $("#selection3 select").addClass("warning");
      }
    }else {
    $("#upload").show();
    $("#date").hide();
    $("#about").hide();
    $("#acc1").show();
    $("#acc2").show();
    $("#acc3").hide();
    $(".step-two").removeClass("is-active");
    $(".step-three").addClass("is-active");
    }
  };

$("#date select").on('change', function(){
  var s1 = $('#selection1').val();
  var s2 = $('#selection2').val();
  var s3 = $('#selection3').val();
  var counter=0;
  if($('#selection1').val()!=''){
    counter++;
  }
  if($('#selection2').val()!=''){
    counter++;
  }
  if($('#selection3').val()!=''){
    counter++;
  }
//   console.log(counter);
  if(counter==0){
    $("#icon1,#icon2,#icon3").show();
    $("#selection1 select,#selection2 select,#selection3 select").addClass("warning");
  }else if(counter>1){
   
    //console.log(counter);
    if($(this).val()!='')
    {
      if(s1!='') {
     //   console.log("Error in selection1");
        $("#icon1").show();
        $("#selection1 select").addClass("warning");
      }
      if(s2!='') {
    //    console.log("Error in selection2");
        $("#icon2").show();
        $("#selection2 select").addClass("warning");
      } 
      if(s3!='') {
    //    console.log("Error in selection3");
        $("#icon3").show();
        $("#selection3 select").addClass("warning");
      }
    //  console.log("four");
      $(this).closest('.row').children('div').children('.icons').show();
      $(this).addClass( "warning");
    }else { 
   //   console.log("Final");
      $(this).closest('.row').children('div').children('.icons').hide();
      $(this).removeClass("warning");
    }   
      
  }else {
    $(".icons").hide();
    $("select").removeClass("warning");
    
  }
  
});

//Upload Files Section
$("#continue3").click(function(){
  $("#upload").hide();
  $("#date").hide();
  $("#about").hide();
  $("#acc1").show();
  $("#acc2").show();
  $("#acc3").show();
  $(".step-one,.step-two,.step-three").addClass("is-active");
  $("#submit").show();
});

function check() {
  // alert ("hi");
  $(".confirm").show();
  $("#about").hide();
  $("#date").hide();
  $("#upload").hide();
  $("#acc1").hide();
  $("#acc2").hide();
  $("#acc3").hide();
  $("#submit").hide();
  $(".icons").hide();
  
}
