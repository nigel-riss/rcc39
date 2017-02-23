import $ from 'jquery';
import smoothScroll from "jquery-smooth-scroll";

class SmoothScroll {
    constructor() {
        this.headerLinks = $(".main-nav a");
        this.headerLinks.smoothScroll({
            offset: -140,
            speed: 1000
        });
    }
}

export default SmoothScroll;