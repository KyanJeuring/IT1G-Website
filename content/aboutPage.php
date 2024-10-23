<?php
class review
        {
            public $reviewID;
            public $reviewerName;
            public $occupation;
            public $reviewTitle;
            public $reviewContent;
            public $rating;
            public function __construct($reviewID, $reviewerName, $occupation, $reviewTitle, $reviewContent, $rating)
            {
                $this->reviewID = $reviewID;
                $this->reviewerName = $reviewerName;
                $this->occupation = $occupation;
                $this->reviewTitle = strtoupper($reviewTitle);
                $this->reviewContent = $reviewContent;
                $this->rating = $rating;
            }
        }
?>
<section class=heroHeaderAboutContainer>
    <div class="familyPicture">
        <img src="resources/reviews/familyPicture.png" alt="familyPicture">
    </div>
    <div class="companyMotives">
        <h1>WE CARE ABOUT YOU</h1>
        <h2>LET'S SAVE THE EARTH TOGETHER</h2>
        <p>
            At Sunny, we believe that even the simplest daily actions, 
            like putting on your socks, hold the potential to uplift spirits 
            and add a splash of joy to life.
        </p>
        <p>
            Our name, Sunny, reflects our core ethos: to always look on the bright side.
            Our products do more than just clothe your feet—they embody positivity, 
            add color to your routine, and create benefits for everyone involved, 
            rom the ground up.
        </p>
    </div>
</section>

    <section class="reviewsOnAboutPage">
        <div class="slider-wrapper">
            <div class="slider">
                <?php
                    $reviews = 
                    [
                        new review('R1', 'Oliver P.', 'Student', 'The best pair of socks I own', 'The fit and feel of these socks are fantastic. They&apos;re soft, breathable, and keep my feet fresh all day. The only downside is I wish there were more colour options, but the sustainability aspect more than makes up for it!', 'fourStar'),
                        new review('R2', 'Lucy M.', 'Employee', 'I fell in love with the new collection', 'I love that Sunny Socks focuses on sustainability without sacrificing quality. These socks are soft, stretchy, and last longer than most brands I&apos;ve tried. Plus, the fact that they&apos;re made from organic materials makes me feel good about my purchase.', 'fiveStar'),
                        new review('R3','Micheal B.','Athlete','Comfort that lasts','Sunny Socks are fantastic for outdoor activities! I wore them for a weekend of camping, and they held up perfectly. They stayed warm even when it rained. I just wish they had a thicker winter version, but overall, they&apos;re amazing.','fourStar'),
                        new review('R4','Rachel S.','Designer','Sock heaven: comfort &amp; fashion','The fit and feel of these socks are fantastic. They&apos;re soft, breathable, and keep my feet fresh all day. The only downside is I wish there were more colour options, but the sustainability aspect more than makes up for it!','fiveStar'),
                        new review('R5', 'Emma R.', 'Teacher', 'Eco-friendly socks! ', 'I absolutely love my Sunny Socks! They&apos;re so soft and comfortable, and it feels great knowing they&apos;re made from eco-friendly materials. The bamboo fabric keeps my feet dry all day. I&apos;ve already bought more pairs for the whole family!', 'fiveStar'),
                        new review('R6', 'Ben H.', 'Student', 'Great quality', 'The quality of these socks is unmatched. I&apos;ve been wearing them for months, and they still look brand new. It&apos;s rare to find such durable and eco-friendly socks at this price point. I&apos;m a lifelong customer now.', 'fourStar'),
                        new review('R7', 'Sophie L.', 'Accountant', 'Game Changing Socks', 'These socks are a game-changer! The natural materials feel so much better than synthetic fabrics. I&apos;ve worn them on hikes, and they kept my feet warm and dry. Highly recommend them to anyone who cares about comfort and sustainability.', 'fiveStar'),
                        new review('R8', 'James T.', 'Freelancer', 'I love Sunny Socks!', 'I was looking for sustainable socks, and Sunny Socks exceeded my expectations. They&apos;re incredibly durable and stylish, and I love the earthy designs. Plus, knowing they&apos;re good for the planet makes wearing them even better!', 'fiveStar')
                    ];
                    foreach($reviews as $review)
                    {
                        echo "<div id='".$review->reviewID."' class='review'>";
                        echo "<section id='rS1'>";
                        echo "<img class='photoCustomer' src='resources/reviews/People/".$review->reviewID.".png' alt='photoCustomer'>";
                        echo "</section>";
                        echo "<section id='rS2'>";
                        echo "<div>";
                        echo "<div class='qMU'><img src='resources/reviews/qMU.png' alt='quotationMarks'></div>";
                        echo "<div class='nameAndStars'>";
                        echo "<h2>".$review->reviewerName." -<span class='normalText'>".$review->occupation."</span></h2>";
                        echo "<img class='reviewStars' src='resources/reviews/".$review->rating.".png' alt='".$review->rating."'>";
                        echo "</div>";
                        echo "<div class='descriptionToTheReviews'>";
                        echo "<h3>".$review->reviewTitle."</h3>";
                        echo "<p class='normalText'>".$review->reviewContent."</p>";
                        echo "</div>";
                        echo "<div class='qMD'><img src='resources/reviews/qMD.png' alt='quotationMarks'></div>";
                        echo "</div>";
                        echo "</section>";
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="slider-nav">
                <?php foreach($reviews as $review){echo "<a href='#".$review->reviewID."'></a>";}?>
            </div>
        </div>
    </section>

<section class="backgroundImageContainer">
    <h1>OUR VALUES</h1>
    <div class="contentOfThePage">
        <div class="boxPositivity">
            <div class="headingPositivity">
                <h2>POSITIVITY</h2>
            </div>
            <div class="positivityDescription">
                <p>
                    Positivity is ingrained in our DNA. 
                    Sunny is all about embracing the bright side of life. We see every challenge as
                    an opportunity to innovate and deliver solutions that not only meet needs 
                    but exceed expectations.
                </p>
            </div>
        </div>
        <div class="boxColorful">
           <div class="headingColorful">
                <h2>COLORFUL</h2>
            </div>
            <div class="colorfulDescription">
                <p>
                    We bring vibrancy to the everyday with socks that add a pop of color to your wardrobe. 
                    By transforming the mundane—basic white socks—into a canvas of creativity,
                    we celebrate individuality and joy.
                </p>
            </div>
        </div>
        <div class="boxBeneficial">       
            <div class="headingBeneficial">
                <h2>BENEFICIAL</h2>
            </div>
            <div class="beneficialDescription">
                <p>
                    At Sunny, we strive for win-win scenarios. Our business model ensures that everyone involved—from the materials 
                    suppliers to our factory workers—benefits. Our products are crafted with respect for the Earth, 
                    offering fair wages in our factories, fair profits for our retailers, and high-quality, 
                    priced socks for our customers.
                </p>
            </div>
        </div>
</section>