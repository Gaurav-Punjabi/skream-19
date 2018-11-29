(
    function($) {
        var NavbarHandler= { 
            init: function() {
                this.cacheDom();
                this.eventBind()
            }, 
            cacheDom: function() {
                this.container = $("#container"); 
                this.mainPage = $("#main");
                this.sideBar = $(".side-bar");
                this.toggleButton = $("#fuck");
                this.mainContainer = $("#main .container");
                this.window = $(window);
                this.usesVH = $(".usesvh");
                this.usesVH2=$("div")
            },
            toggleNav: function() {
                console.log("helloWorld");
                this.container.toggleClass("openbar1");
                this.mainPage.toggleClass("openbar");
                this.sideBar.toggleClass("openbar2")
            }, 
            eventBind: function() {
                this.toggleButton.on("click",this.toggleNav.bind(this))
            }
        };
        NavbarHandler.init()
    })(jQuery);
    $("#menu-toggle").click(function(e){e.preventDefault();$("#wrapper").toggleClass("toggled")});