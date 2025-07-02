function done()
{
    //first name field
    let first=document.getElementById("fn").value;
    let error=document.getElementById("error");
    
    if(first.includes(" "))
    {
        error.textContent='space is not allowed';
        error.style.display='block';
         return false;
    }
    else
    {
        error.textContent='';
        error.style.display="none";
        return true;
    }
    
    //middle name field
    let middle=document.getElementById("mn").value;
    let error=document.getElementById("error");
    
    if(middle.includes(" ")){
      error.textContent='space is not allowed';
      error.style.display='block';
         return false;
    }
    else
    {
        error.textContent='';
        error.style.display="none";
        return true;
    }
    
    
    
//    
//    let last=document.getElementById("ln").value;
//    if(last.includes(" ")){
//     alert("spaces are not allowed in last name");   
//    }
//    
//    let mobile=document.getElementById("pn").value;
//    if(isNaN(mobile) || mobile.length !==10)
//    {
//        alert("phone number should be of 10 digits");
//    }
//    
//    let male=document.getElementById("m").checked;
//    let female=document.getElementById("f").checked;
//    let other=document.getElementById("o").checked;
//    
//    if(!male && !female && !other)
//    {
//        alert("plese select gender");
//    }
//    
//    //education
//    let education=document.getElementById("edu").value;
//    if(education=="Education"){
//     alert("please select education");   
//    }
//    
//    let language=document.getElementById("lan").value;
//    if(language=="Language"){
//     alert("please select Language");   
//    }
//    
//    
//    let percentage=document.getElementById("per").value;
//    if(percentage=="Percentage"){
//     alert("please select percentage");   
//    }
//    
//    
//    let pass=document.getElementById("pas").value;
//    if(pass=="Passing year"){
//     alert("please select Passing year");   
//    }
//    
//    
//    let wingg=document.getElementById("wing").value;
//    if(wingg==""){
//        alert("please enter wing/flatno");
//    }
//    
//    
//    
//    
//    let pin=document.getElementById("pi").value;
//    if(isNaN(pin) || pin.length !==6)
//    {
//        alert("pin code should be of 6 digits");
//    }
//    
    
}



