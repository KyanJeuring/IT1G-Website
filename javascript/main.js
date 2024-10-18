import { setupButtonListeners } from "./buttons.js";
import { contentSwitcher } from "./navigation.js";

window.onload = function()
{
    // Get the query string from the URL
    const queryString = window.location.search;
    // Parse the query string
    const urlParams = new URLSearchParams(queryString);
    
    if(urlParams.has('search'))
    {
        contentSwitcher.loadPage("Store");
    }

    setupButtonListeners();
}