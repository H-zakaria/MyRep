
const bigDiv = document.createElement('div');
const form = document.createElement('form');
bigDiv.appendChild(form);
const fieldset = document.createElement('fieldset');
form.appendChild(fieldset);
const legend = document.createElement('legend');
const legContent = document.createTextNode('Uploader une image');
legend.appendChild(legContent);

const smallDiv = document.createElement('div');
fieldset.appendChild(smallDiv);
const label = document.createElement('label');
label.setAttribute('for', 'inputUpload');
const labelTxt = document.createTextNode('Image à uploader :')
label.appendChild(labelTxt);
smallDiv.appendChild(label);

const input1 = document.createElement('input');
input1.setAttribute('type', 'file');
input1.setAttribute('name', 'inputUpload');
input1.setAttribute('id', 'inputUpload');

smallDiv.appendChild(input1);

for (i = 0; i < 2; i++) {
  smallDiv.appendChild(document.createElement('br'));
}

const input2 = document.createElement('input');
input2.setAttribute('type', 'submit');
input1.setAttribute('value', 'Envoyer');
smallDiv.appendChild(input2);

document.body.appendChild(bigDiv);
