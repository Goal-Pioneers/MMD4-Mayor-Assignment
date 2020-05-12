var navigation = new Vue(
    {
        el: '#ui-sidebar',
        data: 
        {
            buttons:[
                {
                    'name':'data-privacy-policy',
                    'logo':'<i class="fas fa-info-circle"></i>',
                    
                    'state':{

                    },

                    // on click
                    'action': function()
                    {

                    }
                },

                {
                    'name':'contact',
                    'logo':'<i class="fas fa-user-circle"></i>',
                    
                    'state':{

                    },
                    
                    // on click
                    'action': function()
                    {

                    }
                },

                {
                    'name':'change-theme',
                    'logo':'<i class="fas fa-sun"></i>',
                    
                    'state':{

                    },
                    
                    // on click
                    'action': function()
                    {

                    }
                },

                {
                    'name':'scroll-up',
                    'logo':'<i class="fas fa-arrow-up"></i>',
                    
                    'state':{

                    },
                    
                    // on click
                    'action': function()
                    {

                    }
                },

                {
                    'name':'show-menu',
                    'logo':'<i class="fas fa-th-list"></i>',
                    
                    'state':{

                    },
                    
                    // on click
                    'action': function()
                    {

                    }
                }
            ]
            
        }
    }
)