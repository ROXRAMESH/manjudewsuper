<?php
require "slider.php";
?>


<div class="wrapper d-flex flex-column min-vh-100 bg-light">

    <?php
require "header.php";
?>


    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <!-- Boby-area -->

            <div class="row">
                <div>
                    <span>Client Name</span>
                    <input id="cn" type="text" class="form-control">
                </div>

                <div>
                    <span>Feedback</span>
                    <textarea id="fb" name="" id="" class="col-12"></textarea>
                </div>

                <div>
                    <span>Images</span>
                    <input id="img" type="file" class="form-control">
                </div>

                <div class="mt-4">
                    <button onclick="submitFeedback()" class="btn btn-primary">Submit</button>
                </div>


            </div>

            <!-- Boby-area -->

        </div>
    </div>
    <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022
            creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
    </footer>
</div>







<!-- CoreUI and necessary plugins-->
<script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="vendors/simplebar/js/simplebar.min.js"></script>
<script src="../js/function.js"></script>
<script>
</script>

</body>

</html>