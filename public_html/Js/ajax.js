<script type="text/javascript">(function(d, t, e, m){
        // Async Rating-Widget initialization.
        window.RW_Async_Init = function(){
        RW.init({
        huid: "147585",
                uid: "16161fb2288654f7be6ad2edfc1389da",
                source: "website",
                options: {
                "size": "medium",
                        "type": "nero",
                        "style": "thumbs"
            } 
        });
        RW.render();
    };

    // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        p = d.location.protocol, a = ("https:" == p ? "secure." + 
        m + "js/" : "js." + m), ck = "Y" + t.getFullYear() + "M" + 
        t.getMonth() + "D" + t.getDate();
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external.min.js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
}(document, new Date(), "script", "rating-widget.com/"));</script>