$( document ).ready(function() {

  $(".btn-listInfo-port").on('click', function(){
      var idPai = $(this).parent().attr('class');

      //sobe(fecha) todos conteudos
      $( ".list-collapse" ).each(function( index ) {
        var _object = $(this);
        var checkHidden = _object.is( ":hidden" );
        if(!checkHidden) {
          _object.slideUp( "slow" );
        }
      });

      //remove todos item que está selecionados (zerar)
      $( ".link-selected").each(function( index ) {
        $(this).removeClass("link-selected");
      });

      //muda todas as setas p cima
      $( ".fa-caret-up").each(function( index ) {
        $(this).removeClass("fa-caret-up").addClass("fa-caret-down");
      });

      //abre ou fecha cada menu com o conteudo marcando a classe do menu como ativado ou desativado
      var _object = $(this).next(".list-collapse");
      var checkHidden = _object.is( ":hidden" );

      if(checkHidden){ //if it is true
        _object.slideDown( "slow" );
        $(this).addClass("link-selected");
        $(this).find(".fa-caret-down").removeClass("fa-caret-down").addClass("fa-caret-up");
      }else {
        _object.slideUp( "fast" );
        $(this).removeClass("link-selected");
        $(this).find(".fa-caret-up").removeClass("fa-caret-up").addClass("fa-caret-down");
      }


      //faz o scroll automático até a base do menu selecionaco
      var top = $('.' + idPai).position().top;
      setTimeout(function(){
        $('html, body').animate({
            scrollTop: top
        }, 300);
      }, 500);


      // var _idLista = "#" + $(this).parent().find('a').attr("id");
      // //console.log(_idLista);
      // setTimeout(function(){
      //   $(_idLista).simulate('click');
      // }, 500);

  });

  $("#bt_toggle").click(function(){
    $(".list-menu-celular-down").slideToggle("fast");

    if($(this).is(":hover") || $(this).is(":active")){
    }

  });

  $(document).click(function(event) {
    if(!$(event.target).is('#bt_toggle'))
    {
       var _class = $(event.target).attr('class');

      if(_class != "fa fa-bars" && _class != "list-menu-celular-down" ){
          $(".list-menu-celular-down").slideUp("fast");
      }
    }
  })

});
