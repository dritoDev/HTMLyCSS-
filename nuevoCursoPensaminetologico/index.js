//Encontrando el número más grande de un arreglo...

let numeros = [5,10,15,60,8]
let numeroMaximo = 0;
let tamano = numeros.length

for (let i=0; i< tamano; i++) {
  if(numeroMaximo < numeros[i]) {
    numeroMaximo = numeros[i]
  }
}

console.log(numeroMaximo)