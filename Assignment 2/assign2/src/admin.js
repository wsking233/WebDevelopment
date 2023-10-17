  /*
  *  Name: William Wang
	*  Student ID: 18017970
	*  email:xwg1585@autuni.ac.nz
  *
  * this is the js file for admin page, it do the reaction by without refrash the page.
  * 
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
  
  function searchBooking() {
    var location = document.getElementById("tableDiv");
    var bsearch = document.getElementById("bsearch").value;
    var xhr = createRequest();

    xhr.open("POST", "./admin.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("bsearch="+bsearch);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        location.innerHTML = xhr.responseText;
      }
    }; 

    return false;
  }

  function assignDriver(){
    var location = document.getElementById("tableDiv");
    var xhr = createRequest();
    var bookingRefNo = document.getElementById("sbutton").innerHTML;

    xhr.open("POST","./admin_driver.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("bookingRefNo="+bookingRefNo);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        location.innerHTML = xhr.responseText;
      }
    }; 

    return false;
  }

  