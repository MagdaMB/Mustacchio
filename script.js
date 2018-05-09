document.addEventListener("DOMContentLoaded", function(){
    var face = document.querySelector(".footer__icons--facebook");
    var google = document.querySelector(".footer__icons--googleplus");
    var pinterest = document.querySelector(".footer__icons--pinterest");
    var twitter = document.querySelector(".footer__icons--twitter");

        face.addEventListener("mouseover", function() {
            this.src = "images/icons/icon-facebook-hover.jpg";
        });

        face.addEventListener("mouseout", function() {
            this.src = "images/icons/icon-facebook.jpg";
        });

        google.addEventListener("mouseover", function() {
            this.src = "images/icons/icon-googleplus-hover.jpg";
        });

        google.addEventListener("mouseout", function() {
            this.src = "images/icons/icon-googleplus.jpg";
        });

        pinterest.addEventListener("mouseover", function() {
            this.src = "images/icons/icon-pinterest-hover.jpg";
        });

        pinterest.addEventListener("mouseout", function() {
            this.src = "images/icons/icon-pinterest.jpg";
        });

        twitter.addEventListener("mouseover", function() {
            this.src = "images/icons/icon-twitter-hover.jpg";
        });

        twitter.addEventListener("mouseout", function() {
            this.src = "images/icons/icon-twitter.jpg";
        });
})