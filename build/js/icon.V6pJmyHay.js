PMPRInlineUtil.advancedObserver(".pr-icon",(function(e){let n=e.getAttribute("data-src");PMPRInlineUtil.isEmpty(n)||PMPRInlineUtil.jsonpRequest({url:n,tag:"iframe",success:(n,t)=>{let i=t.contentDocument.children[0];PMPRInlineUtil.animateAppend(e,i),PMPRInlineUtil.addClass(e,"icon-loaded"),e.removeAttribute("data-src")},error:e=>{console.log("Error on loading icon: ",e)}})}));