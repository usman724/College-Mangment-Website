
function namevalidate () {
    var un = document.registration.username.value;
    l = un.length;
    unpat = /^[A-Za-z]+$/
    if (l == 0)
        document.getElementById('nameerror').innerHTML = "Please Enter Name";
    else if (!un.match(unpat)) {
        document.getElementById('nameerror').innerHTML = "Please Enter Correct";
        document.registration.username.value = "";
    }
    else
        document.getElementById('nameerror').innerHTML = "";
}


function lastnamevalidate() {
    var lsun = document.registration.lastname.value;
    ll = lsun.length;
    lsunpat = /^[A-Za-z]+$/
    if (ll == 0)
        document.getElementById('lasterror').innerHTML = "Please Enter Correct";
    else if (!lsun.match(lsunpat)) {
        document.getElementById('lasterror').innerHTML = "Please Enter Correct";
        document.registration.lastname.value = "";
    }
    else
        document.getElementById('lasterror').innerHTML = "";

}

function addressvalidation() {
            var addr =document.registration.address.value;
           addrpat=/^[A-Za-z0-9]+$/
           addrlen=addr.length;
            if(addrlen==0)
                document.getElementById('addresserror').innerHTML="Please Enter Address";
            else if(!addr.match(addrpat))
            {
                document.getElementById('addresserror').innerHTML="Please Enter Correct Address";
                document.registration.address.value="";
            }
            else
               document.getElementById('addresserror').innerHTML = "";
}


function emailvalidation(){
    emailvalidate = document.registration.email.value;
    emailpattren = /^[a-zA-Z0-9@._]+$/
    emaillen = emailvalidate.length;
    if (emaillen == 0) {
        document.getElementById('emailerror').innerHTML = "Please Enter Email";
    }
    if (!emailvalidate.match(emailpattren) || emailvalidate.match(emailpattren)) {
        if (!emailvalidate.match(emailpattren)) {
            document.getElementById('emailerror').innerHTML = "Please Enter Correct Email";
            document.registration.email.value = "";
        }
        else {
            attherate = emailvalidate.indexOf('@');
            dotindex = emailvalidate.lastIndexOf('.');
            if (attherate < 1 || dotindex > emaillen - 2 || dotindex - attherate < 2) {

                document.getElementById('emailerror').innerHTML = "Please Enter Correct Email pattern";
                document.registration.email.value = "";
            }
            else
            document.getElementById('emailerror').innerHTML = "";

        }
    }
}

  Gender = " ";

function gendervalidation() {

    Gender=document.registration.sex.value;

}

function dobvalidate() {
   d= document.registration.dob.value;
   dlen= d.length;
   if(dlen==0)
       document.getElementById('doberror').innerHTML = "Select Dob";
   else
       document.getElementById('doberror').innerHTML = "";
}


function cityvalidate(){
    c=document.registration.city.value;
    clen=c.length;
    if(clen==0)
        document.getElementById('cityerror').innerHTML = "Enter City";
    else
        document.getElementById('cityerror').innerHTML = "";
}



function provincevalidate(){

    p=document.registration.province.value;

    plens=p.length;
    if(plens==0)
        document.getElementById('proerror').innerHTML = "Enter Province";
    else
        document.getElementById('proerror').innerHTML = "";
}



function numbervalidate() {
    p=document.registration.mob.value;
    plens=p.length;
    if(plens==0)
        document.getElementById('moberror').innerHTML = "Enter Number";
    else
        document.getElementById('moberror').innerHTML = "";

}






