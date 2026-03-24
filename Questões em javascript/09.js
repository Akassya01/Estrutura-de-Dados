let estoque = 10;
let ativo = true;

if (estoque > 0 && ativo) {
  console.log("Produto pode ser vendido");
} else {
  console.log("Produto não pode ser vendido");
}

// outro teste
estoque = 0;
ativo = true;

if (estoque > 0 && ativo) {
  console.log("Produto pode ser vendido");
} else {
  console.log("Produto não pode ser vendido");
}