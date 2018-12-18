jQuery(function(){
    jQuery("ul.top-menu li.menu-item-has-children").hover(function(){
      jQuery("ul.sub-menu:not(:animated)",this).slideDown("fast");
    }, function(){
        jQuery("ul.sub-menu",this).slideUp("fast");
    });
  });
  