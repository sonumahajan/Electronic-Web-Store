function myFunction()
{
    
    var x = document.getElementById('pass');
    var y = document.getElementById('eye1');
    var z = document.getElementById('eye2');

    if(x.type === 'password'){
        x.type = "text";
        y.style.display = "block";
        z.style.display = "none";
    }
    else{
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
}

function myFunction1()
{
    
    var x = document.getElementById('pass');
    var xx = document.getElementById('pass1');
    var y = document.getElementById('eye1');
    var z = document.getElementById('eye2');

    if(x.type === 'password'){
        x.type = "text";
        xx.type = "text";
        y.style.display = "block";
        z.style.display = "none";
    }
    else{
        x.type = "password";
        xx.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
}