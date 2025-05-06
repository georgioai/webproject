const $ = function(id)
{
    return document.getElementById(id);
}

const submit = function(event)
{
    event.preventDefault();

    const firstname = $("fnfield").value;
    const lastname= $("lnfield").value;
    const emailv = $("emailfield").value;
    const phnn = $("phnfield").value;
    const msg = $("txtarfield").value;
    
    let flag=true;

    if(firstname=="")
    {
        $("errorfn").textContent=" ERROR FIRSTNAME REQUIRED!";
        errorfn.style.fontSize="12px";
        errorfn.style.fontFamily="monospace";
        errorfn.style.color="red";
        fnfield.style.border="2px solid red";
        flag=false;
    }else if(!isNaN(parseInt(firstname))){
        $("errorfn").textContent=" INPUT NOT VALID!";
        errorfn.style.fontSize="12px";
        errorfn.style.fontFamily="monospace";
        errorfn.style.color="red";
        fnfield.style.border="2px solid red";
        flag=false;
    }

    if(lastname=="")
        {
            $("errorln").textContent=" ERROR LASTNAME REQUIRED!";
            errorln.style.fontSize="12px";
            errorln.style.fontFamily="monospace";
            errorln.style.color="red";
            lnfield.style.border="2px solid red";
            flag=false;
        }else if(!isNaN(parseInt(lastname))){
            $("errorln").textContent=" INPUT NOT VALID!";
            errorln.style.fontSize="12px";
            errorln.style.fontFamily="monospace";
            errorln.style.color="red";
            lnfield.style.border="2px solid red";
            flag=false;
        }
    
        if(emailv=="")
            {
                $("errorem").textContent=" ERROR EMAIL REQUIRED!";
                errorem.style.fontSize="12px";
                errorem.style.fontFamily="monospace";
                errorem.style.color="red";
                emailfield.style.border="2px solid red";
                flag=false;
            }
        
        if(!phnn=="" && isNaN(parseInt(phnn)))
        {
            $("errorph").textContent=" ONLY INTEGERS ARE VALID!";
            errorph.style.fontSize="12px";
            errorph.style.fontFamily="monospace";
            errorph.style.color="red";
            phnfield.style.border="2px solid red";
            flag=false;
        }

        if(msg=="")
            {
                $("errorms").textContent=" ERROR MESSAGE REQUIRED!";
                errorms.style.fontSize="12px";
                errorms.style.fontFamily="monospace";
                errorms.style.color="red";
                txtarfield.style.border="2px solid red";
                flag=false;
            }
        
            if(flag){
                $("greeting").textContent="THANK YOU "+firstname.toUpperCase()+" "+lastname.toUpperCase()+" ! AN AGENT WILL BE WITH YOU SOON...";
                greeting.style.color="white";
                $("contactform").submit();
                reset();
            }
}

const reset = function(){
    fnfield.value="";
    lnfield.value="";
    emailfield.value="";
    phnfield.value="";
    txtarfield.value="";

    $("errorfn").textContent="*";
    errorfn.style.color="black";
    $("errorln").textContent="*";
    errorln.style.color="black";
    $("errorem").textContent="*";
    errorem.style.color="black";
    $("errorph").textContent="";
    errorph.style.color="black";
    $("errorms").textContent="*";
    errorms.style.color="black";

    fnfield.style.border="2px solid rgb(128, 125, 125)";
    lnfield.style.border="2px solid rgb(128, 125, 125)";
    emailfield.style.border="2px solid rgb(128, 125, 125)";
    phnfield.style.border="2px solid rgb(128, 125, 125)";
    txtarfield.style.border="2px solid rgb(128, 125, 125)";

    $("fnfield").focus();



}
window.onload = function(){
    
    $("btn2").onclick=reset;
    $("fnfield").focus();
    const form = $("contactform");
    form.onsubmit = submit;

}