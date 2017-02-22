import $ from 'jquery';
import waypoints from '../../../../node_modules/waypoints/lib/noframework.waypoints.js';

class StickyHeader {
    constructor() {
        this.siteHeader = $(".site-header");
        this.headerTrigger = $(".hero");
        this.createHeaderWaypoint();
        console.log('constructor');
    }

    createHeaderWaypoint() {
        console.log('waypoints');
        var self = this;
        new Waypoint({
            element: this.headerTrigger[0],
            handler: function(direction) {

                console.log('scroll');
                if (direction == "down") {
                    self.siteHeader.addClass("site-header--compact");
                } else {
                    self.siteHeader.removeClass("site-header--compact");
                }
            }
        });
    }
}

export default StickyHeader;