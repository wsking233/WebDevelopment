  /*
  *  Name: William Wang
	*  Student ID: 18017970
	*  email:xwg1585@autuni.ac.nz
  *
  * this is the js file for booking page, it do the reaction by without refrash the page.
  * this basiclly just pass the data that come from the POST method to PHP file.
  */
function createRequest() {
  var xhr = false;
  if (window.XMLHttpRequest) {
    xhr = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  }
  return xhr;
} // end function createRequest()

function getDate() {
  var today = new Date();

  var year = today.getFullYear();
  var month = "" + (today.getMonth() + 1);
  var day = "" + today.getDate();

  if (month < 10) {
    month = "0" + (today.getMonth() + 1);
  }

  if (day < 10) {
    day = "0" + today.getDate();
  }

  var date = year + "-" + month + "-" + day;
  document.getElementById("date").value = date;
  return date;
}

function getTime() {

  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  if(h < 10){
    h = "0" + today.getHours;
  }
  if(m < 10){
    m = "0" + today.getMinutes;
  }
  if(s < 10){
    s = "0" + today.getSeconds;
  }
  var time = h + ":" + m + ":" + s;
  document.getElementById("time").value = time;
  return time;
}

function submitForm() {
  var xhr = createRequest();
  var obj = document.getElementById("referenceDiv");

  var cname = document.getElementById("cname").value;
  var phone = document.getElementById("phone").value;
  var unumber = document.getElementById("unumber").value;
  var snumber = document.getElementById("snumber").value;
  var stname = document.getElementById("stname").value;
  var sbname = document.getElementById("sbname").value;
  var dsbname = document.getElementById("dsbname").value;
  var date = document.getElementById("date").value;
  var time = document.getElementById("time").value;
 
  var data = {
    cname: cname,
    phone: phone,
    unumber: unumber,
    snumber: snumber,
    stname: stname,
    sbname: sbname,
    dsbname: dsbname,
    date: date,
    time: time,
  };
  var data = JSON.stringify(data);

  if (date >= getDate()) {
    xhr.open("POST", "./booking.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("data=" + data);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        obj.innerHTML = xhr.responseText;
      }
    };
    return false;
    // if(time >= getTime()){
     
    // }else{
    //   alert("Wrong Time !");
    // // location.reload();
    // }
  }else{
    alert("Wrong Date !");
    // location.reload();
  }
  
}
