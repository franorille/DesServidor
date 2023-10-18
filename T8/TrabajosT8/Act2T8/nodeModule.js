function sumar(a, b) {
  return a + b;
}

function restar(a, b) {
  return a - b;
}
function multiplicar(a, b) {
  return a * b;
}
function dividir(a, b) {
  return a / b;
}
function esPrimo(a) {
  if (a <= 1) {
    return false;
  
}
  for (let i = 2; i < a; i++) {
    if (a % i === 0) {
      return false;
    }
  }
  return true;
}
function esPar(a) {
    if(a%2===0){
        return true;
    }else{
        return false;
    }
}
function factorial(a) {
    let resultado=1;
    for (let i=1;i<=a;i++){
        resultado=resultado*i;
    }
    return resultado;
}
exports.sumaYa=sumar;
exports.restaYa=restar;
exports.multiplicaYa=multiplicar;
exports.divideYa=dividir;
exports.esParYa=esPar;
exports.esPrimoYa=esPrimo;
exports.factorialYa=factorial;

  