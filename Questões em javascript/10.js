let valorCompra = 250;
let vip = false;
let frete;

if (valorCompra >= 200) {
  frete = 0;
} else if (vip) {
  frete = 10;
} else {
  frete = 20;
}

console.log("Frete:", frete);

// teste
valorCompra = 150;
vip = true;

if (valorCompra >= 200) {
  frete = 0;
} else if (vip) {
  frete = 10;
} else {
  frete = 20;
}

console.log("Frete:", frete);

// teste
valorCompra = 150;
vip = false;

if (valorCompra >= 200) {
  frete = 0;
} else if (vip) {
  frete = 10;
} else {
  frete = 20;
}

console.log("Frete:", frete);