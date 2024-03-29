const ready = require('./modules/ready.js')
const tests = require('./tests.json')
const ls = require('local-storage')

// Expose tests' indexes to the questions to facilitate the `onchange` event processing
tests.forEach((test, testIndex) => test.questions.forEach(question => question.testIndex = testIndex))

const results = []
let showWrong = false

function loadResults() {
  tests.forEach((test, testIndex) => {
    results[testIndex] = ls(testIndex) || {
      caption: test.caption,
      answers: []
    }
  })
}


function saveResult(testIndex) {
  try {
    ls(testIndex, results[testIndex])
  } catch (err) {
    console.error(err)
  }
}

function saveResults() {
    tests.forEach((ignore, testIndex) => saveResult(testIndex))
}


function shuffle(arr) {
  let j, temp
  for (let i = 0; i < arr.length; i += 1) {
    j = Math.floor(Math.random() * (i + 1))
    temp = arr[j]
    arr[j] = arr[i]
    arr[i] = temp
  }
  return arr
}


function onChange(d, index) {
  const answer = this.options[this.selectedIndex].value
  results[d.testIndex].answers[index] = answer

  saveResult(d.testIndex)
  showWrongAnswer(this, d, answer)
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
    .on('change', onChange)

  const options = select.selectAll('option')
    .data(d => shuffle(d.answers['true'].concat(d.answers['false'])))
    .enter()
      .append('option')
      .html(d => d)
      .filter(function (d) {
        return d3.select(this.parentNode).datum().answer == d
      })
      .attr('selected', 'selected')

  const notAnswerd = select.filter(d => d.answer == undefined)

  notAnswerd.append('option', ':first-child')
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

// Calculate results of the current test, and show it
function countResult() {
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

  return counter
}

function showWrongAnswer(el, d, answer) {
  const wrong = showWrong && d.answers['false'].includes(answer)
  d3.select(el).classed('wrong', wrong)
}

function showWrongAnswers(allowed) {
  // Set global variable for onChange callback
  showWrong = allowed
  if (!allowed) return

  const questions = d3.selectAll('.question')

  questions.each(function (d, index) {
    const el = d3.select(this).select('select').node()
    const answer = el.options[el.selectedIndex].value
    showWrongAnswer(el, d, answer)
  })
}

function showResult(counter) {
  d3.select('#test-result').html(function () {
    let text = ''

    if (counter.answered < counter.total) {
      text += '<p>Per ottenere il risultato devi rispondere a tutte le domande del livello.</p>'
      text += '<p>Adesso hai risposto a ' + counter.answered + ' domande su ' + counter.total + '.</p>'
    } else {
      const treshold = 15 //75%
       text += '<p>Hai risposto corretamente a ' + counter.valid + ' domande su ' + counter.total + '.<p>'
      if (counter.valid < treshold) {
        text += '<p>Devi rispondere corretamente ad almeno ' + treshold + ' domande su ' + counter.total + ' per passare il livello.</p>'
      } else {
        text += '<p>Ottimo! Il livello è <mark>superato</mark>.</p>'
      }
      text += '<p>Contattaci per fissare l’incontro personale gratuito e concludere la verifica del tuo livello con un colloquio orale.</p>'
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
      .on('click', showTest)

  function showTest(test, testIndex) {
    // Restore user's results for this test
    test.questions.forEach((question, index) => question.answer = results[testIndex].answers[index])

    showWrongAnswers(false)

    updateQuestions(container, [test])
    updateButtons(buttons, test)
    showResult(countResult())
  }

  loadResults()
  showTest(tests[0], 0)

  d3.select('#button-calculate').on('click', ignore => {
    const counter = countResult()
    const allAnswered = counter.answered == counter.total

    showResult(counter)

    if (allAnswered) {
      showWrongAnswers(true)
    }
  })
})
