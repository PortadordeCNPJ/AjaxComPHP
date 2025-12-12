window.onload = function(){

    var btn_users = document.querySelector("#btn-users");

    //O objeto que é preciso usar para utilizar o AJAX com javascript puro
    var xhttp = new XMLHttpRequest();

    btn_users.onclick = function(){

        //Função que verifica os status da operação e determina se esta tudo correto. Determinando o status com base nas verificações
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                console.log(this.responseText);
            }
        }

        //Método open(GET or POST or PUT or DELETE) abre uma requisição http
        xhttp.open('GET', 'ajax/user.php', true);

        //Método de envio
        xhttp.send();
    }


}