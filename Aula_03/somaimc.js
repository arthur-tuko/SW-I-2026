function calculo() {
    var peso = parseFloat(document.getElementById("peso").value);
    var altura = parseFloat(document.getElementById("altura").value);

    var soma = peso / (altura * altura);
    let magreza;
    let normal;
    let sobrepeso;
    let obeso;
    let obesidade_grave;

    if (soma < 18.5) {
        document.getElementById("valorimc").innerText = "Voce está com: " + "magreza";
    } else if (soma >= 18.5 &&  soma <= 24.9 ) {
        document.getElementById("valorimc").innerText = "Voce está com: " + "normal";
    }else if (soma >= 25.0 &&  soma <= 29.9 ) {
        document.getElementById("valorimc").innerText = "Voce está com: " + "sobrepeso";
    }else if (soma >= 30.0 &&  soma <= 49.9 ) {
        document.getElementById("valorimc").innerText = "Voce está com: " + "obeso";
    }else{
        document.getElementById("valorimc").innerText = "Voce está com: " + "obesidade_grave";
    }
}