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