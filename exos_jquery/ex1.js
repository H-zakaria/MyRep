// $("p").hide();

// console.log($('#text').innerHTML);

$("#jsstyle").click(function () {
  $("#text").css('color', 'red').css('font-size', '50px');
});

$("#values-btn").click(() => {
  const g = $("#ggl");
  console.log(g.attr('href'));
  console.log(g.attr('hreflang'));
  console.log(g.attr('rel'));
  console.log(g.attr('target'));
  console.log(g.attr('type'));
});
const tds = document.querySelectorAll('td')

// tds.forEach(td => {
//   td.addEventListener('click', (e) => {
//     console.log(e.target.parentElement.rowIndex + " " + e.target.cellIndex)
//   })
// })

$('td').click((e) => {
  console.log('row: ' + e.target.parentElement.rowIndex + " col: " + e.target.cellIndex)
})
$(document).ready(function () {
  $('#f').submit((e) => {
    const row = $('#row').val();
    const col = $('#col').val();
    const content = $('#content').val();
    reWriteTd(col, row, content);
    e.preventDefault();
  })
}
)
function reWriteTd(col, row, content) {
  $('#myTable').find('tr:eq(' + (row) + ')').find('td:eq(' + (col) + ')').html(content);

}

// 4

$('#go').click(() => {
  createTable($('#lines').val(), $('#colonnes').val())
})
function createTable(rows, cols) {

  const table = $('<table>')
  table.css('border-collapse', 'collapse').css('background-color', '#333')
  for (i = 0; i < rows; i++) {
    const tr = $('<tr>')
    for (j = 0; j < cols; j++) {
      const td = $('<td>')
      td.text('line: ' + (i + 1) + ', col: ' + (j + 1))
      td.css('border', '1px solid #fff').css('padding', '20px 50px').css('color', '#fff')
      tr.append($(td))
    }
    table.append(tr)
  }
  $('#table_div').append(table)

}

//5
// const tab = []
// $(document).ready(function () {
const options = $('#colorSelect option')
$.each(options, function () {
  console.log($(this).val())
  // tab.push($(this).val())
});
// })

console.log(options.length)
// console.log(tab.join(", "))

// $(document).ready(function () {
$('#remove-btn').click(() => {
  // var parentTag = $('#remove-btn').parent().get(0).tagName;
  // console.log(parentTag)
  // $('#remove-btn').parent().css("background-color", "red");
  $('#colorSelect').children('option:selected').remove();
})
// })
