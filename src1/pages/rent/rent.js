import {ieImageFix, Img, loadImages} from "../../core/helpers";
import {TimelineLite} from "gsap";
import Barba from "../../../node_modules/barba.js/dist/barba";
import "babel-polyfill";
import Preloader from "../../core/components/preloader/preloader";
import scrollAccom from '../../core/components/scroll-accom/scroll-accom';
import Scroll from "../../core/components/scroll/scroll";
import {Intro} from "../../core/components/intro/intro";
import PopupRent from "../../core/components/popup-rent/popup-rent";

const RentPage = Barba.BaseView.extend({
  namespace: "rent",
  onEnter: function () {
    this.activeMenu = document.querySelector("[data-img='bear-about']");
    this.activeMenu.classList.add('burger-menu-items__link_active');
    this.activeSubMenu = document.querySelector("[data-link='rent']");
    this.activeSubMenu.classList.add('burger-submenu-items__link_active');
    this.activeTopMenu = document.querySelector('[ data-section="8"]');
    this.activeTopMenu.classList.add('navigation__item--active');
    this.activeTopSubMenu = document.querySelector('[ data-subsection="1"]');
    this.activeTopSubMenu.classList.add('navigation__item--active');
    this.nHeader = document.querySelector('.header__main');
    this.nHeader.classList.add('header__main_subsection');
    let imgs = [...document.querySelectorAll("img[data-src][data-url]")];
    imgs = imgs.map(img => (Img(img.dataset.src, img.dataset.url)));
    loadImages(...imgs);
    ieImageFix();
  },
  onEnterCompleted: async function () {
    window.scrollTo({'top': 0});
    window.onbeforeunload = function(){ window.scrollTo(0,0); };
    this.scroll = new Scroll();
    if (window.matchMedia("(min-width: 900px)").matches) {
      this.scrollAccom = new scrollAccom(document.querySelectorAll('.info-block-1'), false);
    }
    await Preloader.end;
    Preloader.hide();
    Intro.shouldBeSkipped = true;

    this.popup = [...document.querySelectorAll(".popup")].map(popup =>
      new PopupRent(`[data-name=${popup.dataset["name"]}]`)
    );
  },

  onLeave: function () {
    this.activeMenu.classList.remove('burger-menu-items__link_active');
    this.activeTopMenu.classList.remove('navigation__item--active');
    this.nHeader.classList.remove('header__main_no-subsection');
    this.scroll.destroy();
    this.popup.forEach(popup => popup.destroy());
  },

  onLeaveCompleted: function() {
    if (this.scrollAccom) {
      this.scrollAccom.destroy();
    }
  }
});
RentPage.init();
