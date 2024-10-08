export function loadToContentContainer(content)
{
    fetch(content)
        .then(response => response.text()) // Get the response as text (HTML content)
        .then(data => {
            document.getElementById("content").innerHTML = data; // Inject the content  
            console.log(content + " loaded successfully");   // Log success      
        })
        .catch(error => console.error('Error loading external HTML:', error));
}

// Create a function that changes the display value in css for the login form
var toggle = false
function showLogin()
{
    if(toggle == false)
    {
        document.getElementById('login').style.display="block";
        toggle = true;
    }
    else
    {
        document.getElementById('login').style.display="none";
        toggle = false;
    }
}

export function setupButtonListeners()
{
    document.getElementById("logoButton").onclick = function() { loadToContentContainer("content/landingPage.php"); };
    document.getElementById("aboutButton").onclick = function() { loadToContentContainer("content/aboutPage.php"); };
    document.getElementById("shopButton").onclick = function() { loadToContentContainer("content/storePage.php"); };
    document.getElementById("menButton").onclick = function() { loadToContentContainer("content/storePage.php"); };
    document.getElementById("womenButton").onclick = function() { loadToContentContainer("content/storePage.php"); };
    document.getElementById("contactButton").onclick = function() { loadToContentContainer("content/contactPage.php"); };
    document.getElementById("toggleLogin").onclick = function() { showLogin(); };

    console.log("Buttons loaded successfully");
}