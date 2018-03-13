$(document).ready(function() {
    //make the closing button
	$('.button-style-click').on('click', '.navbar-toggler-icon', function(){
    	$(this).toggleClass('active');
    });
	
	//Masonry library for articles
	$('.elements-gride').masonry({
        // options
        itemSelector: '.element-item',
        columnWidth: '.element-item',
		gutter: 10 // margins between blocks
    });
	
	$('.elements-gride-index').masonry({
        // options
        itemSelector: '.element-item-index',
        //columnWidth: '.element-item-index',
		//gutter: 1 // margins between blocks
    });
	
	$('.why-us-link').click(function () {
    $('html, body').animate({
        scrollTop: $('.welcome-style').offset().top -20
    }, 800);
});

});

//isotope
$( document ).ready(function() {
    var $container = $('.isotope');
    // filter buttons
    $('#filters button').click(function(){
		var $this = $(this);
        // don't proceed if already selected
        if ( !$this.hasClass('is-checked') ) {
          $this.parents('#options').find('.is-checked').removeClass('is-checked');
          $this.addClass('is-checked');
        }
      var selector = $this.attr('data-filter');
      $container.isotope({  itemSelector: '.item', filter: selector });
      return false;
    });    
});