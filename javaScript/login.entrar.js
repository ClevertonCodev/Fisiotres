function login(){

    var login = document.getElementById('user').value;
    var senha = document.getElementById('pass').value;

    if(login == "273786f" && senha == "cleverton"){
        location.href = "sistemahome.html";
    }else{
        alert('Usuario ou senha incorretos');
    }

}
