<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/student-dashboard.css">
    <title>Student dashboard</title>
</head>

<body>
    <div class="main">
        <div class="main__section">
            <h3>Create new application</h3>
            <p>Please input details</p>
            <form action="">

                <div class="name__section">
                    <div class="first_name">
                        <label for="fname">First name</label>
                        <input type="text" class="fname" name="fname">
                    </div>
                    <div class="last_name">
                        <label for="lname">Last name</label>
                        <input type="text" class="lname" name="lname">
                    </div>
                </div>

                <div class="stduentid_de"><label for="stduentid">Student Id</label>
                    <input type="text" class="stduentid" name="studentid">
                </div>
                <div class="email_de"><label for="email">Email</label>
                    <input type="email" class="email" name="email">
                </div>

                <p>Date of birth</p>
                <div class="dateofbirth" id="bday-div">

                    <select name="bday" id="bday">
                        <option value="">Day</option>
                    </select>
                    <select name="bmonth" id="bmonth">
                        <option value="">Month</option>
                    </select>
                    <select name="byear" id="byear">
                        <option value="">Year</option>
                    </select>
                </div>

                <div class="contact__num"><label for="contactnum">Contact number</label>
                    <input type="text" class="contactnum" name="contactnum">
                </div>





            </form>

        </div>


    </div>
</body>

</html>