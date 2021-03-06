$(function() {

	// Do our DOM lookups beforehand
	var nav_container = $(".top-bar-container");
	var nav = $(".home-nav");
	
	var top_spacing = 0;
	var waypoint_offset = -0;

	nav_container.waypoint({
		handler: function(event, direction) {
			
			if (direction == 'down') {
			
					
				nav.stop().addClass("sticky").css("top",-nav.outerHeight()).animate({"top":""});
				
			} else {
			
				
				nav.stop().removeClass("sticky").css("top",nav.outerHeight()+waypoint_offset).animate({"top":""});
				
			}
			
		},
		offset: function() {
			return -nav.outerHeight()-waypoint_offset;
		}
	}); 
	
	var sections = $("section");
	var navigation_links = $("nav a");
    var arrow= $("#arrow a");
	
	sections.waypoint({
		handler: function(event, direction) {
		
			var active_section;
			active_section = $(this);
			if (direction === "up") active_section = active_section.prev();

			var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
			navigation_links.removeClass("selected");
			active_link.addClass("selected");

		},
		offset: '0%'
	})
	
	
 


});