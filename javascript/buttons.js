import { contentSwitcher } from "./navigation.js";

function setButtonOnClick(buttonID, action)
{
    document.getElementById(buttonID).onclick = action;
}

// Function that changes the display value in css for the login form
var toggleLogin = false
function showLogin()
{
    if(toggleLogin == false)
    {
        document.getElementById('login').style.display="flex";
        toggleLogin = true;
    }
    else
    {
        document.getElementById('login').style.display="none";
        toggleLogin = false;
    }
}

// functions that toggles the toggleOffer and changes the display value and calls an animation
var toggleOffer = false
function showOffer()
{
    if(toggleOffer == false)
    {
        document.getElementById('offerPopup').style.display="block";
        document.getElementById('offerPopup').className = 'fadeInAnimation';
        toggleOffer = true;
    }
    else
    {
        document.getElementById('offerPopup').style.display="none";
        toggleOffer = false;
    }
}

export function setupButtonListeners()
{
    setButtonOnClick("logoButton", function() { contentSwitcher.loadPage("Home"); });
    setButtonOnClick("aboutButton", function() { contentSwitcher.loadPage("About"); });
    setButtonOnClick("shopButton", function() { contentSwitcher.loadPage("Store"); });
    setButtonOnClick("menButton", function() { contentSwitcher.loadPage("Store"); });
    setButtonOnClick("womenButton", function() { contentSwitcher.loadPage("Store"); });
    setButtonOnClick("contactButton", function() { contentSwitcher.loadPage("Contact"); });
    setButtonOnClick("toggleLogin", function() { showLogin(); });
    setButtonOnClick("toggleOffer", function() { showOffer(); });

    console.log("Buttons loaded successfully");
}