$(document).ready(function() {

  var col = [
    'col-4', 'col-6', 'col-12'
  ];

  if (window.localStorage.getItem('article_view')) {
    var article_view = window.localStorage.getItem('article_view');
    var i = 0;
    for (i; i < col.length; i++) {
      $('.css-block').removeClass(col[i]);
    }
    $('.css-block').addClass(article_view);
  } else {
    window.localStorage.setItem('article_view', 'col-12');
    $('.css-block').addClass('col-12');
  }

  $(".selectorGrid").click(function() {
      window.localStorage.setItem('article_view', 'col-12');
      $('.css-block').addClass('col-12');
      $('.css-block').removeClass('col-4');
      $('.css-block').removeClass('col-6');
  });

  $(".selectorCol2").click(function() {
      window.localStorage.setItem('article_view', 'col-6');
      $('.css-block').addClass('col-6');
      $('.css-block').removeClass('col-4');
      $('.css-block').removeClass('col-12');
  });

  $(".selectorCol3").click(function() {
      window.localStorage.setItem('article_view', 'col-4');
      $('.css-block').addClass('col-4');
      $('.css-block').removeClass('col-6');
      $('.css-block').removeClass('col-12');
  });

});