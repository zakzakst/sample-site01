import barba from '@barba/core';
import { gsap } from 'gsap';

export function BarbaInit() {
  barba.init({
    transitions: [
      {
        name: 'default-transition',
        leave(data) {
          return gsap.to(data.current.container, {
            opacity: 0,
          });
        },
        enter(data) {
          return gsap.from(data.next.container, {
            opacity: 0,
          });
        },
      },
    ],
  });
}

// export function PageTransitionInit() {
//   const pageTransition = new PageTransition();
//   pageTransition.init();
// }

// class PageTransition {
//   constructor() {
//   }

//   init() {
//     barba.hooks.beforeEnter((data) => {
//       this.replaceHead(data);
//     });
//     barba.init({
//       prevent: this.preventSettings(),
//     });
//   }

//   preventSettings() {
//     // 外部リンクはtarget="_blank"に
//     let site_url = location.protocol + '//' + location.host;
//     if (!href.startsWith(site_url)) {
//       el.setAttribute('target', '_blank');
//       return true;
//     }
//     // アンカーリンクであり同一ページでなければbarbaを有効に
//     let url = location.protocol + '//' + location.host + location.pathname;
//     let extract_hash = href.replace(/#.*$/, "");
//     if (href.startsWith(location.protocol + '//' + location.host)) {
//       if (href.indexOf('#') > -1 && extract_hash != url) {
//         return false;
//       }
//     }
//     // 拡張子が該当する場合はtarget="_blank"に
//     if (/\.(xlsx?|docx?|pptx?|pdf|jpe?g|png|gif|svg)/.test(href.toLowerCase())) {
//       el.setAttribute('target', '_blank');
//       return true;
//     }
//     // 該当クラスに属していればBarbaを無効に
//     let ignoreClasses = ['ab-item'];
//     ignoreClasses.forEach((cls) => {
//       if (el.classList.contains(cls)) {
//         return true;
//       }
//     });
//   }

//   replaceHead(data) {
//     const head = document.head;
//     const newPageRawHead = data.next.html.match(/<head[^>]*>([\s\S.]*)<\/head>/i)[0];
//     const newPageHead = document.createElement('head');
//     newPageHead.innerHTML = newPageRawHead;

//     const removeHeadTags = [
//       "meta[name='keywords']", "meta[name='description']", "meta[property^='og']", "meta[name^='twitter']", "meta[itemprop]", "link[itemprop]", "link[rel='prev']", "link[rel='next']", "link[rel='canonical']"
//     ].join(',');

//     const headTags = head.querySelectorAll(removeHeadTags)

//     for (let i = 0; i < headTags.length; i++) {
//       head.removeChild(headTags[i]);
//     }

//     const newHeadTags = newPageHead.querySelectorAll(removeHeadTags)

//     for (let i = 0; i < newHeadTags.length; i++) {
//       head.appendChild(newHeadTags[i]);
//     }
//   }
// }
