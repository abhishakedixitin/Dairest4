<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Filter Orders <span><a href="admin.php"><h3>Go back to Admin Panel</h3></a> </span></h2>

                <p> Here you can search orders through a date range. You can leave an input empty as well to search with only one input.</p>
                <p> Give Start date and End Date in format YYYY-MM-DD</p>
                <p> To pull all records after a start date give start date and the end date as 9999-12-31</p>
                <p> To pull all records after a before date give start date as 1901-01-01 and the end date</p>
                <!-- passing start date and end date to the check-order-table2 -->
                <form action="check-order-table2.php" method="post">

                    <div class="form-group">
                        <label> Start Date</label>
                        <input type="text" name="startdate" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> End Date</label>
                        <input type="text" name="enddate" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>

    </div>
</body>
</html>
