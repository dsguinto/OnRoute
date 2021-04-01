<?php

    require_once 'library/functions.php';
    //Add unqiue css files here
    $css = array('styles/index.css');
    require_once 'views/header.php';
?>

<!-- Content -->
<main>
<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 330" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(217, 162, 27, 1)" offset="0%"></stop>
            <stop stop-color="rgba(217, 162, 27, 1)" offset="100%"></stop>
        </linearGradient>
    </defs>
    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" 
    d="M0,165L80,154C160,143,320,121,480,143C640,165,800,231,960,264C1120,297,1280,297,1440,275C1600,253,1760,209,1920,165C2080,121,2240,77,2400,60.5C2560,44,2720,55,2880,66C3040,77,3200,88,3360,77C3520,66,3680,33,3840,38.5C4000,44,4160,88,4320,121C4480,154,4640,176,4800,154C4960,132,5120,66,5280,33C5440,0,5600,0,5760,5.5C5920,11,6080,22,6240,71.5C6400,121,6560,209,6720,225.5C6880,242,7040,187,7200,154C7360,121,7520,110,7680,126.5C7840,143,8000,187,8160,209C8320,231,8480,231,8640,198C8800,165,8960,99,9120,88C9280,77,9440,121,9600,165C9760,209,9920,253,10080,247.5C10240,242,10400,187,10560,137.5C10720,88,10880,44,11040,44C11200,44,11360,88,11440,110L11520,132L11520,330L11440,330C11360,330,11200,330,11040,330C10880,330,10720,330,10560,330C10400,330,10240,330,10080,330C9920,330,9760,330,9600,330C9440,330,9280,330,9120,330C8960,330,8800,330,8640,330C8480,330,8320,330,8160,330C8000,330,7840,330,7680,330C7520,330,7360,330,7200,330C7040,330,6880,330,6720,330C6560,330,6400,330,6240,330C6080,330,5920,330,5760,330C5600,330,5440,330,5280,330C5120,330,4960,330,4800,330C4640,330,4480,330,4320,330C4160,330,4000,330,3840,330C3680,330,3520,330,3360,330C3200,330,3040,330,2880,330C2720,330,2560,330,2400,330C2240,330,2080,330,1920,330C1760,330,1600,330,1440,330C1280,330,1120,330,960,330C800,330,640,330,480,330C320,330,160,330,80,330L0,330Z"></path>
    <defs>
        <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(217, 162, 27, 1)" offset="0%"></stop>
            <stop stop-color="rgba(217, 162, 27, 1)" offset="100%"></stop>
        </linearGradient>
    </defs>
    <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" 
    d="M0,165L80,159.5C160,154,320,143,480,126.5C640,110,800,88,960,71.5C1120,55,1280,44,1440,55C1600,66,1760,99,1920,110C2080,121,2240,110,2400,132C2560,154,2720,209,2880,231C3040,253,3200,242,3360,214.5C3520,187,3680,143,3840,143C4000,143,4160,187,4320,187C4480,187,4640,143,4800,104.5C4960,66,5120,33,5280,16.5C5440,0,5600,0,5760,49.5C5920,99,6080,198,6240,236.5C6400,275,6560,253,6720,253C6880,253,7040,275,7200,236.5C7360,198,7520,99,7680,60.5C7840,22,8000,44,8160,71.5C8320,99,8480,132,8640,121C8800,110,8960,55,9120,60.5C9280,66,9440,132,9600,137.5C9760,143,9920,88,10080,104.5C10240,121,10400,209,10560,242C10720,275,10880,253,11040,247.5C11200,242,11360,253,11440,258.5L11520,264L11520,330L11440,330C11360,330,11200,330,11040,330C10880,330,10720,330,10560,330C10400,330,10240,330,10080,330C9920,330,9760,330,9600,330C9440,330,9280,330,9120,330C8960,330,8800,330,8640,330C8480,330,8320,330,8160,330C8000,330,7840,330,7680,330C7520,330,7360,330,7200,330C7040,330,6880,330,6720,330C6560,330,6400,330,6240,330C6080,330,5920,330,5760,330C5600,330,5440,330,5280,330C5120,330,4960,330,4800,330C4640,330,4480,330,4320,330C4160,330,4000,330,3840,330C3680,330,3520,330,3360,330C3200,330,3040,330,2880,330C2720,330,2560,330,2400,330C2240,330,2080,330,1920,330C1760,330,1600,330,1440,330C1280,330,1120,330,960,330C800,330,640,330,480,330C320,330,160,330,80,330L0,330Z"></path>
