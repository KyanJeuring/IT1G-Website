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

export function setupButtonListeners()
{
    document.getElementById("logoButton").onclick = function() { loadToContentContainer("content/landingPage.php"); };
    document.getElementById("aboutButton").onclick = function() { loadToContentContainer("content/aboutPage.php"); };
    document.getElementById("shopButton").onclick = function() { loadToContentContainer("content/storePage.php"); };
    document.getElementById("menButton").onclick = function() { loadToContentContainer("content/storePage.php"); };
    document.getElementById("womenButton").onclick = function() { loadToContentContainer("content/storePage.php"); };

    console.log("Buttons loaded successfully");
}