function m(){


var request = new XMLHttpRequest();
request.onreadystatechange=function(){

    if(request.readyState==4&&request.status==200){

        var response = request.responseText;
        // {response=="success"?alert("Hello"):alert("null")};
        alert(response);
    }
};

request.open("POST","index.php",true);
request.send();
}