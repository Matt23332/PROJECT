<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Pharmacy Management System</title>

        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--wrapper-->
        <div class="wrapper">
            <section>
                <center>
                    <header>
                        Drug form
                    </header>
                </center>
                <!--drug form starts here-->
                <form action="add_drug.php" class="header" method="POST">
                    <div class="field input">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter the drug name">
                    </div>
                    <div class="field input">
                        <label for="">Formula</label>
                        <input type="text" name="formula" placeholder="Enter the drug formula">
                    </div>
                    <div class="field input">
                        <label for="">Price</label>
                        <input type="text" name="price" placeholder="Enter the drug price">
                    </div>
                    <div class="field input">
                        <label for="">Company Name</label>
                        <input type="text" name="company_name" placeholder="Enter the name of the company">
                    </div>
                    <div class="field input">
                        <label for="">Manufacture date</label>
                        <input type="date" name="manufacture_date" placeholder="Enter the date of manufacture">
                    </div>
                    <div class="field input">
                        <label for="">Expiry Date</label>
                        <input type="date" name="expiry_date" placeholder="Enter the expiry date">
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="ADD DRUG">
                    </div>
                </form>
                <!--drug form ends here-->
            </section>
        </div>
        <!--wrapper-->
    </body>
</html>