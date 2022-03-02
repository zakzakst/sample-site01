export function HeaderSpInit() {
  const headerSp = new HeaderSp();
  headerSp.init();
}

class HeaderSp {
  constructor() {
    this.buttonEl = document.getElementById('js-header-sp-button');
    this.menuEl = document.getElementById('js-header-sp-menu');
    this.menuBgEl = document.getElementById('js-header-sp-menu-bg');
    this.scrollTop = 0;
  }

  init() {
    this.onClickButton();
    this.onClickMenuBg();
  }

  menuOpen() {
    this.buttonEl.classList.add('--open');
    this.menuEl.classList.add('--open');
    this.windowFix();
  }

  menuClose() {
    this.buttonEl.classList.remove('--open');
    this.menuEl.classList.remove('--open');
    this.windowClear();
  }

  menuToggle() {
    const isMenuOpen = this.buttonEl.classList.contains('--open');
    if (isMenuOpen) {
      this.menuClose();
    } else {
      this.menuOpen();
    }
  }

  windowFix() {
    this.scrollTop = window.pageYOffset;
    document.documentElement.style.overflowY = 'scroll';
    document.body.style.position = 'fixed';
    document.body.style.top = `-${this.scrollTop}px`;
    document.body.style.left = 0;
    document.body.style.right = 0;
  }

  windowClear() {
    document.documentElement.style.overflowY = null;
    document.body.style.position = null;
    document.body.style.top = null;
    document.body.style.left = null;
    document.body.style.right = null;
    window.scrollTo(0, this.scrollTop);
    this.scrollTop = 0;
  }

  onClickButton() {
    this.buttonEl.addEventListener('click', () => {
      this.menuToggle();
    });
  }

  onClickMenuBg() {
    this.menuBgEl.addEventListener('click', () => {
      this.menuClose();
    });
  }
}
