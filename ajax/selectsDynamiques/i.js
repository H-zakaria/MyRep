// $('#btn').click(() => {
//   $.ajax(
//     'i.php',
//     {
//       success: function (data) {
//         alert('Appel AJAX réussi')
//         alert('données reçues du serveur: ' + data)
//         const tab = ['alert', 'à', 'mal', 'ibu']
//         tab.forEach(t => {
//           alert(t)
//         })
//       },
//       error: function () {
//         alert("erreur lors de l'appel AJAX")
//       }
//     }
//   )
// })

// function getSelectVal() {
//   $(document).ready(function () {
//     console.log('i')
//     $.getJSON('Traitement.php', function () {
//       console.log('i')
//       $.each(res, () => {
//         console.log(res)
//       })
//     })
//   })
// }
// window.onload = getSelectVal;


//recup les voitures

let selected = false;
$.ajax(
  'Traitement.php',
  {
    success: function (data) {
      console.log('Appel AJAX réussi')
      console.log(data)
      // console.log(models.marque)
      try {
        const voitures = JSON.parse(data);
        // console.log (voitures)
        for (i = 0; i < voitures.length; i++) {                                   //insertion des options dans le select
          $('select').append(new Option(voitures[i].marque, voitures[i].marque))
        }

      } catch (e) {
        console.error("Parsing error:", e);
      }
    },
    error: function () {
      console.error("erreur lors de l'appel AJAX")
    }
  }
)


$('select').change(() => {            //qd une option est selectionée aller chercher les modeles correspondants cad modeles ayant la mm marque
  const marque = $('option:selected').val()
  $.ajax(
    'Traitement.php?model',
    {
      success: function (data) {

        try {
          const models = JSON.parse(data);
          if (!selected) {                                         //si c'est la premiere fois qu'on clique sur une des options du premier select
            const newSelect = $('<select>').appendTo('body')
            newSelect.attr('id', 's2')
            for (i = 0; i < models.length; i++) {                                   //insertion des options dans le select
              if (models[i].marque == marque) {
                newSelect.append(new Option(models[i].nomModel, models[i].nomModel))
              }
            }
            selected = true;
            console.log(selected)
          } else {                                    //si c'est la deuxieme fois qu'on selectionne une marque 
            console.log('here')
            $('#s2').empty()                                        //on supprime les anciennes options
            for (i = 0; i < models.length; i++) {                                   //insertion des options dans le select
              if (models[i].marque == marque) {
                $('#s2').append(new Option(models[i].nomModel, models[i].nomModel))
              }
            }
          }

        } catch (e) {
          console.error("Parsing error:", e);
        }
      },
      error: function () {
        console.error("erreur lors de l'appel AJAX")
      }
    }
  )
})

