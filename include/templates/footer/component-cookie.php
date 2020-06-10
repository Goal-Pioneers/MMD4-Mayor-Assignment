<div id="cookie-policy" 
     v-bind:class="{'hide-cookie':isHidden, loaded:true}">
     
    <div class="main-section"> 

        <!-- -->
        <div> 
            <p> Vi anvender cookie på denne side. </p>
            
            <ul> 
                <li> til teknisk funktionalit til at have siden kørende. </li>
                <li> til marketing for at finde ud af brugs adfærd </li>
            </ul>
        </div>
        
        <div> 
            <!-- -->
            <div> 
                <input type="checkbox" id="cookies-func" name="functional" value="" checked>
                <label for="functional"> Basis funktionalitet </label> 
                
                </br>
            
                <input type="checkbox" id="cookies-marketing" name="marketing" value="">
                <label for="marketing"> Marketing </label>
            </div>
        </div>
    </div>
    
    <div class="position-action hide-on-mobile">
        <div class="button" onclick="cookiePolicy.changeState;"> 
            <i class="fas fa-cookie"></i>
        </div> 
    </div>
</div>