/*jQuery.noConflict();*/
jQuery(document).ready(function ($) {
	
    /*===================================================================================*/
    /*  CUSTOM
    /*===================================================================================*/

	/** LYBE: Björn [Init Google Maps via API V3] **/
	var initializeMaps = function() {
		// vars
		var klevPos = "58.4654133,11.3354442";
		var canvasID = 'gmaps-canvas';

		var latlng = new google.maps.LatLng(klevPos);
		var styles = [
			{
				stylers: [{ saturation: -40 }]
			},
			{
				featureType: "building", 
				elementType: "labels" 
			},
			{
				featureType: "poi", 
				stylers: [{ hue: '#0044ff' }] 
			}
		];  
		
		var myOptions = { 
			zoom: 15, 
			center: latlng, 
			mapTypeId: google.maps.MapTypeId.HYBRID, 
			disableDefaultUI: true, 
			mapTypeControl: true, 
			styles: styles, 
			zoomControl: true, 
			zoomControlOptions: { 
				style: google.maps.ZoomControlStyle.SMALL 
			}
		};  
	
		map = new google.maps.Map(document.getElementById(canvasID), myOptions);

		var marker = new google.maps.Marker({ 
			position: latlng, 
			map: map, 
			title:"Klevs Lantbruk HB"
		});
	
		google.maps.event.addDomListener(window, "resize", function() { 
			var center = map.getCenter(); 
			google.maps.event.trigger(map, "resize"); 
			map.setCenter(center);
		});
	}

	// Trigger
	jQuery('.page-template-page-contact').find('#content .tabs li:last-child').on('click', 'a', function() {
		setTimeout(function () {
			initializeMaps();
		}, 500);
	});

    /*===================================================================================*/
    /*  Quickmenu
     /*===================================================================================*/
    $('#quickmenu').find('li').each(function (i) {
        $(this).addClass('quickmenu-item-' + parseInt(1 + i));
    })

    /*===================================================================================*/
    /*	Scroll to Top
     /*===================================================================================*/
    $('#toTop').click(function () {
        $('body, html').animate({scrollTop: 0}, 300);
        return false;
    });

    /*===================================================================================*/
    /*	Isotope
     /*===================================================================================*/
    if ($().isotope) {

        $(function () {

            var $container = $('#module-wrapper').imagesLoaded(function () {
                $container.isotope({
                    itemSelector: '.module'
                });
            });

            var $optionSets = $('#filter-bar-container #filter-bar'),
                $optionLinks = $optionSets.find('a');

            $optionLinks.click(function () {
                var $this = $(this);
                // don't proceed if already selected
                if ($this.hasClass('selected')) {
                    return false;
                }
                var $optionSet = $this.parents('#filter-bar');
                $optionSet.find('.selected').removeClass('selected');
                $this.addClass('selected');

                // make option object dynamically, i.e. { filter: '.my-filter-class' }
                var options = {},
                    key = $optionSet.attr('data-option-key'),
                    value = $this.attr('data-option-value');
                // parse 'false' as false boolean
                value = value === 'false' ? false : value;
                options[ key ] = value;
                if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                    // changes in layout modes need extra logic
                    changeLayoutMode($this, options)
                } else {
                    // otherwise, apply new options
                    $container.isotope(options);
                }

                return false;
            });

        });

    }

});

(function($) {
    $(window).load(function(event) {
        $('.reveal-modal').css({
            "visibility": "hidden",
            "opacity": "0"
        });
    });
})(jQuery);