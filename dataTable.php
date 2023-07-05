<!DOCTYPE html>
<html>
    <head>
        <title>Data display</title>
    </head>
    <body>
        <table border="1" cellpadding="5" id="data table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>number</th>
                    <th>address</th>
                    <th>sickness</th>
                    <th>doctor_name</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'dataViewer.php'; ?>
            </tbody>
        </table>
    </body>
</html>