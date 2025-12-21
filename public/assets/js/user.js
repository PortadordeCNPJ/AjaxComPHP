window.onload = function () {

    var btn_users = document.querySelector("#btn-users");

    var div_users = document.querySelector("#div-users");

    btn_users.onclick = function () {
        XMLHttpGet('ajax/user', function () {

            //Será passo o callback, que é uma função que passa parametros para outra função
            beforeSend(function () {

                div_users.innerHTML = `<i class="fa-solid fa-arrows-spin fa-spin"></i><span class="sr-only">Loanding...</span>`

            });

            sucess(function () {

                var users = JSON.parse(xhttp.responseText);

                var table = `<table class='table table-striped'>`;
                table += `<thead><tr><td>ID</td><td>Nome</td><td>ID</td>Email</tr></thead>`;
                table += `<tbody>`;
                users.forEach(function (user) {

                    table += `<tr>`;
                    table += `<td>${user.id}</td>`;
                    table += `<td>${user.name}</td>`;
                    table += `<td>${user.email}</td>`;
                    table += `</tr>`;
                });

                table += `</tbody>`;
                table += `</table>`;

                div_users.innerHTML = table;
            });

        });

    }

}
