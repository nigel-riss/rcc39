import $ from 'jquery';
import waypoints from '../../../../node_modules/waypoints/lib/noframework.waypoints.js';

class StickyHeader {
    constructor() {
        this.siteHeader = $(".site-header");
        this.headerTrigger = $(".site-main");
        this.createHeaderWaypoint();
    }

    createHeaderWaypoint() {
        var self = this;
        new Waypoint({
            element: this.headerTrigger[0],
            handler: function(direction) {
                if (direction == "down") {
                    self.siteHeader.addClass("site-header--compact");
                } else {
                    self.siteHeader.removeClass("site-header--compact");
                }
            },
            offset: -100
        });
    }
}

export default StickyHeader;