let progress = document.getElementById('progressBar')

let totalHeight = document.body.scrollHeight - window.innerHeight
window.onscroll = function () {
    
    let progressHeight = (window.pageYOffset / totalHeight) * 100
    progress.style.height = progressHeight + '%'
    
}


window.onload = function () {
  document.body.classList.add('loaded_hiding');
  window.setTimeout(function () {
    document.body.classList.add('loaded');
    document.body.classList.remove('loaded_hiding');
  }, 500);
}


AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    
  
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 600, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  
  });

jQuery(document).ready(function () {

    jQuery('.video_item').on('click', function () {
        
        var videopath;

        videopath = jQuery(this).attr('data-video');

        jQuery('#video').attr('src', videopath);
    })

    jQuery('#addblur').on('click', function () {
        
        jQuery('.video').addClass('filter');

    })
    jQuery('#removeblur').on('click', function () {
        
        jQuery('.video').removeClass('filter');

    })


    jQuery('#menu_button').on('click', function(){
        jQuery('#menu').slideDown(1000)
    })
    jQuery('#close_menu').on('click', function(){
        jQuery('#menu').slideUp(1000)
    })
    // TODO box link

    // TODO add Box

    jQuery('#open_1').on('click', function(){
        jQuery('#box_blocks_1').slideDown(1000)
    })
    jQuery('#open_2').on('click', function(){
        jQuery('#box_blocks_2').slideDown(1000)
    })
    jQuery('#open_3').on('click', function(){
        jQuery('#box_blocks_3').slideDown(1000)
    })
    jQuery('#open_4').on('click', function(){
        jQuery('#box_blocks_4').slideDown(1000)
    })
    jQuery('#open_5').on('click', function(){
        jQuery('#box_blocks_5').slideDown(1000)
    })
    jQuery('#open_6').on('click', function(){
        jQuery('#box_blocks_6').slideDown(1000)
    })

    // TODO Remove Box

    jQuery('#close_1').on('click', function(){
        jQuery('#box_blocks_1').slideUp(1000)
    })
    jQuery('#close_2').on('click', function(){
        jQuery('#box_blocks_2').slideUp(1000)
    })
    jQuery('#close_3').on('click', function(){
        jQuery('#box_blocks_3').slideUp(1000)
    })
    jQuery('#close_4').on('click', function(){
        jQuery('#box_blocks_4').slideUp(1000)
    })
    jQuery('#close_5').on('click', function(){
        jQuery('#box_blocks_5').slideUp(1000)
    })
    jQuery('#close_6').on('click', function(){
        jQuery('#box_blocks_6').slideUp(1000)
    })

    // Navigation

    $("body").on("click", ".cards_container a[href^='#']", function(e) {
        e.preventDefault();
        var $this = $(this);
        $("body,html").animate({
            scrollTop: $($this.attr("href")).offset().top
        }, 1000);
    });
    $("body").on("click", ".neon_button1 a[href^='#']", function(e) {
        e.preventDefault();
        var $this = $(this);
        $("body,html").animate({
            scrollTop: 500
        }, 1000);
    });


})