</svg>
    <div class="mainQuote"><i class="fas fa-plane-departure"></i><h2>Your Dream Vacation Awaits</h2><i class="fas fa-plane-arrival"></i></div>
<svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 330" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(217, 162, 27, 1)" offset="0%"></stop>
            <stop stop-color="rgba(217, 162, 27, 1)" offset="100%"></stop>
        </linearGradient>
    </defs>
    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" 
    d="M0,165L80,154C160,143,320,121,480,143C640,165,800,231,960,264C1120,297,1280,297,1440,275C1600,253,1760,209,1920,165C2080,121,2240,77,2400,60.5C2560,44,2720,55,2880,66C3040,77,3200,88,3360,77C3520,66,3680,33,3840,38.5C4000,44,4160,88,4320,121C4480,154,4640,176,4800,154C4960,132,5120,66,5280,33C5440,0,5600,0,5760,5.5C5920,11,6080,22,6240,71.5C6400,121,6560,209,6720,225.5C6880,242,7040,187,7200,154C7360,121,7520,110,7680,126.5C7840,143,8000,187,8160,209C8320,231,8480,231,8640,198C8800,165,8960,99,9120,88C9280,77,9440,121,9600,165C9760,209,9920,253,10080,247.5C10240,242,10400,187,10560,137.5C10720,88,10880,44,11040,44C11200,44,11360,88,11440,110L11520,132L11520,330L11440,330C11360,330,11200,330,11040,330C10880,330,10720,330,10560,330C10400,330,10240,330,10080,330C9920,330,9760,330,9600,330C9440,330,9280,330,9120,330C8960,330,8800,330,8640,330C8480,330,8320,330,8160,330C8000,330,7840,330,7680,330C7520,330,7360,330,7200,330C7040,330,6880,330,6720,330C6560,330,6400,330,6240,330C6080,330,5920,330,5760,330C5600,330,5440,330,5280,330C5120,330,4960,330,4800,330C4640,330,4480,330,4320,330C4160,330,4000,330,3840,330C3680,330,3520,330,3360,330C3200,330,3040,330,2880,330C2720,330,2560,330,2400,330C2240,330,2080,330,1920,330C1760,330,1600,330,1440,330C1280,330,1120,330,960,330C800,330,640,330,480,330C320,330,160,330,80,330L0,330Z"></path>
    <defs>
        <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
            <stop stop-color="rgba(217, 162, 27, 1)" offset="0%"></stop>
            <stop stop-color="rgba(217, 162, 27, 1)" offset="100%"></stop>
        </linearGradient>
    </defs>
    <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" 
    d="M0,165L80,159.5C160,154,320,143,480,126.5C640,110,800,88,960,71.5C1120,55,1280,44,1440,55C1600,66,1760,99,1920,110C2080,121,2240,110,2400,132C2560,154,2720,209,2880,231C3040,253,3200,242,3360,214.5C3520,187,3680,143,3840,143C4000,143,4160,187,4320,187C4480,187,4640,143,4800,104.5C4960,66,5120,33,5280,16.5C5440,0,5600,0,5760,49.5C5920,99,6080,198,6240,236.5C6400,275,6560,253,6720,253C6880,253,7040,275,7200,236.5C7360,198,7520,99,7680,60.5C7840,22,8000,44,8160,71.5C8320,99,8480,132,8640,121C8800,110,8960,55,9120,60.5C9280,66,9440,132,9600,137.5C9760,143,9920,88,10080,104.5C10240,121,10400,209,10560,242C10720,275,10880,253,11040,247.5C11200,242,11360,253,11440,258.5L11520,264L11520,330L11440,330C11360,330,11200,330,11040,330C10880,330,10720,330,10560,330C10400,330,10240,330,10080,330C9920,330,9760,330,9600,330C9440,330,9280,330,9120,330C8960,330,8800,330,8640,330C8480,330,8320,330,8160,330C8000,330,7840,330,7680,330C7520,330,7360,330,7200,330C7040,330,6880,330,6720,330C6560,330,6400,330,6240,330C6080,330,5920,330,5760,330C5600,330,5440,330,5280,330C5120,330,4960,330,4800,330C4640,330,4480,330,4320,330C4160,330,4000,330,3840,330C3680,330,3520,330,3360,330C3200,330,3040,330,2880,330C2720,330,2560,330,2400,330C2240,330,2080,330,1920,330C1760,330,1600,330,1440,330C1280,330,1120,330,960,330C800,330,640,330,480,330C320,330,160,330,80,330L0,330Z"></path></svg>
