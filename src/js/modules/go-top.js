export function GoTopInit() {
  const goTop = new GoTop();
  goTop.init();
}

class GoTop {
  constructor() {
    this.el = document.getElementById('js-go-top');
    this.mainEl = document.getElementById('js-layout-main');
  }

  init() {
    this.onClickEl();
    // this.abcd();
  }

  abcd() {
    // const aaa = {
    //   root: null,
    //   rootMargin: '-30% 0px',
    //   threshold: 0,
    // };
    // const bbb = new IntersectionObserver((entries) => {
    //   console.log(entries);
    //   entries.forEach((entry) => {
    //     if (entry.isIntersecting) {
    //       console.log('test');
    //     }
    //   });
    // }, aaa);
    // // console.log(observer);
    // // // observer(this.mainEl);
    // console.log(bbb);
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
