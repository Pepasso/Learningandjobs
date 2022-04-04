import {offset} from "../../core/helpers";
import {menu} from "../../core/components/header/header";

const namespaceToScreenIndexMap = {
    "accom": 1
};

const mainToInner = transition => {
    const $activeScreen = document.querySelector(".screen--active");
    const $moreButton = $activeScreen.querySelector(".more__button");
    const $moreButtonArrow = $moreButton.querySelector(".button__more-arrow");
    const $moreButtonText = $moreButton.querySelector(".button__more-text");
    const MORE_BUTTON_SIZE = 55;
    const MORE_BUTTON_HALF_SIZE = MORE_BUTTON_SIZE / 2;
    const $firstScreenBottom = document.querySelector(".inner-first-screen__bottom");
    const $firstInfoBlock = document.querySelectorAll(".info-block-1")[0];
    new TimelineLite()
        .to(
            $activeScreen.querySelector(".screen__box.screen__box--top .screen-content"),
            1, {autoAlpha: 0}, 0)
        .to(".screen-control",
            1, {autoAlpha: 0}, 0)
        .to(".screen-circle",
            1, {autoAlpha: 0}, 0)
        // .to($activeScreen.querySelector(".more__capture"),
        //     1, {autoAlpha: 0}, 0)
        .set(document.querySelector(".sound-control__text"), {transition: "none"}, 0)
        .fromTo(document.querySelector(".sound-control__text"), 1, {autoAlpha: 1}, {autoAlpha: 0}, 0)
        .set(document.querySelector(".copy"), {transition: "none"}, 0)
        .fromTo(document.querySelector(".copy"), 1, {autoAlpha: 1}, {autoAlpha: 0}, 0)
        .set(document.querySelector(".dev-by"), {transition: "none"}, 0)
        .fromTo(document.querySelector('.dev-by'), 1, {autoAlpha: 1}, {autoAlpha: 0}, 0)
        .set($activeScreen.querySelector(".bg-screen-wrapper"),
            {left: "50%", xPercent: -50, width: "100vw"}, 0)
        .to($activeScreen.querySelector(".bg-screen-wrapper"),
            1, {
                height: window.innerHeight / 1.5 - MORE_BUTTON_HALF_SIZE,
                width: window.innerWidth > 1408 ? 1408 : "100vw"
            }, 0)
        .to($moreButton, 1, {
            padding: 0,
            bottom: (offset($moreButton).top + MORE_BUTTON_SIZE) - window.innerHeight / 1.5
        }, 0)
        .to($moreButtonText, .6, {opacity:0, display:"none"}, 0)
        .fromTo($moreButtonArrow, .4, {opacity:0, display:'flex'},{opacity:1}, 0.6)
        .to($moreButtonText, 1, {width: 0, opacity:0}, 0)
        .set($firstScreenBottom, {autoAlpha: 0, yPercent: 30}, 1)
        .set($firstInfoBlock, {autoAlpha: 0, yPercent: 30, onComplete: () => transition.done()}, 1)
        .to($firstScreenBottom, 1, {autoAlpha: 1, yPercent: 0}, 1.5)
        .to($firstInfoBlock, 1, {autoAlpha: 1, yPercent: 0}, 1.5);
};

