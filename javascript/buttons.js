import { contentSwitcher } from "./navigation.js";

function setButtonOnClick(buttonID, action)
{
    document.getElementById(buttonID).onclick = action;
}

export function setupButtonListeners()
{
    setButtonOnClick("logoButton", function() { contentSwitcher.loadPage("Home"); });
    setButtonOnClick("aboutButton", function() { contentSwitcher.loadPage("About"); });
    setButtonOnClick("shopButton", function() { contentSwitcher.loadPage("Store"); });
    setButtonOnClick("menButton", function() { contentSwitcher.loadPage("Store"); });
    setButtonOnClick("womenButton", function() { contentSwitcher.loadPage("Store"); });
    setButtonOnClick("contactButton", function() { contentSwitcher.loadPage("Contact"); });

    console.log("Buttons loaded successfully");
}