<!--FORM TO BE FIXED IN ORDER TO FUNCTION (names, paths, etc.)-->
    <!-- <form>
        <nav class="formNav">
            <ul>
                <li class="formNav__link">Flights</li>
                <li class="formNav__link">Accomodations</li>
                <li class="formNav__link">Vehicles</li>
            </ul>
        </nav>
        <div class="initialForm">
            <h2>Your Dream Vacation Awaits </br> Replace with Image Slideshow?</h2>
        </div>
        <div class="tripFrom">
            <div class="tripFrom__input">
                <label>Leaving From</label>
                <input type=text />
            </div>
            <div class="tripFrom__input">
                <label>Going To</label>
                <input type=text />
            </div>
            <div class="tripFrom__input">
                <label>Departing</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <label>Returning</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <input class="tripFrom__input_btn" type=button value="Search" />
            </div>
        </div>   
        <div class="tripFrom">
            <div class="tripFrom__input">
                <label>Going To</label>
                <input type=text />
            </div>
                <div class="tripFrom__input">
                <label>Check In</label>
            <input type=date />
            </div>
            <div class="tripFrom__input">
                <label>Check Out</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <input class="tripFrom__input_btn" type=button value="Search" />
            </div>
        </div>
        <div class="tripFrom">
            <div class="tripFrom__input">
                <label>Pick Up Location</label>
                <input type=text />
            </div>
            <div class="tripFrom__input">
                <label>Pick Up Date</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <label>Drop Off Date</label>
                <input type=date />
            </div>
            <div class="tripFrom__input">
                <input class="tripFrom__input_btn" type=button value="Search" />
            </div>
        </div>
    </form> -->
    <div class="banner">
        <h2>Explore, Save, Enjoy</h2>
    </div>
    <div class="deals">
        <div class="deals__popular">
            <h2>Popular Destinations</h2>
            <div class="deals__popular_opt">
                <a href="flights.php"><img src="images/index/benjamin-bindewald-NewYork.jpg" alt="Image of the Statue of Liberty from unsplash.com"/></a>
            </div>
            <div class="deals__popular_opt">
                <a href="flights.php"><img src="images/index/grillot-edouard-Paris.jpg" alt="Image of the Eiffel Tower from unsplash.com" /></a>
            </div>
            <div class="deals__popular_opt">
                <a href="flights.php"><img src="images/index/martijn-baudoin-Japan.jpg" alt="Image of red Japanese gates from unsplash.com"/></a>
            </div>
            <div class="deals__popular_opt">
                <a href="flights.php"><img src="images/index/roman-lopez-Mexico.jpg" alt="Image of a city in Mexico from unsplash.com"/></a>
            </div>
        </div>
    </div>
</main>

<?php
    require_once 'views/footer.php';
?>