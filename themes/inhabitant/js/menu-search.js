     //make search input show when clicking on search icon 
     $('.search-button').click(function(){
        $('.nav-search .search-form').toggle();
        $('.nav-search .search-field').focus();
      });

      //make search input disapear when it loses focus
      $('.nav-search .search-field').blur(function(){
        $('.nav-search .search-form').hide();
      })

      (function($) {
	
        $('.hideable').on('click', function() {
          $(this).hide();
        })
          
      })( jQuery );