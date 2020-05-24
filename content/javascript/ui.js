function goBack()
{
    window.history.back();
}

function goToTopOfPage()
{
    console.log("go to top of page.");
 
    //var footer = document.getElementById('footer-area');
    //footer.scrollIntoView(); 
    
    //var header = document.getElementById('header-static-navigation');
}

var screenY = 0;

window.onscroll = function()
{
    //console.log("scroll detected");
    screenY = window.pageYOffset;
    
}