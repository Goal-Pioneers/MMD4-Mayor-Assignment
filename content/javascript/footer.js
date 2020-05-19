
var footer = new Vue(
    {
        el: '#ui-footer-misc',
        data: 
        {
            copyright: {
                content:'Copyright',
                year:'2020',
                company: 'Goal Pioneers'
            },
            // Fundet en løsning på et tidspunkt
            links:
            [
                {
                    name:'sitemap',
                    uri:'https://www.goalpioneers.dk/sitemap.xml'
                },
                
                {
                    name:'retslige',
                    uri:'./legal'
                },
                
                {
                    name:'politikker',
                    uri:'./policies/'
                },

                {
                    name:'ordbog',
                    uri:'./glossary/'
                },
                {
                    name:'ofte stillede spørgsmål',
                    uri:'./faq/'
                }
            ]

        }
    }
)