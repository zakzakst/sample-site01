import { gsap } from 'gsap';

export function PageLoaderInit() {
  const pageLoader = new PageLoader();
  pageLoader.init();
}

class PageLoader {
  constructor() {
    this.el = document.getElementById('js-page-loader');
    this.contentEl = document.getElementById('js-page-loader-content');
    this.speed = 0.5;
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
    const self = this;
    const tl = gsap.timeline();
    tl.to(this.contentEl, {
      autoAlpha: 0,
      duration: this.speed,
      onComplete() {
        self.clearWindow();
      },
    })
      .to(this.el, {
        autoAlpha: 0,
        duration: this.speed,
      })
      .set(this.el, {
        display: 'none',
      });
  }

  clearWindow() {
    document.documentElement.style.overflow = null;
  }
}
