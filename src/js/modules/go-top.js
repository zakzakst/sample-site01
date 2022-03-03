import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

export function GoTopInit() {
  const goTop = new GoTop();
  goTop.init();
}

class GoTop {
  constructor() {
    this.el = document.getElementById('js-go-top');
    this.mainEl = document.getElementById('js-layout-main');
    this.footerEl = document.getElementById('js-footer');
    this.showOffset = 200;
    this.fixBottomOffset = 32;
  }

  init() {
    this.onClickEl();
    this.elShow();
    this.elFix();
  }

  elShow() {
    ScrollTrigger.create({
      trigger: this.mainEl,
      start: `top -${this.showOffset}px`,
      onEnter: () => {
        this.el.classList.add('--show');
      },
      onLeaveBack: () => {
        this.el.classList.remove('--show');
      },
    });
  }

  elFix() {
    ScrollTrigger.create({
      trigger: this.footerEl,
      start: `top 100%-=${this.fixBottomOffset}px`,
      onEnter: () => {
        this.el.classList.add('--fix-bottom');
      },
      onLeaveBack: () => {
        this.el.classList.remove('--fix-bottom');
      },
    });
  }

  onClickEl() {
    this.el.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });
    });
  }
}
