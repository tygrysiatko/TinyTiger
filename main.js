$(document).ready(function(){

/* * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *  jQuery initialization and general fixes
 *
 *
 * * * * * * * * * * * * * * * * * * * * * * * * */

    "use strict";

    // Hack for android > 3 browsers to avaible bootstrap 3.0 modal functionality
    function isOverflowScroll(){
        var startString = navigator.userAgent.indexOf("Android ");
        var alphaVersion = navigator.userAgent.substr(startString + 8, 1);
        if (alphaVersion < 3) {
            return false;
        } else {
            return true;
        }
    }

    if (!isOverflowScroll()) {
      $('body')
        .addClass('no-overflow-scroll')
        .on('show.bs.modal', function(event) {
          $(event.target).css('padding-top', $(window).scrollTop());
        });
    }

    // IE Mobile 10 device-width fix
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
      var msViewportStyle = document.createElement("style")
      msViewportStyle.appendChild(
        document.createTextNode(
          "@-ms-viewport{width:auto!important}"
        )
      )
      document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
    }





// DOM jQuery selections

    var $footer = $("footer");
    var $login = $("footer #login");
    var $modal = $("#loginModal");
    var $asideOptions = $("figure #asideOptions")

    var $togglePlay = $("#asideCanvas nav #togglePlay");
    var $toggleSound = $("#asideCanvas nav #toggleSound");
    var $toggleVideo = $("#asideCanvas nav #toggleVideo");
    var $toggleOptions = $("#asideCanvas nav #toggleOptions");






// Global variables





// Assigning event listeners
    $footer.on("click", hdlClickFooter);
    $login.on("click", hdlClickLogin);

    $togglePlay.on("click", hdlClickTogglePlay);
    $toggleSound.on("click", hdlClickToggleSound);
    $toggleVideo.on("click", hdlClickToggleVideo);
    $toggleOptions.on("click", hdlClickToggleOptions);





// Event handlers

    // Toggle footer display - fx add class with a transition from animations css and make text visible?
    function hdlClickFooter(event) {
        var _width = $(window).width(); // Browsers viewport width
        if (_width <= 992 ) {
            //footer for small viewport
        }else if (_width > 992) {
            //footer for big viewport
        }
    }

    // Display login modal
    function hdlClickLogin(event) {
        $modal.modal();
    }

    // Toggle play button
    function hdlClickTogglePlay(event){
        alert("play");
    }

    // Toggle sound button
    function hdlClickToggleSound(event){
        alert("sound");
    }

    // Toggle video button
    function hdlClickToggleVideo(event){
        alert("video");
    }

    // Toggle options button
    function hdlClickToggleOptions(event){
        alert("huj");
    }






    // Main top navigation transition styling
    var nav = $("#navbarTop ul li");
    $.each(nav, function(){
        var $this = $(this);
        $this.on("click", function(e){
            $.each(nav, function() {
               $(this).removeClass("active hatch");
            });
            $this.addClass("active hatch");
        });
    });


    // Holder.js


    // Construct video player
    var videoPlayer = Popcorn.jplayer("#videoContainer", {
        media: {
            m4v: "media/video/360/intro.mp4",
            poster: "img/logo/logo.v4.360.png"},
        options: {
            solution: "html, flash",
            supplied: "m4v",
            swfPath: "plugins/jPlayer",
            volume: 0,
            size: {
                width: "360px"
            },
            click: function(e) {
                $(this).jPlayer(e.jPlayer.status.paused ? "play" : "pause");
            }
        }
    });

})