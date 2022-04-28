import { gsap } from 'gsap';

export function PageLoaderInit() {
  const pageLoader = new PageLoader();
  pageLoader.init();
}

class PageLoader {
  constructor() {
    this.el = document.getElementById('js-page-loader');
    this.speed = 1;
    this.closeDelay = 400;
  }

  init() {
    if (!this.el) return;
    window.onload = () => {
      setTimeout(() => {
        this.closeLoader();
      }, this.closeDelay);
    };
  }

  closeLoader() {
    this.clearWindow();
    const tl = gsap.timeline();
    tl.to(this.el, {
      autoAlpha: 0,
      duration: this.speed,
    }).set(this.el, {
      display: 'none',
    });
  }

  clearWindow() {
    document.documentElement.style.overflow = null;
  }
}