const innerToMain = transition => {
    const nInnerGoButton = transition.oldContainer.querySelector('.inner-header__go-to-main');
    const screenIndex = nInnerGoButton.dataset.screenIndex;
    const $screens = document.querySelector(".screens");
    $screens.dataset.activeScreenIndex = screenIndex;
    const $screen = [...document.querySelectorAll(".screen")][screenIndex];
    const $goToMain = document.querySelector(".inner-header__go-to-main");
    const $goToMainText = $goToMain.querySelector(".button__more-text");
    const $goToInner = $screen.querySelector(".more__button");
    const $goToMainArrow = $goToMain.querySelector(".button__more-arrow");
    const $firstScreenBottom = document.querySelector(".inner-first-screen__bottom");
    const $firstInfoBlock = document.querySelectorAll(".info-block-1")[0];
    const $image = document.querySelector(".inner-header__bg");
    const imageOffset = offset($image);
    const $imageCopy = $image.cloneNode(true);
    $imageCopy.style.display = "none";
    const $innerHeader = document.querySelector(".inner-header");
    document.querySelector("body").appendChild($imageCopy);
    new TimelineLite()
        .set($innerHeader, {zIndex: 1})
        .set($imageCopy, {
            position: "fixed",
            display: 'block',
            left: "50%",
            top: 0,
            width: $image.clientWidth,
            height: $image.clientHeight,
            xPercent: -50
        })
        .set($image, {display: "none"})
        .to($firstScreenBottom, .5, {autoAlpha: 0, yPercent: 30}, 0)
        .to(
            $firstInfoBlock,
            .5,
            {autoAlpha: 0, yPercent: 30},
            0
        )
        .to($imageCopy, 1, {width: "100vw", height: "100%"}, .5)
        .to(
            $goToMain,
            1,
            {
                padding: "0 45px",
                y: offset($goToInner).top - offset($goToMain).top,

                onComplete: () => {
                    transition.done();
                }
            },
            .5
        )
        .to($goToMain, 1, {x: '-50%'}, 0)
        .to($goToMainArrow, .5,{opacity:0, display:"none"}, 0)
        .to($goToMainText, 1, {width: "100%", fontSize: 10}, 0.5)
        .set($imageCopy, {zIndex: -1}, 1.5)
        .fromTo(
            $screen.querySelector(".screen__box.screen__box--top .screen-content"),
            1, {autoAlpha: 0}, {autoAlpha: 1}, 1.5)
        .fromTo(".screen-control",
            1, {autoAlpha: 0}, {autoAlpha: 1}, 1.5)
        .fromTo(".screen-circle",
            1, {autoAlpha: 0}, {
                autoAlpha: 1,
                onComplete: () => document.querySelector("body").removeChild($imageCopy)
            }, 1.5,)
        .set(document.querySelector(".sound-control__text"), {transition: "none"}, 1.5)
        .fromTo(document.querySelector(".sound-control__text"), 1, {autoAlpha: 0}, {autoAlpha: 1}, 1.5)
        .set(document.querySelector(".copy"), {transition: "none"}, 1.5)
        .fromTo(document.querySelector(".copy"), 1, {autoAlpha: 0}, {autoAlpha: 1}, 1.5)
        .set(document.querySelector(".dev-by"), {transition: "none"}, 1.5)
        .fromTo(document.querySelector(".dev-by"), 1, {autoAlpha: 0}, {autoAlpha: 1}, 1.5);
};

const burgerToAny = transition => {
    new TimelineLite({onComplete: () => menu.onMenuButtonClick()})
        .to(transition.oldContainer, .5, {autoAlpha: 0, onComplete: () => transition.done()})
        .set(transition.newContainer, {autoAlpha: 0})
        .to(transition.newContainer, .5, {autoAlpha: 1})
      .set(document.querySelector(".sound-control__text"), {transition: "none", autoAlpha: 0}, 0)
      .set(document.querySelector(".copy"), {transition: "none", autoAlpha: 0}, 0)
      .set(document.querySelector(".dev-by"), {transition: "none", autoAlpha: 0}, 0)
      .to(document.querySelector('.footer'), 1, {color: 'rgba(0, 0, 0, 1)'}, 0);
};

const roomToRoom = transition => {
  const nOldContainer = transition.oldContainer;
  const nNewContainer = transition.newContainer;
  const nFirstBlockOld = nOldContainer.querySelector('.room-first-screen');
  const nFirstBlockNew = nNewContainer.querySelector('.room-first-screen');
  const nFirstBlockTitleNew = nFirstBlockNew.querySelector('.room-first-screen__content_middle');
  const nFirstBlockBgNew = nFirstBlockNew.querySelector('.room-first-screen__bg');
  const nFirstBlockBgNewImg = nFirstBlockBgNew.querySelector('img');
  const nFooter = document.querySelector('.footer');
  const nSoundText = document.querySelector('.sound-control__text');
  const nFooterCopy = nFooter.querySelector('.copy');
  const nFooterDevBy = nFooter.querySelector('.dev-by');
  const nFooterCompany = nFooter.querySelector('.company');
  const nHeader = document.querySelector('.header');
  const nHeaderBottom = document.querySelector('.header__main');
  const nHeaderTop = nHeader.querySelector('.header-top');
  let heightFirstBlock = document.documentElement.clientHeight + 'px';
  const tlRoom = new TimelineLite({

    onComplete: () => {

      tlRoom.kill();
      const tRoom = new TimelineLite();
      tRoom.set(nNewContainer, {position: 'inherit', top: 'auto', width: 'auto', onComplete: () => transition.done()});
    }
  });
  tlRoom
    .set(nHeaderBottom, {backgroundColor: 'rgba(255, 255, 255, 1)'})
    .set([nSoundText, nFooterCopy, nFooterDevBy], {autoAlpha: 0})
    .set(nNewContainer, {position: 'fixed', top: 0, width: '100%'})
    .set(nFirstBlockNew, {height: heightFirstBlock})
    .to(nHeaderTop, .5, {marginTop: 0}, 0)
    .to(nOldContainer, 1.5, {autoAlpha: 0}, 0)
    .to(nNewContainer, 1.5, {autoAlpha: 1}, 0)
    .from(nFirstBlockBgNewImg, 1.5, { scale: 1.2 }, 0)
    .from(nFirstBlockTitleNew, .5, { autoAlpha: 0 }, .5)
    .from(nFirstBlockTitleNew, 1, { y: 140 }, .5);
};

