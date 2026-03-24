let compra = 200;
let vip = true;
let inadimplente = true;

if ((compra > 300 || vip) && !inadimplente) {
  console.log("Ganha desconto");
} else {
  console.log("Não ganha desconto");
}