$(document).ready(function(){
  $('.slick-slider-depoimentos').slick({
    autoplay:true,
    autoplaySpeed:2000,
    slidesToShow: 2,
    slidesToScroll: 1,
    speed: 500,
    dots: false,
    customPaging : function(slider, i) { var thumb = $(slider.$slides[i]).data(); return '<div class="btn-slick"></div>'; },
    centerMode: false,
    focusOnSelect: true,
    slide: 'div',
    arrows: true,
    responsive: [{
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
      }
    }]
  });
  $('.slick-slider-instituidoras').slick({
    autoplay:true,
    autoplaySpeed:2000,
    slidesToShow: 3,
    slidesToScroll: 1,
    speed: 500,
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    slide: 'div',
    arrows: true,
    responsive: [{
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
      }
    }]
  });

  $('.navbar-hamburg').click(function(){
		$('.navbar-mobile ul').toggleClass("show-r-menu");
  });

/* mapa */
  $('a.item-estado').click(function(){
    var uid = $(this).attr('data-href');
    //alert(uid);
    $('.box-estado').removeClass("show-estado");
    $('.box-estado[data-id=gbox-'+uid+']').addClass("show-estado");
    $('.box-selecione').addClass("hide-selecione");

  });

  $('g.gbox').click(function(){
    var uid = $(this).attr('id');
    //alert(uid);
    $('.box-estado').removeClass("show-estado");
    $('.box-estado[data-id='+uid+']').addClass("show-estado");
    $('.box-selecione').addClass("hide-selecione");
  });

  $('.estadosSelect li').click(function(){
    var uid = $(this).attr('id');
    // alert(uid);
    $('.box-estado').removeClass("show-estado");
    $('.box-estado[data-id='+uid+']').addClass("show-estado");
    $('.box-selecione').addClass("hide-selecione");
  });

  $('li.item').click(function(){
    var id = $(this).attr('data-id');
		$('li.item[data-id='+id+'] .item-dropdown').toggleClass("show-dropdown");
    $('li.item[data-id='+id+'] i').toggleClass("i-transform");
  });
/* end mapa */
  $('.relatorio').click(function(){
    var childs = $(this).find('.relatorio-dropdown a').length;
        console.log(childs);

    if($(this).find('.relatorio-dropdown').attr('style')) {
      $(this).find('.relatorio-dropdown').attr('style', '');
    }
    else {
      $(this).find('.relatorio-dropdown').css('max-height', childs * 35 + 'px');
    }
  });

  $("#associacao-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#associacao-list li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $()
  $('#associacao-list li').click(function(){
    var targetText = $(this).text();
    var targetID = $(this).attr('id');
    $('#associacao-search').val(targetText);
    $('#id_value').val(targetID);
  });

  $('.field-select i').click(function(){
    $('.field-select ul').addClass("show-associacao");
  });

  $('.field-select').click(function(){
		$('.field-select ul').addClass("show-associacao");
  });

  $('body').click(function(event){
    if (($(event.target).attr('id') != 'associacao-search') && ($(event.target).attr('id') != 'associacao-search-i')) {
      $('.field-select ul').removeClass("show-associacao");
    }
  });



  window.displayBoxIndex = -1;

  $("#associacao-search").keyup(function(e)  {
    var target = e.keyCode;
    if (e.keyCode == 40)
    {
        Navigate(1);
    }
    else if(e.keyCode==38)
    {
        Navigate(-1);
    }
    else if(e.keyCode==13)
    {
        $("#associacao-search").val($('#associacao-list li.field-select_ul_li_hover').text());
    }
  });

  var Navigate = function(diff) {
      displayBoxIndex += diff;
      var oBoxCollection = $("#associacao-list li");
      if (displayBoxIndex >= oBoxCollection.length)
           displayBoxIndex = 0;
      if (displayBoxIndex < 0)
           displayBoxIndex = oBoxCollection.length - 1;
      var cssClass = "field-select_ul_li_hover";
      oBoxCollection.removeClass(cssClass).eq(displayBoxIndex).addClass(cssClass);
  }

  $('.boxOpcoes .box .btn, .modal-clube .close-btn ').click( function(e) {
    e.preventDefault();
    let id = $(this).attr('id'),
        target = $('[data-target="'+id+'"]');
    $('body').css('overflow', 'hidden');
    target.addClass('active');
    if ($(this).hasClass('close-btn')) {
      $('.modal-clube').removeClass('active');
      $('body').attr('style', '');
    }
  });

  $('.filtro input[type="checkbox"]').click(function (){
    let status = $(this).is(':checked'),
        target = $('[data-object="'+ $(this).attr('id') +'"]');

        if (status) {
          $(this).parents('.filtro').addClass('active');
          target.addClass('show');
        }
        else if ($(this).parents('form').find('input').is(':checked')) {
            target.removeClass('show');
        }
        else {
          $(this).parents('.filtro').removeClass('active');
          $('.filtro .box').removeClass('show');
        }

  });

  $('.btn-search-clube').click(function(e){
    e.preventDefault();
    var search = $('.input-search-clube').val();
    //var item_search = location.href.split("/").slice(-1);

    //window.location.href = window.location.href+"/"+search;
    //console.log(window.location.href.indexOf('clubelogado'));
    console.log(window.location);
  });

});
