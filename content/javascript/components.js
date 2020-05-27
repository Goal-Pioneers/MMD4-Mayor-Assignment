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

                    return this.showNavigation;
                }
            },

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