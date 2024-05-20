<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    ?>
</head>

<body>
    <?php
    $page = 'review.php';
    include "header.php";
    ?>

    <!--Rating - form-->
    <div class="container" id="review-cont">
        <form method="post" action="review-writing.php">
            <div class="form-group">
                <label for="choice">Country</label>
                <select type="country" class="form-control" id="choice" name="choice">
                    <option class="disabled" value="0">Select country</option>
                    <option value="1">Slovakia</option>
                    <option value="2">United Kingdom</option>
                    <option value="3">Czech Republic</option>
                </select>
            </div>
            <br>
            <!--Kreativne hviezdy-->
            <div class="rating-box">
                <div class="stars">
                    <h5>Rate us!</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                </div>
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" id="comment" rows="5" name="review"></textarea>
            </div>
            <!-- Kreativny switch, js popup-->
            <label class="switch">
                <input type="checkbox" id="agree" name="agree" required>
                <span class="slider round"></span>
            </label>
            <p>I agree with my personal data being used for marketing purposes</p>
            <br>
            <button type="submit" class="btn btn-dark" onclick="checkForm()">Submit</button>
        </form>

        <div id="overlay">
            <div id="popup">
                <p>Thank you for your feedback!</p>
                <button type="submit" onclick="hidePopup()" class="btn btn-dark">Close</button>
            </div>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>