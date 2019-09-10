const ready = require('./modules/ready.js')


function shuffle(arr) {
  let j, temp;
  for (let i = 0; i < arr.length; i += 1) {
    j = Math.floor(Math.random() * (i + 1));
    temp = arr[j];
    arr[j] = arr[i];
    arr[i] = temp;
  }
  return arr;
}


ready(function init () {
  d3.json('index.json', function (d) {
    const tests = d3.select('#test-content')
      .selectAll('div').data(Object.keys(d).map(key => d[key]))
      .enter()
        .append('div')

    tests.append('h2').text(test => test.caption)
    const questions = tests.append('ol').classed('questions', true).selectAll('li').data(test => test.questions)
      .enter()
        .append('li')
        .classed('question', true)
        .html(d => d.question)

  const select = questions.select('skip').append('select')

  select.selectAll('option')
    .data(d => shuffle(d.answers.true.concat(d.answers.false)))
    .enter().append('option').text(d => d)

  select.insert('option', ':first-child')
    .attr('selected', 'selected')
    .attr('disabled', '')
    .style('display', 'none')
    .html('&#160;')
  })
})