const accomToRoom2 = transition => {
  const nNewContainer = transition.newContainer;
  const nFirstBlockNew = nNewContainer.querySelector('.room-first-screen');
  const nFirstBlockTitleNew = nFirstBlockNew.querySelector('.room-first-screen__content_middle');
  const nFirstBlockBgNew = nFirstBlockNew.querySelector('.room-first-screen__bg');
  const nFirstBlockBgNewImg = nFirstBlockBgNew.querySelector('img');
  new TimelineLite()
    .to(transition.oldContainer, .5, {autoAlpha: 0, onComplete: () => transition.done()})
    .set(transition.newContainer, {autoAlpha: 0})
    .to(transition.newContainer, .5, {autoAlpha: 1})
    .from(nFirstBlockBgNewImg, 1.5, { scale: 1.2 }, 0)
    .from(nFirstBlockTitleNew, .5, { autoAlpha: 0 }, .5)
    .from(nFirstBlockTitleNew, 1, { y: 140 }, .5)
    .to(document.querySelector('.header__main'), .5, {backgroundColor: 'rgba(255, 255, 255, 0)'}, 0)
};

const accomToRoom = transition => {
  const nOldContainer = transition.oldContainer;
  const nNewContainer = transition.newContainer;
  const nHeader = document.querySelector('.header');
  const nHeaderTop = nHeader.querySelector('.header-top');
  const nHeaderBottom = nHeader.querySelector('.header__main');
  const nFooter = document.querySelector('.footer');
  const nIB = nOldContainer.querySelector('.info-block-1_active');
  const nIBWrapper = nIB.querySelector('.info-block-1__wrapper');
  const nIBBg = nIB.querySelector('.info-block-1__bg');
  const nIBContent = nIB.querySelector('.info-block-1__content');
  const nFirstBlockNew = nNewContainer.querySelector('.room-first-screen');
  const nFirstBlockBgNew = nFirstBlockNew.querySelector('.room-first-screen__bg');
  const nFirstBlockTitleNew = nFirstBlockNew.querySelector('.room-first-screen__content_middle');
  let heightFirstBlock = document.documentElement.clientHeight + 'px';
  let xPercentVar;
  if(nIBContent.classList.contains('info-block-1__content--right')) {
    xPercentVar = 100;
  }
  else {
    xPercentVar = -100;
  }
  const tl = new TimelineLite({
    onComplete: () => {

      tl.kill();

      const t = new TimelineLite();
      t.to(nOldContainer, 1, {autoAlpha: 0}, .5)
        .to(nNewContainer, 1, {autoAlpha: 1}, .5)
        .from(nFirstBlockTitleNew, .5, { autoAlpha: 0 }, .5)
        .set(nNewContainer, {position: 'inherit', top: 'auto', width: 'auto'})
        .from(nFirstBlockTitleNew, 1, { y: 140, onComplete: () => {transition.done()} }, .5);
    }
  });
  tl
    .set(nHeaderBottom, {backgroundColor: 'rgba(255, 255, 255, 1)'})
    .set(nNewContainer, {position: 'fixed', top: 0, width: '100%'})
    .set(nFirstBlockNew, {height: heightFirstBlock})
    .set(nIBBg, {transition: 'none'})
    .to(nHeaderTop, .5, {marginTop: 0})
    .to(nIB, .5, {padding: 0}, 0)
    .to(window, .5, { scrollTo: { y: nIB.offsetTop, autoKill: true }, ease: Power1.easeOut }, 0)
    .to(nIBContent, .5, {xPercent: xPercentVar}, 0)
    .to(nIBContent, .5, {autoAlpha: 0}, 0)
    .to(nIBBg, 1, {margin: 0, position: 'absolute', width: nFirstBlockBgNew.clientWidth, height: nFirstBlockBgNew.clientHeight, zIndex: 2, left: '50%', xPercent: '-50%'}, .2)
    .to(nFooter, 1, {color: '#fff'}, .2)
    .to(nIB, 1, {maxWidth: '100%'}, .2)
    .to(nIBWrapper, 1, {height: heightFirstBlock}, .2);
};

