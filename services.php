<?php
$pageTitle = "Our Services";
$section = null;
include ('include/header.php');
?>
        <h1>
            Our Services
        </h1>
        <main>
            <div class="service-card">
                <img src="service1.jpeg" alt="Service 1">
                <h2>Patient</h2>
                <p>The patient is among the customers who can register as a member of our system. They put in their details from the registration form and can view them once they log in.
                    Moreover, they can update their details and view their prescriptions all from their custom home page!
                </p>
            </div>
            <div class="service-card">
                <img src="service2.png" alt="Service 2">
                <h2>Doctor</h2>
                <p>
                    The doctor has the same abilities as the patient does with a few add-ons.
                    Any person registered as a doctor can add write prescriptions for their specific patients and view the same prescriptions to make any edits to them.
                </p>
            </div>
            <div class="service-card">
                <img src="service3.jpeg" alt="Service 3">
                <h2>Pharmacist</h2>
                <p>
                    The Pharmacist plays the role of running the whole drug dispensing part. 
                    They are in charge of adding drugs to the system and ensuring the stock of medicine is always up to date.
                    They are the ones who dispense drugs from the different prescriptions written by the doctors to the different patients making sure they get their medicine on time.
                </p>
            </div>
        </main>
<?php
include ('include/footer.php');
?>