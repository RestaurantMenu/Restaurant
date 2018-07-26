function foods(name){
    if(document.getElementById(name).style.filter == "blur(5px)"){
        document.getElementById(name).style.filter = "blur(0px)";
    }else{
        document.getElementById(name).style.filter = "blur(5px)";
    }      
}