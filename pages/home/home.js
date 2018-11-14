$(function () {
    if (screen.width > 1024) {
        var isScrolling = false;
        var subpages = ['#about-section', '#about-section-2', '#about-kjsce'];
        for (var i = 1; i < subpages.length; i++) {
            $(subpages[i]).hide();
        }
        var currentIndex = 0;

        var elem = document.getElementById('home'),
            marker = true,
            delta,
            direction,
            interval = 50,
            counter1 = 0,
            counter2;

        if (elem.addEventListener) {
            if ('onwheel' in document) elem.addEventListener('wheel', wheel);
            else if ('onmousewheel' in document) elem.addEventListener('mousewheel', wheel);
            else elem.addEventListener('MozMousePixelScroll', wheel);
        } else elem.attachEvent('onmousewheel', wheel);

        function wheel(e) {
            e.preventDefault();
            counter1 += 1;
            e = e || window.event;
            delta = e.deltaY || e.detail || e.wheelDelta;
            if (delta > 0) {
                direction = 'up';
            } else {
                direction = 'down';
            }
            if (marker) wheelStart();
            return false;
        }

        function wheelStart() {
            marker = false;
            if (direction == 'up')
                previousPage();
            else
                nextPage();
            wheelAct();
        }

        function wheelAct() {
            counter2 = counter1;
            setTimeout(function () {
                if (counter2 == counter1) {
                    wheelEnd();
                } else {
                    wheelAct();
                }
            }, interval);
        }

        function wheelEnd() {
            marker = true,
                counter1 = 0,
                counter2 = 0;
        }


        function nextPage() {
            if (currentIndex > 0) {
                deactivateIndicator();
                currentIndex--;
                activateIndicator();
                $(subpages[currentIndex + 1]).toggle();
                $(subpages[currentIndex]).toggle();
            }
        }

        function previousPage() {
            if (currentIndex < subpages.length - 1) {
                deactivateIndicator();
                currentIndex++;
                activateIndicator();
                $(subpages[currentIndex - 1]).toggle();
                $(subpages[currentIndex]).toggle();
            }
        }

        function deactivateIndicator() {
            $('#page-' + currentIndex).removeClass('active');
        }

        function activateIndicator() {
            $('#page-' + currentIndex).addClass('active');
        }
    }
});
