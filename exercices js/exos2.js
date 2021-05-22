//creer div (id= divTP1)
const elDiv = document.createElement('div');
//donner id
elDiv.setAttribute('id', 'divTP1');

//remplir
//donner text
const text_1 = document.createTextNode("Le");
elDiv.appendChild(text_1);

const strong_1 = createStrongText('World Wide Web Consortium');
elDiv.appendChild(strong_1);

const text_2 = document.createTextNode(", abrégé par le sigle ");
elDiv.appendChild(text_2);

const strong_2 = createStrongText('W3C');
elDiv.appendChild(strong_2);

const text_3 = document.createTextNode(", est un ");
elDiv.appendChild(text_3);

const a1 = createLink('http://fr.wikipedia.org/wiki/Organisme_de_normalisation', 'Organisme de normalisation', 'organisme de standardisation');
elDiv.appendChild(a1);

const text_4 = document.createTextNode(" à but non-lucratif chargé de promouvoir la compatibilité des technologies du ");
elDiv.appendChild(text_4);

const a2 = createLink('http://fr.wikipedia.org/wiki/World_Wide_Web', 'World Wide Web', 'World Wide Web');
const a3 = document.createElement('a');
elDiv.appendChild(a2);

//inserer dans body
document.body.appendChild(elDiv);

function createStrongText(content) {
  const strong = document.createElement('strong');
  const strong_txt = document.createTextNode(content);
  strong.appendChild(strong_txt);
  return strong;
}
function createLink(href, title, content) {
  const a = document.createElement('a');
  a.setAttribute('href', href);
  a.setAttribute('title', title);
  const text_a = document.createTextNode(content);
  a.appendChild(text_a);
  return a;
}
//window location href
// function paramettres -> optionel param = "";