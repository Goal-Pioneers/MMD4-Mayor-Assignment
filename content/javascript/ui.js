
var screenY = 0;

var goToTop = false;
var goToBottom = true;

function goBack()
{
    window.history.back();
}

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

function showUINavigation()
{

}

function adjustLight()
{
    
}

window.onscroll = function()
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

// Fix
function fix_screen_issues()
{
    screen_min_height();
}


function screen_min_height()
{
    var window_height = window.innerHeight;
    var static_header = document.getElementById('header-static-navigation');
    var difference = window_height - static_header.clientHeight;

    console.log(difference);

    var main = document.getElementById('main-view');
    main.style.minHeight = difference.toString() + "px";
}

fix_screen_issues();

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