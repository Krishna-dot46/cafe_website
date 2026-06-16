function showMenu(category){

var sections=document.querySelectorAll(".menu-category");

sections.forEach(function(sec){
sec.style.display="none";
});

document.getElementById(category).style.display="block";

}

document.addEventListener("DOMContentLoaded",function(){

showMenu("Starter");

});