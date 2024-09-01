function convertir() {
    const cantidad = document.getElementById("cantidad").value;
    const Moneda1 = document.getElementById("Moneda1").value;
    const Moneda2 = document.getElementById("Moneda2").value;

    
    const preciosMonedas = {
        "USD": { "EUR": 0.90, "MXN": 19.73, "GBP": 0.76 },
        "EUR": { "USD": 1.11, "MXN": 21.82, "GBP": 0.84 },
        "MXN": { "USD": 0.05, "EUR": 0.046, "GBP": 0.039 },
        "GBP": { "USD": 1.31, "EUR": 1.19, "MXN": 25.90 }
    };

    let cantidadConvertida;

    if (Moneda1 === Moneda2) {
        cantidadConvertida = cantidad;
    } else {
        cantidadConvertida = cantidad * preciosMonedas[Moneda1][Moneda2];
    }

    
    document.getElementById("result").innerText = `${cantidad} ${Moneda1} son ${cantidadConvertida.toFixed(2)} ${Moneda2}`;

    
}