<?php
    // instantiate contentSwitcher
    $contentSwitcher = new contentSwitcher();
    
    $pageName = filter_input(INPUT_POST, "navBtn");
    $pageToDisplay = $contentSwitcher->rootPage;

    if(!empty($pageName)) 
    {
        $pageToDisplay = $contentSwitcher->findPage($pageName);
    }

    // page class represents a page on the website
    class page
    {
        public $name;
        public $location;
        public $subPages = [];
        public $parent;

        public function __construct($name, $location, $subPages)
        {
            $this->name = $name;
            $this->location = $location;
            $this->subPages = $subPages;

            $this->setParents();
        }

        function setParents()
        {
            foreach($this->subPages as $subPage)
            {
                $subPage->parent = $this;
            }
        }

        function getButton()
        {
            return "<button type='submit' name='navBtn' value='$this->name'>$this->name</button>";
        }
    }

    function printNavLinks($page)
    {
        if($page->parent !== null) 
        {
            printNavLinks($page->parent);
            echo " <img src='resources/icons/svg/rightArrow.svg' alt='arrowIcon'> ";
        }
        echo $page->getButton();
    }

    class contentSwitcher
    {
        public $rootPage;
        
        public function __construct()
        {
            $this->rootPage = new page("Home", "content/landingPage.php", [
                new page("About", "content/aboutPage.php", []),
                new page("Shop", "content/storePage.php", []),
                new page("Contact", "content/contactPage.php", []),
                new page("Login", "content/loginSignup.php", []),
                new page("Checkout", "content/checkoutPage.php", [])
            ]);
        }

        function findPage($pageName, $parentPage = null)
        {
            //set default parameter
            if ($parentPage === null) $parentPage = $this->rootPage;
            
            if($parentPage->name === $pageName)
            {
                //target is the current page
                return $parentPage;
            }

            // look for target in sub pages
            foreach($parentPage->subPages as $subPage)
            {
                $foundPage = $this->findPage($pageName, $subPage);
                if($foundPage !== false)
                {
                    return $foundPage;
                }
            }
            
            return false;
        }
    }
?>