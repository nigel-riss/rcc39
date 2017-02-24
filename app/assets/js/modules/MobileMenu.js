import $ from 'jquery';

class MobileMenu {
    constructor() {
        this.siteHeader = $(".site-header");
        this.menuLinks = $(".main-nav a");
        this.menuIcon = $(".site-header__menu-icon");
        this.menuContent = $('.site-header__menu-content');
        this.events();
    }

    events() {
        this.menuIcon.click(this.toggleTheMenu.bind(this));
        this.menuLinks.click(this.hideTheMenu.bind(this));
        this.menuLinks.on('tap', this.hideTheMenu.bind(this));
    }

    toggleTheMenu() {
        this.menuContent.toggleClass("site-header__menu-content--is-visible");
        this.menuIcon.toggleClass("site-header__menu-icon--close-x");
    }

    hideTheMenu() {
        this.menuContent.removeClass('site-header__menu-content--is-visible');
        this.menuIcon.removeClass("site-header__menu-icon--close-x");
    }
}

export default MobileMenu;