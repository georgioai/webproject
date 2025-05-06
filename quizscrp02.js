const $ = function(id){
    return document.getElementById(id);
}

const submit = function(){
    const ans1 = $("q1B");
    const ans2 = $("q2C");
    const ans3 = $("q3B");
    const ans4 = $("q4C");
    const ans5 = $("q5B");
    const ans6 = $("q6B");
    const ans7 = $("q7A");
    const ans8 = $("q8C");
    const ans9 = $("q9B");
    const ans10 = $("q10A");

    let count=0;
    
    if(ans1.checked)
      {
        count+=10;
        $("pt1").textContent="✅ CORRECT";
        pt1.style.color="green";
      }
      else{
        $("pt1").textContent="❌ WRONG";
        pt1.style.color="red";
        ans1.checked = true;
        ans1.style.accentColor = "lightgreen";
      
      }

    if(ans2.checked)
        {
            count+=10;
            $("pt2").textContent="✅ CORRECT";
            pt2.style.color="green";
        }
        else{
            $("pt2").textContent="❌ WRONG";
            pt2.style.color="red";
            ans2.checked = true;
            ans2.style.accentColor = "lightgreen";
        }

        if(ans3.checked)
            {
                count+=10;
                $("pt3").textContent="✅ CORRECT";
                pt3.style.color="green";
            }
            else{
                $("pt3").textContent="❌ WRONG";
                pt3.style.color="red";
                ans3.checked = true;
                ans3.style.accentColor = "lightgreen";
            }

            if(ans4.checked)
                {
                    count+=10;
                    $("pt4").textContent="✅ CORRECT";
                    pt4.style.color="green";
                }
                else{
                    $("pt4").textContent="❌ WRONG";
                    pt4.style.color="red";
                    ans4.checked = true;
                    ans4.style.accentColor = "lightgreen";
                }
                if(ans5.checked)
                    {
                        count+=10;
                        $("pt5").textContent="✅ CORRECT";
                        pt5.style.color="green";
                    }
                    else{
                        $("pt5").textContent="❌ WRONG";
                        pt5.style.color="red";
                        ans5.checked = true;
                        ans5.style.accentColor = "lightgreen";
                    }
                    if(ans6.checked)
                        {
                            count+=10;
                            $("pt6").textContent="✅ CORRECT";
                            pt6.style.color="green";
                            
                        }
                        else{
                            $("pt6").textContent="❌ WRONG";
                            pt6.style.color="red";
                            ans6.checked = true;
                            ans6.style.accentColor = "lightgreen";
                        }
                        if(ans7.checked)
                            {
                                count+=10;
                                $("pt7").textContent="✅ CORRECT";
                                pt7.style.color="green";
                            }
                            else{
                                $("pt7").textContent="❌ WRONG";
                                pt7.style.color="red";
                                ans7.checked = true;
                                ans7.style.accentColor = "lightgreen";
                            }
                            if(ans8.checked)
                                {
                                    count+=10;
                                    $("pt8").textContent="✅ CORRECT";
                                    pt8.style.color="green";
                                }
                                else{
                                    $("pt8").textContent="❌ WRONG";
                                    pt8.style.color="red";
                                    ans8.checked = true;
                                    ans8.style.accentColor = "lightgreen";
                                }
                                if(ans9.checked)
                                    {
                                        count+=10;
                                        $("pt9").textContent="✅ CORRECT";
                                        pt9.style.color="green";
                                    }
                                    else{
                                        $("pt9").textContent="❌ WRONG";
                                        pt9.style.color="red";
                                        ans9.checked = true;
                                        ans9.style.accentColor = "lightgreen";
                                    }
                                    if(ans10.checked)
                                        {
                                            count+=10;
                                            $("pt10").textContent="✅ CORRECT";
                                            pt10.style.color="green";
                                        }
                                        else{
                                            $("pt10").textContent="❌ WRONG";
                                            pt10.style.color="red";
                                            ans10.checked = true;
                                            ans10.style.accentColor = "lightgreen";
                                        }
                        
                        $("score").textContent=count+"/100";
                        $("score").style.color = count >= 60 ? "green" : "red";
                  
                
}
window.onload =function(){
   const form= $("quiz-form");
   form.onsubmit=submit;
}