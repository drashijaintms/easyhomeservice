(function(h,o,t,j,a,r){         h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};         h._hjSettings={hjid:5091454,hjsv:6};         a=o.getElementsByTagName('head')[0];         r=o.createElement('script');r.async=1;         r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;         a.appendChild(r);     })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); 

   

// setTimeout(function () {
//   (function(w,d,s,l,i){
//     w[l]=w[l]||[];
//     w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
//     var f=d.getElementsByTagName(s)[0],
//         j=d.createElement(s),
//         dl=l!='dataLayer' ? '&l='+l : '';
//     j.async=true;
//     j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
//     f.parentNode.insertBefore(j,f);
//   })(window,document,'script','dataLayer','GTM-P4FX6N8M');
// }, 2000);



// setTimeout(function () {
//   var gtagScript = document.createElement('script');
//   gtagScript.async = true;
//   gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=AW-16938916629';
//   document.head.appendChild(gtagScript);

//   window.dataLayer = window.dataLayer || [];
//   function gtag(){dataLayer.push(arguments);}
//   gtag('js', new Date());
//   gtag('config', 'AW-16938916629');
// }, 2000);



setTimeout(function () {
  var gaScript = document.createElement('script');
  gaScript.async = true;
  gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-KSK56LK5TD';
  document.head.appendChild(gaScript);

  window.dataLayer = window.dataLayer || [];
  function gtag(){ dataLayer.push(arguments); }

  gtag('js', new Date());
  gtag('config', 'G-KSK56LK5TD');
}, 2000);



// setTimeout(function () {
//   var script = document.createElement('script');
//   script.async = true;
//   script.type = 'text/javascript';
//   script.src = 'https://www.clickcease.com/monitor/stat.js';
//   document.head.appendChild(script);
// }, 3000);



function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-16938916629/BkeNCOySj7UbEJW2jY0_',
      'value': 1.0,
      'currency': 'USD',
      'event_callback': callback
  });
  return false;
}



  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'AW-16938917400');



(function () {
  window.addEventListener('load', function () {

    setTimeout(function () {

      (function(c,l,a,r,i,t,y){
          c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};

          t=l.createElement(r);
          t.async=1;

          // Add cache buster
          var cacheBuster = "?v=" + new Date().getTime();

          t.src="https://www.clarity.ms/tag/"+i+cacheBuster;

          y=l.getElementsByTagName(r)[0];
          y.parentNode.insertBefore(t,y);

      })(window, document, "clarity", "script", "v05wiwvf5f");

    }, 3000); // delay 3s

  });
})();



(function () {

    if (sessionStorage.getItem('external_referrer')) return;

    var ref = document.referrer;
    if (!ref) return;

    var currentHost = location.hostname;

    try {
        var refHost = new URL(ref).hostname;


        if (refHost && refHost !== currentHost) {
            sessionStorage.setItem('external_referrer', ref);
        }
    } catch (e) {

    }
})();


function redirectGetQuote() {

    const path = window.location.pathname
        .replace(/^\/|\/$/g, '')
        .toLowerCase();

    const query = window.location.search;

   
    if (!path) {
        window.location.href = "/allservices" + query;
        return;
    }

    const parts = path.split("/");

    let service = "";

    if (parts.length === 1) {
        service = parts[0];
    } else {
        service = parts[1].split("-services")[0];
    }


    const blocked = ["blog", "about", "contact", "privacy"];
    if (blocked.includes(service)) {
        window.location.href = "/allservices" + query;
        return;
    }


    window.location.href = "/" + service + "-steps" + query;
}

