$(function(){
    var isScrolling = false;
    var subpages = ['#default-home-section', '#about-section', '#about-kjsce'];
    for(var i=1;i<subpages.length;i++) {
        $(subpages[i]).hide();
    }
    var currentIndex = 0;
    $('.home').bind('mousewheel', function(e){
        e.preventDefault();
        alert("Evenr Gennerated");
        if(!isScrolling) {
            isScrolling = true;
            setTimeout(function(){
                isScrolling = false;
            }, 1500);
            if(e.originalEvent.wheelDelta /120 > 0) {
                if(currentIndex > 0) {
                    currentIndex--;
                    $(subpages[currentIndex+1]).toggle();
                    $(subpages[currentIndex]).toggle();
                }
            }
            else{
                if(currentIndex < subpages.length - 1) {
                    currentIndex++;
                    $(subpages[currentIndex-1]).toggle();
                    $(subpages[currentIndex]).toggle();
                }
            }
        }
    });
});
