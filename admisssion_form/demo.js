$(document).ready(function () {
    let today = new Date;
    let newmonth = ((today.getMonth() + 1) < 10) ? ("0" + (today.getMonth() + 1)) : (today.getMonth() + 1);
    let styear = (today.getFullYear() - 18 + "-" + newmonth + "-" + today.getDate());
    $("#dob").attr("max", styear);
});

let isvalid;

function testerror()
{
    const pattern = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/;
    const alpha = /^[a-zA-Z]+$/;
    $(".inputt").each(function (index, element) {
        const val_to_check = $(this).val();
        const mess = document.getElementById($(this).attr('id') + "_error");
        if ($(this).attr('id') === 'fn' || $(this).attr('id') === 'mn' || $(this).attr('id') === 'ln')
        {
            if (!(alpha.test(val_to_check)))
            {
                mess.innerText = ((val_to_check === '') ? 'Please fill the input field' : 'Space is not allowed');
                mess.style.display = 'block';
                isvalid = false;
            } else
            {
                mess.style.display = 'none';
            }
        } else if ($(this).attr('id') === 'wing' || $(this).attr('id') === 'build' || $(this).attr('id') === 'area' || $(this).attr('id') === 'city' || $(this).attr('id') === 'land')
            {
                if (val_to_check === '')
                {
                    mess.innerText = 'Please fill the input field';
                    mess.style.display = 'block';
                    isvalid = false;
                } else
                {
                    mess.style.display = 'none';
                }
            }else if ($(this).attr('id') === 'pin' || $(this).attr('id') === 'pn')
        {
            if ($(this).attr('id') === 'pn')
            {
                if (val_to_check === "" || val_to_check.includes(" "))
                {
                    mess.innerText = (val_to_check === '') ? "please fill the input field" : "space is not allowed";
                    mess.style.display = 'block';
                    isvalid = false;
                } else if (!(val_to_check.length === 10) || isNaN(val_to_check))
                {
                    mess.innexText = (isNaN(val_to_check)) ? "Numbers only" : "10 digit required";
                    mess.style.display = 'block';
                    isvalid = false;
                } else
                {
                    mess.style.display = 'none';
                }
            }else if($(this).attr('id') === 'dob')
        {
            if(val_to_check === "")
            {
                mess.innexText='please fill the date of birth';
                mess.style.display='block';
                isvalid=false;
            }
            else
            {
                mess.style.display='none';
            }
        }
            

            if ($(this).attr('id') === 'pin')
            {
                if (val_to_check === "" || val_to_check.includes(" "))
                {
                    mess.innerText = (val_to_check === '') ? "please fill the input field" : "space is not allowed";
                    mess.style.display = 'block';
                    isvalid = false;
                } else if (!(val_to_check.length === 6) || isNaN(val_to_check))
                {
                    mess.innexText = (isNaN(val_to_check)) ? "Numbers only" : "6 digit required";
                    mess.style.display = 'block';
                    isvalid = false;
                } else
                {
                    mess.style.display = 'none';
                }
            }
        }
       
        if ($(this).attr('id') === 'ema')
        {

            if (!(pattern.test(val_to_check)))
            {
                mess.innerText = 'please give valid email';
                mess.style.display = 'block';
                isvalid = false;
            } else
            {
                mess.style.display = 'none';
            }
        }

        if ($(this).attr('id') === 'photo')
        {
            if (val_to_check === '')
            {
                mess.innerText = 'upload your photo';
                mess.style.display = 'block';
                isvalid = false;
            } else
            {
                mess.style.display = 'none';
            }
        }

       if ($(this).attr('name') === 'gender')
        {
            let ischecked = $("input[name = 'gender']:checked").length > 0;
            let mess = document.getElementById("gender_error");
            if(!(ischecked))
            {
                mess.innerText='Please Select Gender';
                mess.style.display ='block';
                isvalid=false;
            }
            else
            {
                mess.style.display='none';
            }
        }
    });

    $("select").each(function (index, element) {
        const sel_to_check = $(this).val();
        const messel = document.getElementById($(this).attr('id') + "_error");
        if (sel_to_check === 'Education' || sel_to_check === 'Language' || sel_to_check === 'Percentage' || sel_to_check === 'Passing year' || sel_to_check === 'Blood Group' || sel_to_check === 'Country' || sel_to_check === 'State')
        {
            messel.innerText = 'Please select an option';
            messel.style.display = 'block';
            isvalid = false;
        } else
        {
            messel.style.display = 'none';
        }
    });
}

function hi()
{
    testerror();
    return isvalid;
}
