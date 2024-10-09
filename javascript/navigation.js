class Page
{
    constructor(name, contentPath, childPages = [], parentPage = null)
    {
        this.name = name;
        this.contentPath = contentPath;
        this.childPages = childPages;
        this.parentPage = parentPage;
        this.setParentChildPages();
    }

    setParentChildPages() {
        this.childPages.forEach(childPage => {
            childPage.parentPage = this;
        });
    }

    getButton()
    {
        let button = document.createElement("button");
        let pageName = this.name;

        button.innerText = pageName;
        button.onclick = function() { contentSwitcher.loadPage(pageName) };
        return button;
    }
}

export class NavLinks
{
    static container = document.getElementById("navLinks");
    
    static displayPath(page) 
    {
        this.container.innerHTML = "";
        this.createPathButtons(page);
    }

    static createPathButtons(page)
    {
        if(page.parentPage !== null) 
        {
            this.createPathButtons(page.parentPage);
        }
        this.container.appendChild(page.getButton());
    }
}

export class contentSwitcher
{
    static rootPage = 
        new Page("Home", "content/landingPage.php", [
            new Page("About", "content/aboutPage.php", []),
            new Page("Store", "content/storePage.php", []),
            new Page("Contact", "content/contactPage.php", []),
        ]);

    static loadToContentContainer(content)
    {
        fetch(content)
            .then(response => response.text()) // Get the response as text (HTML content)
            .then(data => {
                document.getElementById("content").innerHTML = data; // Inject the content  
            })
            .catch(error => console.error('Error loading external HTML:', error));
    }  

    static findPage(pageName, parentPage = this.rootPage) {
        if (parentPage.name === pageName) {
            return parentPage;
        } else {
            for (let childPage of parentPage.childPages) {
                let foundPage = this.findPage(pageName, childPage);
                if (foundPage) {
                    return foundPage;
                }
            }
        }
        return false;
    }
    
    static loadPage(pageName)
    {
        let page = this.findPage(pageName);
        if(page === false)
        {
            console.log("Page not found");
            return false
        }
        
        this.loadToContentContainer(page.contentPath);
        NavLinks.displayPath(page);

        return true;
    }
}