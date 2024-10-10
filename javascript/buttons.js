import { contentSwitcher } from "./navigation.js";

function setButtonOnClick(buttonID, action)
{
    document.getElementById(buttonID).onclick = action;
}

// Create a function that changes the display value in css for the login form
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

var toggleOffer = false
function showOffer()
{
    if(toggleOffer == false)
    {
        document.getElementById('offerPopup').style.display="block";
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

    console.log("Buttons loaded successfully");
}