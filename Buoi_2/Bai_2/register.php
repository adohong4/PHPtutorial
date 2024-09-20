<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    l
</head>

<body>
    <div class="container mt-5">
        <h2>Registration Form</h2>
        <?php
        $registrationData = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $registrationData = [
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'email' => $_POST['email'],
                'gender' => $_POST['gender'],
                'state' => $_POST['state'],
                'hobbies' => isset($_POST['hobbies']) ? implode(',', $_POST['hobbies']) : ''
            ];
            echo '<div class="alert alert-success" role="alert">Đăng ký thành công!</div>';
        }
        ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name"
                    required>
            </div>
            <div class="form-group">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label>Gender</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select class="form-control" id="state" name="state" required>
                    <option value="Johor">Johor</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Washington">Washington</option>
                </select>
            </div>
            <div class="form-group">
                <label>Hobbies</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" id="badminton" value="badminton">
                    <label class="form-check-label" for="badminton">Badminton</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" id="football" value="football">
                    <label class="form-check-label" for="football">Football</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" id="bicycle" value="bicycle">
                    <label class="form-check-label" for="bicycle">Bicycle</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save record</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>

        <?php if (!empty($registrationData)): ?>
        <h3 class="mt-4">Thông tin đã đăng ký:</h3>
        <div class="border p-3">
            <p>First name: <?php echo htmlspecialchars($registrationData['firstName']); ?></p>
            <p>Last name: <?php echo htmlspecialchars($registrationData['lastName']); ?></p>
            <p>Email: <?php echo htmlspecialchars($registrationData['email']); ?></p>
            <p>Gender: <?php echo htmlspecialchars($registrationData['gender']); ?></p>
            <p>State: <?php echo htmlspecialchars($registrationData['state']); ?></p>
            <p>Hobbies: <?php echo htmlspecialchars($registrationData['hobbies']); ?></p>
        </div>
        <?php endif; ?>
    </div>

</body>

</html>