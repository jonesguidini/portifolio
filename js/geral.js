$( document ).ready(function() {


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
