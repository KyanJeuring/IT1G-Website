import { loadToContentContainer, setupButtonListeners } from "./buttons.js";

window.onload = function()
{
    loadToContentContainer("content/landingPage.php");
    setupButtonListeners();
}