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

  var tests = [{caption:"А1",questions:[{question:"<skip></skip> они живут?",answers:{"true":["Где"],"false":["Когда","Куда"]}},{question:"Ресторан <skip></skip> <q>Грабли</q>.",answers:{"true":["называется"],"false":["имя","зовут"]}},{question:"Мой друг <skip></skip> в университете.",answers:{"true":["учится"],"false":["изучает","учит"]}},{question:"Я прекрасно <skip></skip> по-русски.",answers:{"true":["говорю"],"false":["говорят","скажу"]}},{question:"В праздники люди любят гулять <skip></skip>.",answers:{"true":["на площади"],"false":["на площаде","в площади","площаде"]}},{question:"Они не <skip></skip> русский язык.",answers:{"true":["понимают"],"false":["понять","понимаем"]}},{question:"Она очень <skip></skip>.",answers:{"true":["красивая"],"false":["красивой","красивый"]}},{question:"Мы живём в <skip></skip>.",answers:{"true":["Москве"],"false":["Москва","Москву"]}},{question:"Москва это <skip></skip> город.",answers:{"true":["наш"],"false":["наша","наше"]}},{question:"<skip></skip> 25 лет.",answers:{"true":["Мне"],"false":["У меня","Меня"]}},{question:"<skip></skip> есть собака?",answers:{"true":["У тебя"],"false":["Тебе","Тебя"]}},{question:"Обычно я встаю рано <skip></skip>.",answers:{"true":["утром"],"false":["вечером","днём"]}},{question:"Я подарила <skip></skip> сувенир.",answers:{"true":["Анне"],"false":["Анни","Анну"]}},{question:"Сегодня вечером мы <skip></skip> дома.",answers:{"true":["ужинаем"],"false":["завтракаем","обедаем"]}},{question:"Вчера я долго <skip></skip>.",answers:{"true":["работал"],"false":["работаю","работало"]}},{question:"Русские любят есть салат <skip></skip>.",answers:{"true":["с майонезом"],"false":["майонез","из майонеза"]}},{question:"Это карандаш <skip></skip>.",answers:{"true":["Виктора"],"false":["Виктору","Виктор"]}},{question:"Мой отец <skip></skip> говорит по-английски.",answers:{"true":["хорошо"],"false":["хороший","хорошая"]}},{question:"Ты любишь заниматься <skip></skip>?",answers:{"true":["спортом"],"false":["спорт","спорте"]}},{question:"Я часто <skip></skip> в отпуск.",answers:{"true":["езжу в Санкт-Петербург"],"false":["хожу в Санкт-Петербург","езжу в Санкт-Петербурге","еду в Санкт-Петербург"]}}]},{caption:"А2",questions:[{question:"Это моя младшая сестра, а вот это &mdash; <skip></skip>.",answers:{"true":["старшая"],"false":["старая","большая"]}},{question:"Петя, иди <skip></skip>, помоги мне найти ключи!",answers:{"true":["сюда"],"false":["здесь","там"]}},{question:"Антон хочет <skip></skip> новые стихи.",answers:{"true":["выучить"],"false":["учить","изучить","заниматься"]}},{question:"Извините, вы не <skip></skip>, как вас зовут.",answers:{"true":["сказали"],"false":["рассказали","разговаривали"]}},{question:"Мы с подругой договорились <skip></skip> у входа в метро.",answers:{"true":["встретиться"],"false":["встречать","встретить"]}},{question:"Я где-то <skip></skip> этого человека.",answers:{"true":["видел"],"false":["смотрел","помнил"]}},{question:"<skip></skip> сорок пять лет.",answers:{"true":["Нашему директору"],"false":["Наш директор","Нашего директора","С нашим директором"]}},{question:"Жаль, что у нас тогда не было <skip></skip>.",answers:{"true":["этой машины"],"false":["эта машина","эту машину","на этой машине"]}},{question:"Анна написала мне <skip></skip>.",answers:{"true":["о своих друзьях"],"false":["свои друзья","своих друзей","своим друзьям"]}},{question:"Каникулы начинаются <skip></skip>.",answers:{"true":["через неделю"],"false":["неделю назад","через неделя","неделя"]}},{question:"Мой брат женился <skip></skip>.",answers:{"true":["август"],"false":["первого августа","первое августа"]}},{question:"Я долго <skip></skip> его номер телефона.",answers:{"true":["вспоминала"],"false":["вспомнила","вспомню"]}},{question:"Я <skip></skip> визу в Россию и скоро уезжаю.",answers:{"true":["получил"],"false":["получил","брал"]}},{question:"Ты <skip></skip> сегодня в цирк?",answers:{"true":["идёшь"],"false":["ходишь","будешь ходить"]}},{question:"До музея мы <skip></skip> на автобусе.",answers:{"true":["ехали"],"false":["ходили","шли"]}},{question:"Летом я часто <skip></skip> на дачу.",answers:{"true":["буду ездить"],"false":["поеду","еду"]}},{question:"&mdash; Игорь дома, &mdash; Нет, он <skip></skip> в кино.",answers:{"true":["пошёл"],"false":["шёл","пришёл","подошёл"]}},{question:"Врач <skip></skip> из кабинета, и через пять минут вернулся.",answers:{"true":["вышел"],"false":["шёл","вошёл","ушёл"]}},{question:"Я сказал Михаилу, <skip></skip> он купил продукты.",answers:{"true":["чтобы"],"false":["что","поэтому"]}},{question:"Расскажи, <skip></skip> ты встретил в клубе?",answers:{"true":["кого"],"false":["кто","кому","с кем"]}}]},{caption:"B1",questions:[{question:"Я еду в Россию <skip></skip>.",answers:{"true":["на один год"],"false":["один год","за один год"]}},{question:"Дома нет сахара, я его <skip></skip>.",answers:{"true":["куплю"],"false":["покупаю","буду покупать"]}},{question:"Мы поднялись <skip></skip>.",answers:{"true":["наверх"],"false":["наверху","вниз"]}},{question:"Банк работает <skip></skip> 9 часов.",answers:{"true":["с"],"false":["во время","от","в","за"]}},{question:"После жаркого дня, наконец, <skip></skip> вечер.",answers:{"true":["наступил"],"false":["выступил","поступил"]}},{question:"Мы проехали мимо <skip></skip>.",answers:{"true":["остановки"],"false":["остановку","остановке"]}},{question:"Сейчас в магазине перервы до <skip></skip>.",answers:{"true":["трёх часов"],"false":["три часа","трём часам"]}},{question:"У меня болит рука, завтра пойду <skip></skip>.",answers:{"true":["к хирургу"],"false":["с хирургом","у хирурга"]}},{question:"Сегодня по телевизору идёт <skip></skip>.",answers:{"true":["интересная передача"],"false":["интересную передачу","интересной передачей","интересной передачи"]}},{question:"Молодые артисты будут участвовать <skip></skip>.",answers:{"true":["в новой комедии"],"false":["новую комедию","с новой комедией"]}},{question:"Архангельск стоит на берегу <skip></skip>.",answers:{"true":["Белого моря"],"false":["Белым морем","Белому морю","Белом море"]}},{question:"Работа водителя автобуса требует <skip></skip>.",answers:{"true":["большого внимания"],"false":["большое внимание","с большим вниманием","о большом внимании"]}},{question:"Юрий Гагарин полетел в космос <skip></skip>.",answers:{"true":["в 1961-ом году"],"false":["1961-го года","1961-й год"]}},{question:"Борис начал работать 30 марта <skip></skip>.",answers:{"true":["1961-го года"],"false":["1961-й год","в 1961-ом года"]}},{question:"Я знаю писателя, <skip></skip> вы обсуждали.",answers:{"true":["которого"],"false":["который","которому","о котором"]}},{question:"Банк уже закрыт, я не успел <skip></skip> деньги.",answers:{"true":["поменять"],"false":["поменяю","менять"]}},{question:"Мне <skip></skip> звонил сегодня?",answers:{"true":["кто-нибудь"],"false":["кое-кто","кто-то"]}},{question:"Мне надо о <skip></skip> с тобой поговорить.",answers:{"true":["кое-чём"],"false":["чём-нибудь","чём-то"]}},{question:"Что вы делали вчера? Мы <skip></skip> детей в кинотеатр.",answers:{"true":["водили"],"false":["вели","ведём"]}},{question:"Она первый раз в Москве? Нет, она <skip></skip> сюда в прошлом году.",answers:{"true":["приезжала"],"false":["ездила","приехала"]}}]},{caption:"B2",questions:[{question:"На заседании Совета с кратким сообщением <skip></skip> ученый секретарь Смирнова.",answers:{"true":["выступила"],"false":["выступили","выступал","выступил"]}},{question:"В этом году сборник тезисов <skip></skip> актуальным проблемам внешней политики.",answers:{"true":["посвящён"],"false":["посвящены","посвящённый","посвящено"]}},{question:"До отхода поезда <skip></skip> полчаса, успеем выпить по чашечке кофе.",answers:{"true":["осталось"],"false":["остались","остаются","останутся"]}},{question:"В библиотеке современной поэзии, которую я начал собирать, <skip></skip> около 500 книг.",answers:{"true":["насчитывается"],"false":["насчитывались","насчитываются","насчитается"]}},{question:"Приведённые вами доказательства представляются мне <skip></skip>.",answers:{"true":["неубедительными"],"false":["неубедительные","не убедительно","не убедительны"]}},{question:"Всё то, что рассказал в своем выступлении этот выдающийся политик, <skip></skip>.",answers:{"true":["интересно и ново"],"false":["интересное и новое","интересный и новый","интересен и нов"]}},{question:"Ужасно болит горло. Не <skip></skip> ни кусочка.",answers:{"true":["проглотить"],"false":["глотать","заглотить"]}},{question:"Куда-то пропали книги! Кто <skip></skip> в аудиторию?",answers:{"true":["входил"],"false":["вошёл","был"]}},{question:"Не <skip></skip> я вчера на свидание, мы бы не поссорились.",answers:{"true":["опоздай"],"false":["опаздывай","опаздываю"]}},{question:"&mdash; Тебе понравился спектакль? &mdash; Трудно <skip></skip> однозначно. И да, и нет.",answers:{"true":["ответить"],"false":["отвечать","решить","решать"]}},{question:"С вашим предложением трудно не <skip></skip>. Оно учитывает все наши замечания.",answers:{"true":["согласиться"],"false":["соглашаться","спорить","поспорить"]}},{question:"Хорошо, если ваши желания соответствуют <skip></skip>.",answers:{"true":["вашим возможностям"],"false":["ваши возможности","для ваших возможностей","с вашими возможностями"]}},{question:"Остановки для отдыха гонщики делали всего <skip></skip> минут.",answers:{"true":["на несколько"],"false":["несколько","за несколько","в несколько"]}},{question:"<q>До встречи на финише <skip></skip></q>, &mdash; сказали нам спортсмены, когда мы брали у них интервью.",answers:{"true":["через сутки"],"false":["после суток","за сутки","на сутки"]}},{question:"Юрий справился со всеми проблемами <skip></skip> родителей.",answers:{"true":["благодаря помощи"],"false":["через помощь","в связи с помощью","от помощи"]}},{question:"Лев Толстой писал, что все счастливые семьи <skip></skip> друг на друга.",answers:{"true":["похожи"],"false":["одинаковые","разные"]}},{question:"Такого озера больше нигде нет, оно <skip></skip> в мире.",answers:{"true":["единственное"],"false":["редкое","единое"]}},{question:"Марина несколько дней думала о книге, <skip></skip> недавно.",answers:{"true":["прочитанной"],"false":["прочитанную","прочитавший"]}},{question:"С это просьбой вам нужно обратиться <skip></skip>.",answers:{"true":["к генеральному директору"],"false":["с генеральным директором","генерального директора"]}},{question:"<skip></skip> домой, мы поужинали и посмотрели телевизор.",answers:{"true":["Вернувшись"],"false":["Уходя","Возвращаясь"]}}]}];

  var tests$1 = /*#__PURE__*/Object.freeze({
    'default': tests
  });

  function getCjsExportFromNamespace (n) {
  	return n && n['default'] || n;
  }

  var tests$2 = getCjsExportFromNamespace(tests$1);

  // Expose tests' indexes to the questions to facilitate the `onchange` event processing
  tests$2.forEach((test, testIndex) => test.questions.forEach(question => question.testIndex = testIndex));

  const results = tests$2.map(test => ({
    caption: test.caption,
    answers: []
  }));


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


  function onChange(d, index) {
    const answer = this.options[this.selectedIndex].value;
    results[d.testIndex].answers[index] = answer;
  }


  function updateQuestions(container, arr) {
    const tests = container.selectAll('div')
      .data(arr, test => test.caption);

    tests.exit().remove();

    const enter = tests.enter().append('div');
    enter.append('h2').html(test => 'Livello ' + test.caption);

    const questions = enter.append('ol').classed('questions', true)
      .selectAll('li')
      .data(test => test.questions)
      .enter()
        .append('li')
        .classed('question', true)
        .html(d => d.question);

    const select = questions.select('skip')
      .append('select')
      .on('change', onChange);

    const options = select.selectAll('option')
      .data(d => shuffle(d.answers['true'].concat(d.answers['false'])))
      .enter()
        .append('option')
        .html(d => d)
        .filter(function (d) {
          return d3.select(this.parentNode).datum().answer == d
        })
        .attr('selected', 'selected');

    const notAnswerd = select.filter(d => d.answer == undefined);

    notAnswerd.append('option', ':first-child')
      .attr('selected', 'selected')
      .attr('disabled', '')
      .style('display', 'none')
      .html('&#160;');
  }


  function updateButtons(buttons, a) {
    buttons.each(function (b) {
      d3.select(this).classed('selected', a == b);
    });
  }


  function calculate() {
    const questions = d3.selectAll('.question');

    const counter = {
      answered: 0,
      valid: 0,
      total: 0
    };

    questions.each(function (d, index) {
      const el = d3.select(this).select('select').node();
      const answer = el.options[el.selectedIndex].value;

      const valid = d.answers['true'].includes(answer);
      const wrong = d.answers['false'].includes(answer);
      const answered = valid || wrong;

      counter.valid += valid | 0;
      counter.answered += answered | 0;
      counter.total += 1;

    });

    d3.select('#test-result').html(function () {
      let text = '';

      if (counter.answered < counter.total) {
        text = '<p>Per ottenere il risultato devi rispondere a tutte le domande del livello.</p>';
        text += '<p>Adesso hai risposto per ' + counter.answered + ' domande su ' + counter.total + '.</p>';
      } else {
        const treshold = 15;
        if (counter.valid < treshold) {
          text = '<p>Hai risposto per tutte le domande di cui ' + counter.valid + ' sono valide.</p>';
          text += '<p>Ci voule almeno ' + treshold + ' risposte corrette su ' + counter.total + ' per passare il livello.</p>';
        } else {
          text = '<p>Ottimo! Hai risposto per tutte le domande di cui ' + counter.valid + ' sono valide.<p>';
          text += '<p>Il livello è superato.</p>';
        }
      }

      return text
    });
  }


  ready(function init () {
    const container = d3.select('#test-content');

    const buttons = d3.select('#level-buttons')
      .selectAll('li')
      .data(tests$2)
      .enter()
        .append('li')
        .html(d => d.caption)
        .on('click', update);

    function update (test, testIndex) {
      // Restore user's results for this test
      test.questions.forEach((question, index) => question.answer = results[testIndex].answers[index]);

      updateQuestions(container, [test]);
      updateButtons(buttons, test);
      calculate();
    }

    update(tests$2[0], 0);

    d3.select('#button-calculate').on('click', calculate);
  });

  var src = {

  };

  return src;

}));
