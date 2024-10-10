import { setupButtonListeners } from "./buttons.js";
import { contentSwitcher } from "./navigation.js";

window.onload = function()
{
    setupButtonListeners();

    contentSwitcher.loadPage("Home");
}