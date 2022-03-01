export function HeaderSpInit() {
  const headerSp = new HeaderSp();
  headerSp.init();
}

class HeaderSp {
  constructor() {
    this.buttonEl = document.getElementById('js-header-sp-menu-button');
  }

  init() {
    this.onClickButton();
  }

  menuOpen() {
    this.buttonEl.classList.add('--open');
  }

  menuClose() {
    this.buttonEl.classList.remove('--open');
  }

  toggleMenu() {
    const isMenuOpen = this.buttonEl.classList.contains('--open');
    if (isMenuOpen) {
      this.menuClose();
    } else {
      this.menuOpen();
    }
  }

  onClickButton() {
    this.buttonEl.addEventListener('click', () => {
      this.toggleMenu();
    });
  }
}
