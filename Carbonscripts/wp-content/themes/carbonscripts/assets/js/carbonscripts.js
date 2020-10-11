(function() {
    window.addEventListener('DOMContentLoaded', function() {
        let headerHeight, style;
        if(typeof document.getElementById("cs-header") !== 'undefined') {
            style = getComputedStyle(document.getElementById("cs-header"));
            headerHeight = parseInt(document.getElementById("cs-header").clientHeight) + parseInt(style.margin);
            console.log(headerHeight);
        }
        if(typeof document.getElementById("cs-main") !== 'undefined') {
            document.getElementById("cs-main").style.marginTop = headerHeight;
        }
    });
    window.addEventListener('resize', function() {
        let headerHeight, style;
        if(typeof document.getElementById("cs-header") !== 'undefined') {
            style = getComputedStyle(document.getElementById("cs-header"));
            headerHeight = parseInt(document.getElementById("cs-header").clientHeight) + parseInt(style.margin);
            console.log(headerHeight);
        }
        if(typeof document.getElementById("cs-main") !== 'undefined') {
            document.getElementById("cs-main").style.marginTop = headerHeight;
        }
    });
})();