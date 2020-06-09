 // Vue Classes

    // Header Mobile Navigation
var mobileNavigation = new Vue(
    {
        el: '#header-mobile-navigation',
        data: 
        {
            showNavigation: false
        },
        method:
        {
    
        },
        computed:
        {
            changeState: 
            {
                cache: false,

                get: function()
                {    
                    this.showNavigation =! this.showNavigation;

                    if( this.showNavigation )
                    {
                        // Add NoScroll
                    }
                    else 
                    {
                        // Disable NoScroll
                    }

                    return this.showNavigation;
                }
            },

            filterScroll:
            {
                cache: false,

                get: function()
                {
                    return null;
                }

            }
            ,

            isHidden: 
            {
                cache: false,

                get: function()
                {
                    return !this.showNavigation;
                }
            },

            isToBeShown: 
            {
                cache: false,

                get: function()
                {
                    return this.showNavigation;
                }
            }
        }
    }
)

var desktopDynamicNavigation = new Vue(
    {
        el: '#header-dynamic-desktop',
        data: 
        {
            showNavigation: false
        },
        method:
        {
    
        },
        computed:
        {
            changeState:
            {
                cache: false,
                
                get: function()
                {
                    this.showNavigation = !this.showNavigation;

                    return this.showNavigation;
                }
            },

            currentState:
            {
                cache:false,

                get: function()
                {
                    return this.showNavigation;
                }
            },

            isHidden:
            {
                cache:false,

                get: function()
                {
                    return !this.showNavigation;
                }
            }
            


        }
    }
)

//
var cookiePolicy = new Vue
(
    {
        el: '#cookie-policy',
        data: 
        {
            showPolicy: true,
            firstTime: true
        },
        method:
        {
    
        },
        computed:
        {
            changeState: 
            {
                cache: false,

                get: function()
                {   
                    console.log('Change Cookie Policy State');
                    this.showPolicy = !this.showPolicy;

                    if( this.firstTime )
                    {
                        document.cookie = "isAccepted=true;";
                    }

                    return this.showPolicy;
                }
            },

            filterScroll:
            {
                cache: false,

                get: function()
                {
                    return null;
                }

            }
            ,

            isHidden: 
            {
                cache: false,

                get: function()
                {
                    return !(this.showPolicy);
                }
            }
        },
        created()
        {
            console.log("cookie policy has been created");
            var allCookies = document.cookie;
            
            if( allCookies.includes( "isAccepted=true;" ) )
            {
                this.firstTime = false;
                this.showPolicy = false;
            }
        }
    }
)

// Global Variables
var screenY = 0;

var goToTop = false;
var goToBottom = true;

// Event
function goBack()
{
  console.log("GoBack is called");
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
function adjustLight()
{

}

function highligtPage()
{
    var currentUrl = window.location.href;

    highligtPage_traverse_first( currentUrl );
}

function highligtPage_traverse_first( highlight )
{
    //
    var static_header = document.getElementById( 'header-navigation' );
    
    highligtPage_traverse( static_header, highlight );

    var dynamic_header = document.getElementById( 'header-navigation-dynamic' );
    highligtPage_traverse( dynamic_header, highlight );

    var mobile_header = document.getElementById( 'header-navigation-mobile' );
    highligtPage_traverse( mobile_header, highlight );

}

function highligtPage_traverse( element, highlight )
{
    

    var children = element.childNodes;
    var idx = 0;

    for( idx = 0; 
         idx < children.length; 
         idx++ )
    {
        var current = children[idx];


        if( current.nodeName == 'LI' )
        {
            highligtPage_traverse(current, highlight);
        }

        if( current.nodeName == 'A' )
        {
            if( current.href === highlight )
            {
                current.classList.add("active-link");

            }
        }
        
    }
    

}

// Event
function onScrollEvent()
{
    screenY = window.pageYOffset;

    var size = document.body.scrollHeight - window.innerHeight;

    var mid = size/2;

    var hideClass = 'hide-object';

    var upArrow = document.getElementById('ui-state-arrow-up');
    var downArrow = document.getElementById('ui-state-arrow-down');

    
    upArrow.classList.remove( hideClass );
    downArrow.classList.remove( hideClass );


    if( screenY < mid )
    {
        this.goToBottom = true;
        this.goToTop = false;

        upArrow.className += ' ' + hideClass;
    }

    if( screenY > mid )
    {
        this.goToTop = true;
        this.goToBottom = false;

        downArrow.className += ' ' + hideClass;
    }

    if( screenY > 500 )
    {
        if( desktopDynamicNavigation.isHidden )
        {
            desktopDynamicNavigation.changeState;
        }
    }
    else 
    {
        if( desktopDynamicNavigation.currentState )
        {
            desktopDynamicNavigation.changeState;
        }
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

function hideUIFirstpage()
{
    var imageSection = document.getElementById('header-ui-logo');

    if( !(imageSection == null) )
    {
        
    }

}

// Action part of the script, adding events. etc. execute this.

// Executes, when the page is done loading the elements
document.addEventListener('DOMContentLoaded',
    function()
    {
        fix();
        highligtPage();
        hideUIFirstpage();
    },
false );

 window.onscroll = function()
 {
     onScrollEvent();
 }