
// $('#btn').click(() => {
//   console.log('hi')
//   const objXML = new XMLHttpRequest()
//   objXML.onreadystatechange = function () {
//     if (objXML.readyState == 4) {
//       if (objXML.status === 200) {
//         alert(objXML.responseText)
//       } else {
//         alert('Error Code: ' + objXML.status)
//         alert('Error Message: ' + objXML.statusText)
//       }
//     }
//   }
//   objXML.open('GET', 'i.php')
//   objXML.send()
// })


$('#btn').click(() => {
  $.ajax(
    'i.php',
    {
      success: function (data) {
        alert('Appel AJAX réussi')
        alert('données reçues du serveur: ' + data)
        const tab = ['alert', 'à', 'mal', 'ibu']
        tab.forEach(t => {
          alert(t)
        })
      },
      error: function () {
        alert("erreur lors de l'appel AJAX")
      }
    }
  )
})