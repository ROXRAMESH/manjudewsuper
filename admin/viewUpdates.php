<?php
require "slider.php";
?>


<div class="wrapper d-flex flex-column min-vh-100 bg-light">

    <?php
require "header.php";
require "../config/database.php";
?>


    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <!-- Boby-area -->



            <div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">update_img</th>
                            <th scope="col">update_text</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
$dbs =Database::search("SELECT * FROM `latest_update`");
 

for($x = 0;$x<$dbs->num_rows;$x++){
    $inq =$dbs->fetch_assoc();
    $inqIDk = $inq["update_id"];
    
    ?>
                        <tr>
                            <th scope="row"><?php echo $inq["update_id"] ?></th>


                            <td><img src="../config/<?php echo $inq["update_img"] ?>" width="50px" alt=""></td>
                            <td><?php echo $inq["update_text"] ?></td>
                            <td><button class="btn btn-danger"
                                    onclick="viewUpdate('<?php echo $inqIDk ?>')">Delete</button>
                            </td>

                        </tr>

                        <?php
}
?>


                    </tbody>
                </table>
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

<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="vendors/simplebar/js/simplebar.min.js"></script>
<script src="../js/function.js"></script>
<script>
</script>

</body>

</html>