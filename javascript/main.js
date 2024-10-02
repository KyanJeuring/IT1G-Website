window.onload = function()       {
    fetch("content/landingPage.php")
        .then(response => response.text()) // Get the response as text (HTML content)
        .then(data => {
            document.getElementById("content").innerHTML = data; // Inject the content  
            console.log("Main page content loaded successfully");   // Log success      
        })
        .catch(error => console.error('Error loading external HTML:', error));
}