window.onload = function(){

    var mealSelection_form = document.forms.mealSelection_form;
    var mealSelection = document.getElementsByClassName("mealSelection")[0];
    var mealConfirmation = document.getElementsByClassName("mealConfirmation")[0];
    var mealSelection_Flex = document.getElementsByClassName("mealSelection_Flex")[0];
    var mealSelection_flex_div = document.getElementsByClassName("mealSelection_flex_div");

    //functions
    mealSelection_form.onsubmit = function(){
        mealSelection.style.display = "none";
        mealConfirmation.style.display = "block";
        return false;
    }
}
