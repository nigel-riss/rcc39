import $ from 'jquery';
import MobileMenu from './modules/MobileMenu.js';
import StickyHeader from './modules/StickyHeader.js';
import SmoothScroll from './modules/SmoothScroll.js';

$(document).ready(function() {
    var mobileMenu = new MobileMenu();
    var stickyHeader = new StickyHeader();
    var smoothScroll = new SmoothScroll();
});
