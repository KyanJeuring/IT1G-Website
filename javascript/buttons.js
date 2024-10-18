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
    setButtonOnClick("toggleOffer", function() { showOffer(); });

    console.log("Buttons loaded successfully");
}