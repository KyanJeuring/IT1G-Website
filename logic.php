<?php
    $pageName = filter_input(INPUT_POST, "navBtn");
    $location = "content/landingPage.php";
    $contentSwitcher = new contentSwitcher();

    if(!empty($pageName)) $contentSwitcher->switchContent($pageName);

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
                new page("Login", "content/loginSignup.php", [])
            ]);
        }

        function switchContent($pageName)
        {
            $GLOBALS['location'] = $this->findPage($pageName)->location;
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