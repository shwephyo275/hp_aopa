$(document).ready(function(){
//$(".btn").click(function(){
  //alert("Good");
//});
  $("#about").show();
  $("#date").hide();
  $("#upload").hide();
  $("#acc1").hide();
  $("#acc2").hide();
  $("#acc3").hide();
  $("#submit").hide();
  $(".icons").hide();
  $(".confirm").hide();
  //$("#continue1").click(function(){
 // });

 // $("#continue2").click(function(){
// });

//var acc = document.getElementsByClassName("accordion");
//var i;
//for (i = 0; i < acc.length; i++) {
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
      }
  });
//}

//const realFileBtn = document.getElementById("real-file");
//const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");
const customTxt2 = document.getElementById("custom-text2");
//var i;
//customBtn.addEventListener("click", function() {
 // realFileBtn.click(); 
//});
//multiple file upload


 var uploadFiles = document.getElementById("file-upload");
$('#file-upload').on("change", function () {
 // console.log(file[value]);
 var myObj, x, y;
myObj = {
  "files":[ uploadFiles.value ],
  "file":[ uploadFiles.value ]
};
x = myObj.files[0];
document.getElementById("custom-text").innerHTML = x;
y = myObj.file[0];
document.getElementById("custom-text2").innerHTML = y;
 

 // var cars = [realFileBtn.value];
 // carLen = cars.length;
 // for (i=0; i<carLen; ++i) {
 // if(realFileBtn.value) {
 //   customTxt.innerHTML = cars[i].match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
 //   customTxt2.innerHTML = cars[i].match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
 // } else {
 //   customTxt.innerHTML = "";
 // }
 // }
  
 })
/*
for(var i =0, i<files.length, i++) {
  
  }


realFileBtn.addEventListener("change", function() {
  var cars = [realFileBtn.value];
  carLen = cars.length;
  for (i=0; i<carLen; ++i) {
  if(realFileBtn.value) {
    customTxt.innerHTML = cars[i].match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    customTxt2.innerHTML = cars[i].match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  } else {
    customTxt.innerHTML = "";
  }
  }
});*/
});

function aboutValidate() {
  //console.log("hi");
  var inpObj = document.getElementById("title");
  var inpObj = document.getElementById("firstname");
  var inpObj = document.getElementById("lastname");
  var inpObj = document.getElementById("company");
  var inpObj = document.getElementById("position");
  var inpObj = document.getElementById("department");
  var inpObj = document.getElementById("email");
  if (!inpObj.checkValidity()) {
     $(".icons").show();
     $("input, select").addClass("warning");
     $("th").addClass("warning-title");
  } else {
      $("#date").show();
      $("#about").hide();
      $("#upload").hide(); 
      $("#acc1").show();
      $("#acc2").hide();
      $("#acc3").hide();
      $("input, select").removeClass("warning");
      $("th").removeClass("warning-title");
    } 
}; 

/*function dateValidate() {
  //console.log("hi");
  var inpHur = document.getElementById("hour1");
  var inpHur = document.getElementById("hour2");
  var inpHur = document.getElementById("hour3");
  if (!inpHur.checkValidity()) {
     $(".icons").show();
     $("input").addClass("warning");
  } else {
      $("#upload").show();
      $("#date").hide();
      $("#about").hide();
      $("#acc1").show();
      $("#acc2").show();
      $("#acc3").hide();
    } 
}; 
*/

$("#continue2").click(function(){
  $("#upload").show();
  $("#date").hide();
  $("#about").hide();
  $("#acc1").show();
  $("#acc2").show();
  $("#acc3").hide();
 });

 $("#continue3").click(function(){
  $("#upload").hide();
  $("#date").hide();
  $("#about").hide();
  $("#acc1").show();
  $("#acc2").show();
  $("#acc3").show();
  $("#submit").show();
 });

 function show() {
  // alert ("hi");
  $(".confirm").show();
 }

 //multiple file upload
 /*
$('#real-file').on("change", function () {
  var files = $(this).get(0).files;
  var formData = new FormData();
  for(var i =0, i<files.length, i++) {
    formData.append(files[i].name, files[i]);
  }
 })
 //  uploadFiles(formData);
  


function.uploadFiles(formData) {
  $.ajax({
    url:"",
    method:"POST",
    data: formData,
    success: function(data) {

    },
    error:function(data) {
      alert("Upload Failed");
    }
  })
} */