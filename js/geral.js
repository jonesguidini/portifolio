$( document ).ready(function() {

  $(".btn-listInfo-port").on('click', function(){

      /*
      $( ".list-collapse" ).each(function( index ) {
        if(!$(this).hasClass("hide")){
          $(this).addClass("hide");
        }
      });
        */

      var _object = $(this).next(".list-collapse");
      var checkHidden = _object.is( ":hidden" );

      if(checkHidden){ //if it is true
        _object.removeClass("hide");
        //_object.slideDown( "slow" );
        //console.log("--->" + checkHidden);
      }else {
        //_object.slideUp( "slow" );
        _object.addClass("hide");
      }

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
