// Global Variables
var screenY = 0;

var goToTop = false;
var goToBottom = true;

// Event
function goBack()
{
    window.history.back();
}

// Event
function goToTopOfPageOrDown()
{
    const zero = 0;

    if( goToBottom )
    {
        var footer = document.getElementById('footer-area');
        footer.scrollIntoView(); 
    }

    if( goToTop )
    {
        window.scrollTo( zero, zero );
    }
}

// Event
function showUINavigation()
{

}

// Event
function adjustLight()
{
    
}

// Event
function onScrollEvent()
{
    screenY = window.pageYOffset;

    var size = document.body.scrollHeight - window.innerHeight;

    var mid = size/2;

    if(screenY < mid)
    {
        this.goToBottom = true;
        this.goToTop = false;
    }

    if(screenY > mid)
    {
        this.goToTop = true;
        this.goToBottom = false;
    }
}

// Faq
function showAnswer(element_id)
{
    console.log("show answer called");
    
    var element = document.getElementById(element_id);

    if(!element.classList.contains('show'))
    {
        element.className += 'show';
    }
    else 
    {
        element.className = '';
    }
}

// Fix
function fix()
{
    // console.log("fix Called");
    screen_min_height();

    return "success";
}

function screen_min_height()
{
    var window_height = window.innerHeight;

    // console.log({"window height:": window_height});

    var static_header = document.getElementById('header-static-navigation');

    var static_header_height = static_header.clientHeight;
    //console.log({"Static Header height": static_header_height});

    var difference = window_height - static_header_height;
    //console.log({"difference": difference});

    var main = document.getElementById('main-view');
    main.style.minHeight = difference.toString() + "px";
}

// Action part of the script, adding events. etc. execute this.

// Executes, when the page is done loading the elements
document.addEventListener('DOMContentLoaded', 
    function() 
    {
        fix();
    }, 
false );

 window.onscroll = function()
 {
     onScrollEvent();
 }