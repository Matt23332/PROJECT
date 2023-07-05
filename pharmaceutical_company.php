<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Pharmacy Management System</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--wrapper-->
        <div class="wrapper">
            <section>
                <center>
                    <header>
                        Pharmaceutical Company form
                    </header>
                </center>
                <!--PHARMACEUTICAL COMPANY FORM STARTS HERE-->
                <form action="add_company.php" class="header" method="POST">
                    <div class="field input">
                        <label for="">Company Name</label>
                        <input type="text" name="company_name" placeholder="Enter the company name">
                    </div>
                    <div class="field input">
                        <label for="">Telephone Number</label>
                        <input type="text" name="number" placeholder="Enter the telephone number">
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="ADD COMPANY">
                    </div>
                </form>
                <!--PHARMACEUTICAL COMPANY FORM ENDS HERE-->
            </section>
        </div>
        <!--wrapper-->
    </body>
</html>