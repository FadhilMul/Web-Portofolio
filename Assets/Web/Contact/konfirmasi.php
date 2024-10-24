<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Confirmation</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body class="bg-dark">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-5 mt-4 ">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <?php
                        include 'db.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name = htmlspecialchars($_POST['name']);
                            $email = htmlspecialchars($_POST['email']);
                            $phone = htmlspecialchars($_POST['phone']);
                            $message = htmlspecialchars($_POST['message']);

                            // Menggunakan $pdo untuk eksekusi query
                            $sql = "INSERT INTO contacts (name, email, phone, message) VALUES (:name, :email, :phone, :message)";

                            $stmt = $pdo->prepare($sql);
                            $stmt->bindParam(':name', $name);
                            $stmt->bindParam(':email', $email);
                            $stmt->bindParam(':phone', $phone);
                            $stmt->bindParam(':message', $message);

                            if ($stmt->execute()) {
                                echo "<div class='alert alert-success' role='alert'>";
                                echo "<h1 class='display-5'>Thank You, " . $name . "!</h1>";
                                echo "<p class='lead'>We have received your message:</p>";
                                echo "<blockquote class='blockquote'>" . $message . "</blockquote>";
                                echo "<hr>";
                                echo "<p>We will get back to you at <strong>" . $email . "</strong> or call you at <strong>" . $phone . "</strong>.</p>";
                                echo "<p>Have a great day!</p>";
                                echo "</div>";
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>";
                                echo "Error: Could not save your message.";
                                echo "</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "<h1 class='display-6'>Access Denied</h1>";
                            echo "<p>You need to submit the form first.</p>";
                            echo "</div>";
                        }
                        ?>

                        <a href="../../../index.php" class="btn btn-dark mt-4">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>