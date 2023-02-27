<?php
require_once("person.php");
$person1 = new Person();
$person1->setName("Rashedur Rahman");
$person1->setEmail("jituoou@gmail.com");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Assign 5, Task 1 and 3</title>
</head>

<body>

    <div class="grid place-items-center h-screen">
        <div class="w-full max-w-xs">
            <div class="mb-4">
                <b>Showing result for task 2</b>
                <br>
                <?php
                echo $person1->getName();
                echo "<br>";
                echo $person1->getEmail();
                ?>
                <hr class="mt-5 mb-5">
            </div>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 
                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Your Name" required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 
                    px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Your email address" required>
                </div>
                <div class="flex items-center justify-between">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 cursor-pointer
                    text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
            </form>
            <div class="showing-result">
                <?php
                if (
                    isset($_POST['name'])
                    && isset($_POST['email'])
                ) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $submited_person = new Person();
                    $submited_person->setName($name);
                    $submited_person->setEmail($email);
                    ?>
                    <b>Showing submmited result</b> <br>

                    <?php
                    echo $submited_person->getName();
                    echo "<br>";
                    echo $submited_person->getEmail();
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>