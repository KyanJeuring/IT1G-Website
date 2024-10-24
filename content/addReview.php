<div id="reviewAddSection">
    <?php
        class reviewInput
        {
            public $reviewerNameInput;
            public $reviewerEmailInput;
            public $occupationInput;
            public $reviewTitleInput;
            public $reviewContentInput;
            public $ratingInput;

            public function __construct()
            {
                $this->reviewerNameInput = filter_input(INPUT_POST, 'reviewerNameInput');
                $this->reviewerEmailInput = filter_input(INPUT_POST, 'reviewerEmailInput');
                $this->occupationInput = filter_input(INPUT_POST, 'occupationInput');
                $this->reviewTitleInput = filter_input(INPUT_POST, 'reviewTitleInput');
                $this->reviewContentInput = filter_input(INPUT_POST, 'reviewContentInput');
                $this->ratingInput = filter_input(INPUT_POST, 'ratingInput');
            }
            public function addReview()
            {
                $filePath = 'data/reviews.json';
                if (file_exists($filePath)) 
                {
                    $currentReviews = json_decode(file_get_contents($filePath), true);
                    array_push($currentReviews, $this);
                    file_put_contents($filePath, json_encode($currentReviews, JSON_PRETTY_PRINT));

                    return true;
                }
                return false;
            }
        }
        $submitReview = filter_input(INPUT_POST, 'submitReview', FILTER_VALIDATE_BOOLEAN);
        if($_SERVER['REQUEST_METHOD'] == 'POST' && $submitReview)
        {
            $reviewInput = new reviewInput();
            $reviewInput->addReview();
            ?>
                <h1 class="submitMessage">Thank you for writing a review!</h1>
                <img class="checkmarkForSubmission" src="resources/icons/svg/checkmark.svg">
            <?php
        }
        else
        {
    ?>
    <form id="reviewForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"> 
        <label for="reviewerNameInput">Name:</label>
        <input type="text" id="reviewerNameInput" name="reviewerNameInput" placeholder="Name" required>

        <label for="reviewerEmailInput">Email:</label>
        <input type="email" id="reviewerEmailInput" name="reviewerEmailInput" placeholder="example@banana.com" required>

        <label for="occupationInput">Occupation:</label>
        <input type="occupation" id="occupationInput" name="occupationInput" placeholder="Occupation" required>

            <p>Rate:</p>
            <div class="stars">
                <input type="radio" name="ratingInput" id="star-1" class="rating-radio" value="oneStar">
                <label for="star-1"><i class="fa-solid fa-star"></i></label>
                
                <input type="radio" name="ratingInput" id="star-2" class="rating-radio" value="twoStar">
                <label for="star-3"><i class="fa-solid fa-star"></i></label>

                <input type="radio" name="ratingInput" id="star-3" class="rating-radio" value="threeStar">
                <label for="star-3"><i class="fa-solid fa-star"></i></label>

                <input type="radio" name="ratingInput" id="star-4" class="rating-radio" value="fourStar">
                <label for="star-4"><i class="fa-solid fa-star"></i></label>

                <input type="radio" name="ratingInput" id="star-5" class="rating-radio" value="fiveStar">
                <label for="star-5"><i class="fa-solid fa-star"></i></label>
            </div>  
        
        <label for="reviewTitleInput">Review Title:</label>
        <input type="title" id="reviewTitleInput" name="reviewTitleInput" placeholder="The Best Socks In The World">

        <label for="reviewContentInput">Your Comment:</label>
       <textarea id="reviewContentInput" name="reviewContentInput" rows="4" cols="50" placeholder="Write A Review And Get 5% Discount"></textarea>
       <input type="hidden" name="submitReview" value="true">
       <button id="submitBtn" type="submit" name="navBtn" value="AddReview">Write Your Own Review</button>
    </form>
    <?php }?>
</div>

 
 
 