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