$( document ).ready
           (function($) {
        var $searchSubmit =  $(".site-header .search-submit");
        var $searchField = $(".site-header .search-field");
        var $searchForm = $(".site-header .search-form");

        $searchField.hide();
        
        $searchSubmit.on('click', function (e){
          e.preventDefault();
          $searchField.show(400);
          $searchField.focus();
        })
          
        $(document).keypress(function( event ) {
          if ( event.which == 13 ) {
            $searchForm.submit();
          }
        });
    

        $searchField.on('blur',function(){
          $searchField.hide(400);
        })

        
      })( jQuery );

    




