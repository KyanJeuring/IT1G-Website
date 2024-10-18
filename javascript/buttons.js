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

var chatExpanded = false;
function toggleChat()
{
    document.getElementById("chatBox").className = chatExpanded ? "" : "expandChat";
    chatExpanded = !chatExpanded;
}

export function setupButtonListeners()
{
    setButtonOnClick("toggleOffer", function() { showOffer(); });
    setButtonOnClick("chatBtn", function() { toggleChat(); });

    console.log("Buttons loaded successfully");
}