PMPRInlineUtil.advancedObserver(".pr-icon",(function(t){let n=t.getAttribute("data-src");PMPRInlineUtil.isEmpty(n)||fetch(n,{method:"get"}).then((function(t){return t.text()})).then((function(n){let e=PMPRInlineUtil.createElement(n);PMPRInlineUtil.animateAppend(t,e),PMPRInlineUtil.addClass(t,"icon-loaded"),t.removeAttribute("data-src")})).catch((function(t){console.log("Error on loading icon: ",t)}))}));