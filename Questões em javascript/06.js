let vendas = 8000;
let comissao;

if (vendas <= 10000) {
  comissao = vendas * 0.05;
} else {
  comissao = vendas * 0.07;
}

console.log(comissao);

// teste
vendas = 15000;

if (vendas <= 10000) {
  comissao = vendas * 0.05;
} else {
  comissao = vendas * 0.07;
}

console.log(comissao);