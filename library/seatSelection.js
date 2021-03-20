window.onload = function(){
    //get button by id 
    var seatSelection__form = document.forms.seatSelection__form;
    var seatSelection = document.getElementsByClassName("seatSelection")[0];
    var seatConfirmation = document.getElementsByClassName("seatConfirmation")[0];
    var seatSelection_flex = document.getElementsByClassName("seatSelection_flex")[0];

        //populate the seat selection table
    var seatHtml = "";
    var rows = 10;
    for (i=1; i<=rows; i++){
        seatHtml += "<div><label for="+i+"A>"+i+"A</label><input type='radio' id="+i+"A name='seat'/></div>";
        seatHtml += "<div><label for="+i+"B>"+i+"B</label><input type='radio' id="+i+"B name='seat'/></div>";
        seatHtml += "<div><label for="+i+"C>"+i+"C</label><input type='radio' id="+i+"C name='seat'/></div>";
        seatHtml += "<div><label for="+i+"D>"+i+"D</label><input type='radio' id="+i+"D name='seat'/></div>";
        seatHtml += "<div></div>";
        seatHtml += "<div><label for="+i+"E>"+i+"E</label><input type='radio' id="+i+"E name='seat'/></div>";
        seatHtml += "<div><label for="+i+"F>"+i+"F</label><input type='radio' id="+i+"F name='seat'/></div>";
        seatHtml += "<div><label for="+i+"G>"+i+"G</label><input type='radio' id="+i+"G name='seat'/></div>";
        seatHtml += "<div><label for="+i+"H>"+i+"H</label><input type='radio' id="+i+"H name='seat'/></div>";
        }
        seatHtml+="<div><button class='seatSelection_btn' type='submit' name='seatSelect'>Select</button></div>";
        console.log(seatHtml);
        seatSelection_flex.innerHTML = seatHtml;


    //functions
    seatSelection__form.onsubmit = function(){
        seatSelection.style.display = "none";
        seatConfirmation.style.display = "block";
        return false;
    }
}
