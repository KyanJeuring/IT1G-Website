import { contentSwitcher } from "./navigation.js";

function setButtonOnClick(buttonID, action)
{
    document.getElementById(buttonID).onclick = action;
}

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
    setButtonOnClick("loginButton", function() { contentSwitcher.loadPage("Login/Signup"); });
    setButtonOnClick("toggleOffer", function() { showOffer(); });

    console.log("Buttons loaded successfully");
}