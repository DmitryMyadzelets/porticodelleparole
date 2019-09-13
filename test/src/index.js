const ready = require('./modules/ready.js')
const tests = require('./tests.json')

// Expose tests' indexes to the questions to facilitate the `onchange` event processing
tests.forEach((test, testIndex) => test.questions.forEach(question => question.testIndex = testIndex))

const results = tests.map(test => ({
  caption: test.caption,
  answers: []
}))


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


function onChanged(d, index) {
  const answer = this.options[this.selectedIndex].value
  results[d.testIndex].answers[index] = answer
  console.log(results)
}


function updateQuestions(container, arr) {
  const tests = container.selectAll('div')
    .data(arr, test => test.caption)

  tests.exit().remove()

  const enter = tests.enter().append('div')
  enter.append('h2').html(test => 'Livello ' + test.caption)

  const questions = enter.append('ol').classed('questions', true)
    .selectAll('li')
    .data(test => test.questions)
    .enter()
      .append('li')
      .classed('question', true)
      .html(d => d.question)

  const select = questions.select('skip')
    .append('select')
    .on('change', onChanged)

  select.selectAll('option')
    .data(d => shuffle(d.answers['true'].concat(d.answers['false'])))
    .enter()
      .append('option')
      .text(d => d)

  select.append('option', ':first-child')
    .attr('selected', 'selected')
    .attr('disabled', '')
    .style('display', 'none')
    .html('&#160;')
}


function updateButtons(buttons, a) {
  buttons.each(function (b) {
    d3.select(this).classed('selected', a == b)
  })
}


function calculate() {
  const questions = d3.selectAll('.question')

  const counter = {
    answered: 0,
    valid: 0,
    total: 0
  }

  questions.each(function (d, index) {
    const el = d3.select(this).select('select').node()
    const answer = el.options[el.selectedIndex].value

    const valid = d.answers['true'].includes(answer)
    const wrong = d.answers['false'].includes(answer)
    const answered = valid || wrong

    counter.valid += valid | 0
    counter.answered += answered | 0
    counter.total += 1

  })

  d3.select('#test-result').html(function () {
    let text = ''

    if (counter.answered < counter.total) {
      text = '<p>Per ottenere il risultato devi rispondere a tutte le domande del livello.</p>'
      text += '<p>Adesso hai risposto per ' + counter.answered + ' domande su ' + counter.total + '.</p>'
    } else {
      const treshold = 15
      if (counter.valid < treshold) {
        text = '<p>Hai risposto per tutte le domande di cui ' + counter.valid + ' sono valide.</p>'
        text += '<p>Ci voule almeno ' + treshold + ' risposte corrette su ' + counter.total + ' per passare il livello.</p>'
      } else {
        text = '<p>Ottimo! Hai risposto per tutte le domande di cui ' + counter.valid + ' sono valide.<p>'
        text += '<p>Il livello è superato.</p>'
      }
    }

    return text
  })
}


ready(function init () {
  const container = d3.select('#test-content')

  const buttons = d3.select('#level-buttons')
    .selectAll('li')
    .data(tests)
    .enter()
      .append('li')
      .html(d => d.caption)
      .on('click', update)

  function update (d) {
    updateQuestions(container, [d])
    updateButtons(buttons, d)
    calculate()
  }

  update(tests[0], 0)

  d3.select('#button-calculate').on('click', calculate)
})