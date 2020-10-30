var campos = [];

var resquest = $

function cadastro() {

    campos = [];

    var array = [
        { name: "Nome", value: document.getElementById("nome").value },
        { name: "Data de nascimento", value: document.getElementById("data").value },
        { name: "Sexo", value: document.getElementById("sexo").value },
        { name: "Estado civil", value: document.getElementById("civil").value },
        { name: "Telefone", value: document.getElementById("tel").value },
        { name: "Endereço", value: document.getElementById("endereco").value },
        { name: "Email", value: document.getElementById("email").value },
        { name: "Confirme o Email", value: document.getElementById("re-email").value },
        { name: "Senha", value: document.getElementById("senha").value },
        { name: "Confirme a Senha", value: document.getElementById("re-senha").value }
    ];

    array.forEach(verifica);

    if (campos.length > 0) {
        alert("PREEENCHA OS SEGUINTES CAMPOS: \n" + campos.join('\n'))
        return false;
    }

    if (!compara(array[6].value, array[7].value)) {
        alert("Email não corresponde!")
        return false;
    }

    if (!compara(array[8].value, array[9].value)) {
        alert("Senha não corresponde!")
        return false;
    }

    ajax(array[0].value, array[6].value, array[8].value)

    return true;
}

function verifica(item) {

    if (item.value === "") {
        campos.push(item.name)
    }

}

function compara(a, b) {

    if (a === b) {
        return true;
    } else {
        return false;
    }

}

function somenteNumeros(e) {
    var charCode = e.charCode ? e.charCode : e.keyCode;

    if (charCode != 8 && charCode != 9) {
        if (charCode < 48 || charCode > 57) {
            return false;
        }
    }
}