
var componentFrontpageShowcase = null;

/** 
new Vue
(
    {
        el: '#component-frontpage-showcase',

        data: 
        {
            tabs:[
                {
                    title: 'Programmering',
                    summary:'',
                    tagId:'tab-programming',
                    isActive:true
                },
                
                {
                    title: 'Search Engine Optimisation',
                    summary:'',
                    tagId:'tab-seo',
                    isActive:false
                }
            ],

            contentdata:
            [
                {
                    tagId:'tab-programming',
                    isLoaded:false,
                    data:'',
                    retrieveUrl:'#'
                },
                
                {
                    tagId:'tab-seo',
                    isLoaded:false,
                    data:'',
                    retrieveUrl:'#'

                }

            ]

        },
        methods:
        {
            loadTab: function(event)
            {
                console.log(event);
                
            }
        }
    }
)*/