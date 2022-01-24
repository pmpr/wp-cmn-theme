/*! For license information please see delay.VTFlURhdn.js.LICENSE.txt */
!function(){const e="native-lazy-load-js-fallback";function t(e){return e.replace(/([a-z][A-Z])/g,(function(e){return e[0]+"-"+e[1].toLowerCase()}))}function n(e,n){if(e.dataset)return e.dataset[n];const s=e.getAttribute("data-"+t(n));return null!==s&&""!==s?s:void 0}function s(e,n){e.dataset?delete e.dataset[n]:e.removeAttribute("data-"+t(n))}function r(t){let r=!0;if("string"==typeof t.tagName&&"VIDEO"===t.tagName){let e=t.children;for(let t in e)if(e.hasOwnProperty(t)){let s=e[t];"string"==typeof s.tagName&&"SOURCE"===s.tagName&&(s.src=n(s,"src"))}t.load()}else n(t,"src")?(t.src=n(t,"src"),s(t,"src"),n(t,"srcset")&&(t.srcset=n(t,"srcset"),s(t,"srcset")),n(t,"sizes")&&(t.sizes=n(t,"sizes"),s(t,"sizes"))):n(t,"bg")?(t.style.backgroundImage=`url('${n(t,"bg")}')`,s(t,"bg")):n(t,"style")?(t.style=n(t,"style"),s(t,"style")):r=!1;r&&(t.classList.remove(e),t.classList.add("lazy-loaded"))}let i=[].slice.call(document.querySelectorAll(`.${e}`));if("IntersectionObserver"in window){const e=new IntersectionObserver((function(t){t.forEach((function(t){if(t.isIntersecting){const n=t.target;r(n),e.unobserve(n)}}))}));i.forEach((function(t){e.observe(t)}))}else{let e=!1;const t=function(){!1===e&&(e=!0,setTimeout((function(){i.forEach((function(e){e.getBoundingClientRect().top<=window.innerHeight&&0<=e.getBoundingClientRect().bottom&&"none"!==getComputedStyle(e).display&&(r(e),i=i.filter((function(t){return t!==e})),0===i.length&&(window.removeEventListener("resize",t),document.removeEventListener("scroll",t),window.removeEventListener("orientationchange",t)))})),e=!1}),200))};t(),window.addEventListener("resize",t),document.addEventListener("scroll",t),window.addEventListener("orientationchange",t)}}();