const roomToMain = transition => {
  const nOldContainer = transition.oldContainer;
  const nNewContainer = transition.newContainer;
  const nHeaderTop = document.querySelector('.header-top');
  const tl = new TimelineLite();
  tl
    .to(nHeaderTop, .5, {marginTop: 0})
    .to(nOldContainer, 1.5, {autoAlpha: 0, onComplete: () => transition.done()});
};

const toMain = transition => {
  new TimelineLite()
    .to(transition.oldContainer, .5, {autoAlpha: 0, onComplete: () => transition.done()})
    .set(transition.newContainer, {autoAlpha: 0})
    .to(transition.newContainer, .5, {autoAlpha: 1})
    .set(document.querySelector(".footer"), {transition: "none"}, .5)
    .to(document.querySelector(".footer"), 1, {color: '#000'}, .5)
    .set(document.querySelector(".sound-control__text"), {transition: "none"}, .5)
    .fromTo(document.querySelector(".sound-control__text"), 1, {autoAlpha: 0}, {autoAlpha: 1}, .5)
    .set(document.querySelector(".copy"), {transition: "none"}, .5)
    .fromTo(document.querySelector(".copy"), 1, {autoAlpha: 0}, {autoAlpha: 1}, .5)
    .set(document.querySelector(".dev-by"), {transition: "none"}, .5)
    .fromTo(document.querySelector(".dev-by"), 1, {autoAlpha: 0}, {autoAlpha: 1}, .5)
    .set(document.querySelector(".company"), {transition: "none"}, .5)
    .fromTo(document.querySelector(".company"), 1, {autoAlpha: 0}, {autoAlpha: 1}, .5);
};

const topMenu = transition => {
  new TimelineLite()
    .to(transition.oldContainer, .5, {autoAlpha: 0, onComplete: () => transition.done()})
    .set(transition.newContainer, {autoAlpha: 0})
    .to(transition.newContainer, .5, {autoAlpha: 1})
    .to(document.querySelector('.header__main'), .5, {backgroundColor: 'rgba(255, 255, 255, 0)'}, 0)
};

const transitions = {
    main: {
        // accom: mainToInner,
        // room: roomToRoom,
        // contacts: topMenu
    },
    accom: {
      main: innerToMain,
      room: accomToRoom2,
      contacts: topMenu,
      about: topMenu,
      restaurant: topMenu
    },
    room: {
      main: toMain,
      accom: topMenu,
      room: roomToRoom,
      contacts: topMenu,
      restaurant: topMenu
    },
    contacts: {
      main: toMain,
      accom: topMenu,
      room: topMenu,
      restaurant: topMenu
    },
    about: {
      main: innerToMain,
      accom: topMenu,
      room: topMenu
    },
    restaurant: {
      main: innerToMain
    },
    fun: {
      main: innerToMain
    },
    spa: {
      main: innerToMain
    },
    business: {
      main: innerToMain
    },
    rent: {
      main: innerToMain
    }
};

const namespaceSubstitute = {
    accom: "accom",
    lux: "room",
    dubl: "room",
    family: "room",
    twin: "room",
    contacts: "contacts",
    about: "about",
    restaurant: "restaurant",
    fun: "fun",
    spa: "spa",
    business: "business",
    rent: "rent"
};

export default (source, target) => {
    if (menu.open) {
        return burgerToAny;
    }
    return (transitions[source] && transitions[source][target])
        || (transitions[source] && transitions[source][namespaceSubstitute[target]])
        || (transitions[namespaceSubstitute[source]] && transitions[namespaceSubstitute[source]][target])
        || (transitions[namespaceSubstitute[source]] && transitions[namespaceSubstitute[source]][namespaceSubstitute[target]]);
}



