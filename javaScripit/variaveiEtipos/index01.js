//solucao 1

function verificaPalindromo(string) {
    if(!string) return;

    return string.split("").reverse().join("") === string;
}

console.log(verificaPalindromo("gato"))

// solucao 2