(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
  typeof define === 'function' && define.amd ? define(factory) :
  (global = global || self, global.Hy52fWS8r = factory());
}(this, function () { 'use strict';

  var ready = function (callback) {
      // Motivation:
      // https://gomakethings.com/a-native-javascript-equivalent-of-jquerys-ready-method/
      // Docs:
      // https://developer.mozilla.org/en/docs/Web/API/Document/readyState
    var loading, done;

    done = function () {
      document.removeEventListener('readystatechange', loading);
      window.removeEventListener('load', done);
      callback();
    };

    loading = function () {
      if (document.readyState === 'loading') {
        return true
      }
      done();
    };

    if (loading()) {
      document.addEventListener('readystatechange', loading);
      window.addEventListener('load', done);
    }
  };

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
          .append('div');

      tests.append('h2').text(test => test.caption);
      const questions = tests.append('ol').classed('questions', true).selectAll('li').data(test => test.questions)
        .enter()
          .append('li')
          .classed('question', true)
          .html(d => d.question);

    const select = questions.select('skip').append('select');

    select.selectAll('option')
      .data(d => shuffle(d.answers.true.concat(d.answers.false)))
      .enter().append('option').text(d => d);

    select.insert('option', ':first-child')
      .attr('selected', 'selected')
      .attr('disabled', '')
      .style('display', 'none')
      .html('&#160;');
    });
  });

  var src = {

  };

  return src;

}));
