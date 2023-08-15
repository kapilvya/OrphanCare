<?php include './components/header.php'; ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './components/top-menu.php'; ?>

        <!-- BODY Content -->
        <div class="ui grid">
            <!-- Left menu -->
            <?php include './components/side-menu.php'; ?>
            
            <!-- right content -->
            <div class="twelve wide column">
                <h1>Donation Application</h1>

                <?php

                  if(isset($_POST['submit_donation'])) {
                    $program = $_POST['program'];
                    $amount = $_POST['amount'];
                    $checkno = $_POST['check'];
                    $bank_name = $_POST['bank_name'];
                    $place = $_POST['place'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];

                    $sql = "INSERT INTO donation (program, amount, checkno, bank_name, place, d_name, email, phone, d_address) 
                            VALUES ('$program', '$amount', '$checkno', '$bank_name', '$place', '$name', '$email', '$phone', '$address')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script> alert('Successfully Donation form Submitted'); </script>";
                    } else {
                        echo "<script> alert('Error in Insertion'); </script>";
                    }
                    
                    $conn->close();


                  }

                ?>

                <form action="<?php $_PHP_SELF ?>" method="post" class="ui form">

                    <h4 class="ui dividing header">Select the program to sponsor</h4>
                    <div class="grouped fields">
                        <label for="program">Programs: </label>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Program 1" value="Program 1">
                            <label for="Program 1">Program 1</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Program 2" value="Program 2">
                            <label for="Program 2">Program 2</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Program 3" value="Program 3">
                            <label for="Program 3">Program 3</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Program 4" value="Program 4">
                            <label for="Program 4">Program 4</label>
                          </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="Program 5" value="Program 5">
                            <label for="Program 5">Program 5</label>
                          </div>
                        </div>

                        <!-- <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="program" tabindex="0" class="hidden" id="uphaar" value="Uphaar">
                            <label for="uphaar">Program 6</label>
                          </div>
                        </div> -->
                    </div>

                    <div class="field">
                      <label>Amount</label>
                      <input type="number" name="amount" min="1" placeholder="Amount" required>
                    </div>

                    <h4 class="ui dividing header">Check and Demand Draft</h4>
                    <div class="field">
                      <label>Check / DD no.</label>
                      <input type="text" name="check" placeholder="Check / DD no." required>
                    </div>
                    <div class="field">
                      <label>Bank Name</label>
                      <input type="text" name="bank_name" placeholder="Bank Name" required>
                    </div>
                    <div class="field">
                      <label>Place</label>
                      <input type="text" name="place" placeholder="Place" required>
                    </div>

                    <h4 class="ui dividing header">Personal Information</h4>
                    <div class="field">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="field">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <label>Phone no.</label>
                        <input type="tel" name="phone" placeholder="Phone / Mobile" required>
                    </div>
                    <div class="field">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Address" required>
                    </div>
                    <button name="submit_donation" class="ui primary button" type="submit">Submit</button>
                    <button class="ui button" type="reset">Reset</button>


                </form>

                <span class="p-20"></span>
            </div>
        </div>

    </div>
    
<?php include './components/footer.php'; ?>