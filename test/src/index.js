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
  d3.json('index.json', function (obj) {

    const container = d3.select('#test-content')

    const d = Object.keys(obj).map(key => obj[key])

    const buttons = d3.select('#level-buttons')
      .selectAll('li')
      .data(d)
      .on('click', d => update(container, [d]))

    update(container, [d[0]])

    function update(container, arr) {
      buttons.each(function (d) {
        d3.select(this).classed('selected', arr.indexOf(d) > -1)
      })

      const tests = container.selectAll('div').data(arr, test => test.caption)

      tests.exit().remove()

      const enter = tests.enter().append('div')
      enter.append('h2').html(test => test.caption)

      const questions = enter.append('ol').classed('questions', true)
        .selectAll('li').data(test => test.questions)
        .enter()
          .append('li')
          .classed('question', true)
          .html(d => d.question)

      const select = questions.select('skip').append('select')

      select.selectAll('option')
        .data(d => shuffle(d.answers.true.concat(d.answers.false)))
        .enter().append('option').text(d => d)

      select.append('option', ':first-child')
        .attr('selected', 'selected')
        .attr('disabled', '')
        .style('display', 'none')
        .html('&#160;')

    }
  })
})