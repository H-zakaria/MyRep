
//ex1

let ckboxes = document.querySelectorAll('.ckbox');
let check = document.querySelector('#check');
let uncheck = document.querySelector('#uncheck');

check.addEventListener('click', function (e) {
  checkBoxes(true);
  console.log('ckeck');
})

uncheck.addEventListener('click', function (e) {
  checkBoxes(false);
  console.log('unckeck');
})

function checkBoxes(bool) {
  ckboxes.forEach(checkBox => checkBox.checked = bool);
}

//ex2
//foreach pas applicable sur htmlCollection
//

let noBr = document.querySelector('#noBr');
let breaks = document.querySelectorAll('div br');
// console.log(noBr);
console.log(breaks);

let on = true;
noBr.addEventListener('click', (e) =>
  showBreaks()
);

function showBreaks() {
  if (on) {
    breaks.forEach(br => br.style.display = 'none');
    on = false;
  } else {
    breaks.forEach(br => br.style.display = 'block');
    on = true;
  }
}

//ex3

// let inputs = document.querySelectorAll('table input');
// inputs.forEach(input => {
//   input.addEventListener('click', (e) => {
//     outsideClick(input)
//   }
//   )
// })

// function outsideClick(lastInput) {
//   document.addEventListener('click', function (e) {
//     if (!lastInput.contains(e.target)) {
//       lastInput.readOnly = true;
//     }
//   })
// }
const cellules = document.querySelectorAll("td");
//si la cellule est vide ne marche plus
cellules.forEach((cellule) => {
  cellule.addEventListener("click", e => {
    // vérifier que le contenu du TD est bien du texte
    if (e.target.firstChild != null && e.target.firstChild.nodeType === 3) {
      const input = document.createElement("input");
      const existentText = e.target.innerHTML;
      input.setAttribute("type", "text");
      input.setAttribute("value", existentText);
      // suppression du contenu actuel du TD
      e.target.innerHTML = "";
      e.target.appendChild(input);
      input.focus();
      input.setSelectionRange(input.value.length, input.value.length);

      // déclarer l'événement focusout (détécté lors du perte du focus sur l'input)
      input.addEventListener("focusout", e => {
        e.target.parentElement.innerHTML = e.target.value;
      })
    }
  })
})

// inputs.forEach(input => {//onkeyUp
//   input.addEventListener('change', () => {
//     input.parentElement.appendChild(document.createTextNode(input.value));
//     console.log(input);
//     input.style.display = 'none';
//     console.log('tot');
//   })
// })

// tds.forEach(td => {
//   td.addEventListener('click', () => {
//     td.firstChild.style.visibility = 'visible';
//   })
// })
