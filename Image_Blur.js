function foods(name){
    
    var total = 0;
    
    if(document.getElementById(name).style.filter == "blur(5px)"){
        document.getElementById(name).style.filter = "blur(0px)";
        if(total>0){
            total = total - 100;
        }
    }else{
        document.getElementById(name).style.filter = "blur(5px)";
        total = total + 100;
    }      
}