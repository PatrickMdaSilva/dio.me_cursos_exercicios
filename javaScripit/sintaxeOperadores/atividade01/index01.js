function calcularArea (lado1, lado2){
    return lado1 * lado2
}

console.log(calcularArea(3,3))

function avalieNumero (n1, n2){
    var soma = n1 + n2
    var maiorMenor = " " 
    if(soma < 10) {
        var maiorMenor =" e é menor que 10"
        }else if(soma > 10 && soma < 20){
            var maiorMenor = " e é maior que 10"
            }else
                var maiorMenor = " e é maior que 20"
    if(n1 === n2){
        console.log(`Os numeros ${n1} e ${n2} são iguais. Sua soma é ${soma} ${maiorMenor}`) 
    }else
        console.log(`Os numeros ${n1} e ${n2} são diferentes. Sua soma é ${soma} é ${maiorMenor}`)   
}

avalieNumero(3,3)
avalieNumero(5,2)
avalieNumero(10,5)
avalieNumero(100,100)