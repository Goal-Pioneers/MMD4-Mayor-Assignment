
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