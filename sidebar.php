<?php ?>
    <div class="sidebar">
        
        <div class="ui-sidebar-button hide-on-desktop" 
             id="ui-action-show-menu" 
             onclick="mobileNavigation.changeState;"> 
                <span> 
                    <i class="fas fa-bars">
                    </i>
                </span>
        </div>

        <div class="ui-sidebar-button not-developed" 
             id="ui-action-question" 
             onclick=""> 
            <span> 
                <i class="fas fa-question">
                </i>
            </span>
        </div>

        <div class="ui-sidebar-button not-developed" 
             id="ui-action-adjust-light" 
             onclick="adjustLight();"> 
            <span> 
                <i class="fas fa-adjust">
                </i>
            </span>
        </div>

        <div class="ui-sidebar-button hide-on-desktop" 
             id="ui-action-cookies" 
             onclick="cookiePolicy.changeState;"> 
            <span> 
                <i class="fas fa-cookie">
                </i>
            </span>
        </div>

        <div class="ui-sidebar-button" 
             id="ui-action-go-to-top" 
             onclick="goToTopOfPageOrDown();">
            <span id="ui-state-arrow-up" 
                  class="hide-object"> 
                <i class="fas fa-chevron-up">
                </i>
            </span>

            <span id="ui-state-arrow-down"> 
                <i class="fas fa-chevron-down">
                </i>
            </span>
        </div>


    </div>
<?php ?>