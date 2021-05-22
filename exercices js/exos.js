//ex1 afficher la valeur absolue d'un nombre
function valeurAbsolue(nrb) {
  if (nbr < 0) {
    return nbr * (-1);
  } else {
    return nbr;
  }
}
let nbr = 5;
console.log(valeurAbsolue(nbr));
nbr = -5;
console.log(valeurAbsolue(nbr));

//2- comparer deux entiers;
function comparerEntiers(nbr1, nbr2) {
  if (nbr1 === nbr2) {
    console.log(nbr1 + " et " + nbr2 + " sont egaux.");
  } else if (nbr1 < nbr2) {
    console.log(nbr2 + " est supérieur à " + nbr1);
  } else {
    console.log(nbr1 + " est supérieur à " + nbr2);
  }
}
comparerEntiers(5, 25);

//3-savoir si nbr est pair ou impair?
function oddEven(nbr) {
  if (nbr % 2 == 0) {
    console.log(nbr + " est pair");
  } else {
    console.log(nbr + " est impair");
  }
}
oddEven(1);
oddEven(2);

//4-calculer le factoriel d'un nombre
function factoriel(nbr) {
  let res = 1;
  let nbr2 = nbr;
  for (i = nbr; i > 0; i--) {
    res *= i;
  }
  return res;
}
console.log(factoriel(6));

// 5 - ecrire un programme JS (organigramme permettant d'afficher toutes les tables de multiplication de 1 à 10);

function showMultiplicationTables() {

  for (i = 1; i < 11; i++) {
    for (j = 1; j < 11; j++) {
      console.log(i + ' x ' + j + ' = ' + i * j);
    }
  }
}
showMultiplicationTables();
