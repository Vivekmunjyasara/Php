function done()
{
    //first name field
    let first = document.getElementById("fn").value;
    let error = document.getElementById("error");
    var isValid = true;

    if (first === '' || first.includes(" "))
    {
        first === '' ? (error.textContent = '* required') : (error.textContent = '* space is not allowed');
        error.style.display = 'block';
        isValid = false;
    } else
    {
        error.style.display = "none";
    }

    //middle name field
    let middle = document.getElementById("mn").value;
    let error1 = document.getElementById("error1");

    if (middle === '' || middle.includes(" "))
    {
        middle === '' ? (error1.textContent = '* required') : (error1.textContent = '* space is not allowed');
        error1.style.display = 'block';
        isValid = false;
    } else
    {
        error1.style.display = "none";
    }


    //last name field
    let last = document.getElementById("ln").value;
    let error2 = document.getElementById("error2");

    if (last === '' || last.includes(" "))
    {
        last === '' ? (error2.textContent = '* required') : (error2.textContent = '* space is not allowed');
        error2.style.display = 'block';
        isValid = false;
    } else
    {
        error2.style.display = "none";
    }

    //phone number field
    let mobile = document.getElementById("pn").value;
    let error3 = document.getElementById("error3");

    if (isNaN(mobile) || mobile.length !== 10)
    {
        isNaN(mobile) ? (error3.textContent = '* numbers only') : (error3.textContent = '* 10 digits required');
    } else
    {
        error3.style.display = 'none';
    }

    //gender field
    let male = document.getElementById("m").checked;
    let female = document.getElementById("f").checked;
    let other = document.getElementById("o").checked;
    let error4 = document.getElementById("error4");

    if (!male && !female && !other)
    {
        error4.textContent = '* please select gender️'
        error4.style.display = 'block';
        isValid = false;
    } else
    {
        error4.style.display = 'none';
    }

    //education field
    let education = document.getElementById("edu").value;
    let error5 = document.getElementById("error5");

    if (education == "Education")
    {
        error5.textContent = '* please select your education';
        error5.style.display = 'block';
        isValid = false;
    } else
    {
        error5.style.display = 'none';
    }

    //language field
    let language = document.getElementById("lan").value;
    let error6 = document.getElementById("error6");

    if (language == "Language")
    {
        error6.textContent = '* please select your language';
        error6.style.display = 'block';
        isValid = false;
    } else
    {
        error6.style.display = 'none';
    }


    //percentage field
    let percentage = document.getElementById("per").value;
    let error7 = document.getElementById("error7");

    if (percentage == "Percentage")
    {
        error7.textContent = '* please select your percentage';
        error7.style.display = 'block';
        isValid = false;
    } else
    {
        error7.style.display = 'none';
    }


    //passing year field
    let pass = document.getElementById("pas").value;
    let error8 = document.getElementById("error8");

    if (pass == "Passing year")
    {
        error8.textContent = '* please select your passing year';
        error8.style.display = 'block';
        isValid = false;
    } else
    {
        error8.style.display = 'none';
    }

    //blood grp field
    let bg = document.getElementById("bg").value;
    let error9 = document.getElementById("error9");

    if (bg == "Blood Group")
    {
        error9.textContent = '* please select your blood group';
        error9.style.display = 'block';
        isValid = false;
    } else
    {
        error9.style.display = 'none';
    }

    //country field
    let country = document.getElementById("cou").value;
    let error10 = document.getElementById("error10");

    if (country == "Country")
    {
        error10.textContent = '* please select your country';
        error10.style.display = 'block';
        isValid = false;
    } else
    {
        error10.style.display = 'none';
    }

    //state field
    let state = document.getElementById("sta").value;
    let error11 = document.getElementById("error11");

    if (state == "State")
    {
        error11.textContent = '* please select your state';
        error11.style.display = 'block';
        isValid = false;
    } else
    {
        error11.style.display = 'none';
    }

    //pin code field
    let pin = document.getElementById("pi").value;
    let error12 = document.getElementById("error12");

    if (isNaN(pin) || pin.length !== 6)
    {
        isNaN(pin) ? (error12.textContent = '* numbers only') : (error12.textContent = '* 6 digits required');
        error12.style.display = 'block';
        isValid = false;
    } else
    {
        error12.style.display = 'none';
    }


    //wing field
    let wing = document.getElementById("wing").value;
    let error13 = document.getElementById("error13");

    if (wing === '')
    {
        error13.textContent = '* this field cannot be empty';
        error13.style.display = 'block';
        isValid = false;
    } else
    {
        error13.style.display = 'none';
    }


    //building/society
    let build = document.getElementById("build").value;
    let error14 = document.getElementById("error14");

    if (build === '')
    {
        error14.textContent = '* this field cannot be empty';
        error14.style.display = 'block';
        isValid = false;
    } else
    {
        error14.style.display = 'none';
    }

    //area field
    let area = document.getElementById("area").value;
    let error15 = document.getElementById("error15");

    if (area === '')
    {
        error15.textContent = '* this field cannot be empty';
        error15.style.display = 'block';
        isValid = false;
    } else
    {
        error15.style.display = 'none';
    }

//city field
    let city = document.getElementById("city").value;
    let error16 = document.getElementById("error16");

    if (city === '')
    {
        error16.textContent = '* this field cannot be empty';
        error16.style.display = 'block';
        isValid = false;
    } else
    {
        error16.style.display = 'none';
    }


    //landmark field
    let land = document.getElementById("land").value;
    let error17 = document.getElementById("error17");

    if (build === '')
    {
        error17.textContent = '* this field cannot be empty';
        error17.style.display = 'block';
        isValid = false;
    } else
    {
        error17.style.display = 'none';
    }


    //dob field
    let dob = document.getElementById("dob").value;
    let error18 = document.getElementById("error18");

    if (dob === '')
    {
        error18.textContent = '* this field cannot be empty';
        error18.style.display = 'block';
        isValid = false;
    } else
    {
        error18.style.display = 'none';
    }

    //email field
    let ema = document.getElementById("ema").value;
    let error19 = document.getElementById("error19");

    if (ema.includes('@') && ema.includes('.'))
    {
        error19.style.display = 'none';
    } else
    {
        error19.textContent = '* @ and . is missing';
        error19.style.display = 'block';
        isValid = false;
    }


    //photo field
    let photo = document.getElementById("photo").value;
    let error20 = document.getElementById("error20");

    if (photo === '')
    {
        error20.textContent = '* please upload your photo';
        error20.style.display = 'block';
        isValid = false;
    } else
    {
        error20.style.display = 'none';
    }

    return isValid;
}



