(function ($, Drupal, window, document, undefined) {
  $(document).ready( function(){
  
  
  /* Open menu */
  $('#header .menu-block-ctools-menu-desktop-menu-1 > ul > li > a').click(function(e) {
    e.preventDefault();

    if ($('#header .menu-block-ctools-menu-desktop-menu-1').height() < 50) {
      $('#header .menu-block-ctools-menu-desktop-menu-1').height(170);
    }
    else {
      closeMainNav();
    }

  });
  /* Close menu */
  $(document).mouseup(function(e) {
    var container = $('#header .menu-block-ctools-menu-desktop-menu-1');

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      //closeMainNav();
    }

  });

  
function closeMainNav() {
  $('#header .menu-block-ctools-menu-desktop-menu-1').height(40);
}  
  
  
  
  
  

  if(jQuery('body.not-front').length > 0){
$(".isotope-element").hover(
    function() {$(this).addClass("roll-over");}, 
    function() {$(this).removeClass("roll-over");}
  );

}

});

})(jQuery, Drupal, this, this.document);