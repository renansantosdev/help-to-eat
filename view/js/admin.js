function abrirModalCesta(tipo, alimentos, higiene, valor) {
    document.querySelector(".grid-card").classList.add("abaixo");
    document.querySelector(".grid-card").classList.remove("acima");
    document.querySelector(".grid-card-user").classList.add("abaixo");
    document.querySelector(".grid-card-user").classList.remove("acima");
    document.querySelector(".modal-admin").classList.remove("abaixo");
    document.querySelector(".modal-admin").classList.add("acima");
    
    document.getElementById("modal-admin").innerHTML = 
    "<div class='grid-modal'>" +
            "<div class='card-cestas'>" +
                "<div class='close'>" +
                    "<i class='fas fa-times' onclick='fecharModal()'></i>" +
                "</div>" +
                "<img src='/view/images/Box.png'>" +
                "<h1>" + tipo + "</h1>" +
                "<h5>" + alimentos + "- Alimentos</h5>" +
                "<h5>" + higiene + "- Higiene Pessoal</h5>" +
                "<h2>R$ " + valor + ",00</h2>" +
            "</div>" +
        "</div>";
}

function abrirModalEditCesta(tipo, alimentos, higiene, valor) {
    document.querySelector(".grid-card").classList.add("abaixo");
    document.querySelector(".grid-card").classList.remove("acima");
    document.querySelector(".grid-card-user").classList.add("abaixo");
    document.querySelector(".grid-card-user").classList.remove("acima");
    document.querySelector(".modal-admin").classList.remove("abaixo");
    document.querySelector(".modal-admin").classList.add("acima");
    
    document.getElementById("modal-admin").innerHTML = 
    "<div class='grid-modal'>" +
            "<div class='card-edit'>" +
                "<div class='close'>" +
                    "<i class='fas fa-times' onclick='fecharModal()'></i>" +
                "</div>" +
                "<img src='/view/images/Box.png'>" +
                "<h1>" + tipo + "</h1>" +
                "<form action='/controller/adminController.php' method='post'>" +
                    "<input type='hidden' value='"+ tipo +"' name='tipo'>" +
                    "<label>Alimentos</label>" +
                    "<input type='number' value='" + alimentos + "' name='alimentos'>" +
                    "<label>Higiene Pessoal</label>" +
                    "<input type='number' value='" + higiene + "' name='higiene'>" +
                    "<label>Valor</label>" +
                    "<input type='text' value='" + valor + "' name='alimentos'>" +
                    "<input type='submit' id='btn-edit' value='Salvar' name='btn-edit-cesta'>" +
                "</form>" +
            "</div>" +
        "</div>";
}

function abrirModalUser(name, email, password) {
    document.querySelector(".grid-card").classList.add("abaixo");
    document.querySelector(".grid-card").classList.remove("acima");
    document.querySelector(".grid-card-user").classList.add("abaixo");
    document.querySelector(".grid-card-user").classList.remove("acima");
    document.querySelector(".modal-admin").classList.remove("abaixo");
    document.querySelector(".modal-admin").classList.add("acima");
    
    document.getElementById("modal-admin").innerHTML = 
    "<div class='grid-modal'>" +
            "<div class='card-cestas'>" +
                "<div class='close'>" +
                    "<i class='fas fa-times' onclick='fecharModal()'></i>" +
                "</div>" +
                "<img src='/view/images/renan.png'>" +
                "<h1>" + name + "</h1>" +
                "<h5>Email - " + email + "</h5>" +
                "<h5>Senha - " + password + "</h5>" +
            "</div>" +
        "</div>";
}

function abrirModalEditUser(name, email, password) {
    document.querySelector(".grid-card").classList.add("abaixo");
    document.querySelector(".grid-card").classList.remove("acima");
    document.querySelector(".grid-card-user").classList.add("abaixo");
    document.querySelector(".grid-card-user").classList.remove("acima");
    document.querySelector(".modal-admin").classList.remove("abaixo");
    document.querySelector(".modal-admin").classList.add("acima");
    
    document.getElementById("modal-admin").innerHTML = 
    "<div class='grid-modal'>" +
            "<div class='card-edit'>" +
                "<div class='close'>" +
                    "<i class='fas fa-times' onclick='fecharModal()'></i>" +
                "</div>" +
                "<img src='/view/images/renan.png'>" +
                "<form action='/controller/userController.php' method='post'>" +
                    "<label>Nome</label>" +
                    "<input type='text' value='" + name + "' name='name'>" +
                    "<label>Email</label>" +
                    "<input type='text' value='" + email + "' name='email'>" +
                    "<label>Senha</label>" +
                    "<input type='password' value='" + password + "' name='password'>" +
                    "<input type='submit' id='btn-edit' value='Salvar' name='btn-edit-user'>" +
                "</form>" +
            "</div>" +
        "</div>";
}

function fecharModal() {
    document.getElementById("modal-admin").innerHTML = "";

    document.querySelector(".grid-card").classList.remove("abaixo");
    document.querySelector(".grid-card").classList.add("acima");
    document.querySelector(".grid-card-user").classList.remove("abaixo");
    document.querySelector(".grid-card-user").classList.add("acima");
    document.querySelector(".modal-admin").classList.remove("acima");
    document.querySelector(".modal-admin").classList.add("abaixo");
}