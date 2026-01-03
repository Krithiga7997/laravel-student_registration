<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration Form</title>
    </head>
    <body>
        <h2>Student Registration Form</h2>
        <div class="container">
            <form action="/student_registration" method="post">
                @csrf
                <div class="form-input">
                    <label for="student_name">Student Name:</label>
                    <input type="text" name="student_name" ><br/>
                </div>
                <div class="form-input">
                    <label for="registration_no">Registration_No:</label>
                    <input type="text" name="student_name" ><br/>
                </div>
                <div class="form-input">
                    <label for="email">Email:</label>
                    <input type="email" name="email" ><br/>
                </div>
                <div class="form-input">
                    <label for="department">Department:</label>
                    <input type="text" name="department" ><br/>
                </div>
                <div class="form-input">
                    <label for="semester">Semester:</label>
                    <input type="text" name="semester" ><br/>
                </div>
                <div class="form-submit">
                    <input type="submit" name="student_submit" value="Registration">
                </div>
            </form>
        </div>
    </body>
</html>