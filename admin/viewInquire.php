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

            <div id="msgmodal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 id="msubid" class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="masgid">Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Ok</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">View Massage</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $dbs = Database::search("SELECT * FROM `inquire` INNER JOIN `email` ON email.email_id=inquire.email_id");


                        for ($x = 0; $x < $dbs->num_rows; $x++) {
                            $inq = $dbs->fetch_assoc();
                            $inqIDk = $inq["inquire_id"];
                            $subj = $inq["inquire_subject"];
                            $masg = $inq["inquire_message"];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $inq["inquire_id"] ?></th>
                                <td><?php echo $inq["fname"] ?></td>
                                <td><?php echo $inq["lname"] ?></td>
                                <td><?php echo $inq["mobile_no"] ?></td>
                                <td><?php echo $inq["email"] ?></td>
                                <td><button class="btn btn-primary" onclick="viewModal('<?php echo $subj ?>','<?php echo $masg ?>')">View</button></td>

                                <td><button class="btn btn-danger" onclick="deleteInquire('<?php echo $inqIDk ?>')">Delete</button>
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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="vendors/simplebar/js/simplebar.min.js"></script>
<script src="../js/function.js"></script>
<script>
</script>

</body>

</html>