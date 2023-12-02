<?php
    #my details info 
    $title = "Introduce Yourself";
    $name = "William B. Adornado Jr.";
    $nickname = "Will";
    $age = "18 years old";
    $address = "Rosario, Pasig City";
    $school = array("Rosario Elementary School", "Eusebio Highschool");
    $knowledge = "Average";
    $reason = array("Because I want to know more about the programming language", "Because I want to know more about software and hardware", "Because it is related to my main course, which is Computer Engineering", "To be able to work with my Aunt in Japan who is also a Programmer");
    $achievement = array("3rd Place in Capstone Research", "2nd Place in Tarpapel Research", "2nd Place in Skills Com Web Develop");
    $emoji = array("&#127859", "&#128214", "&#127918");
    $motto = "Surpass Your Own Limit";
?>

<?php
    #essay content XD
    $essay = "<p>To get started with XAMPP, the first step is to download the XAMPP panel in your preferred browser or the Edge browser suggested by your teacher, <em><u>Sir Romm James Cuya</u></em>. Once the download is complete, place it in the C: or IOS directory and create a folder named <strong>'XAMPP'</strong> to easily remember its location on your PC or laptop.</p>
    <p>Next, open the XAMPP panel, which will also launch and activate the Apache and MySQL services. This step is crucial to ensure that XAMPP is working properly. To confirm this, try searching for <strong>'localhost'</strong> in your browser. If everything is functioning correctly, it should automatically redirect you to the XAMPP dashboard. If not, there may be an issue with your XAMPP installation that needs to be addressed.</p>
    <p>After verifying that XAMPP is working, create a folder within the XAMPP directory. Locate the <strong>'htdocs'</strong> folder where you can organize your files and create PHP files. It is important to create files in this specific folder to avoid any potential errors. Once you have created the necessary folder, open <i>Visual Studio Code</i> (VSCode) and navigate to the folder you created earlier. This is where you will write your PHP code and perform other necessary tasks.</p>
    <p>To check if your work is functioning correctly, type the name of the folder you created in the localhost address in your browser. This will display the view of your progress and ensure that your work is running as expected.</p>
    <p>By following these steps, you will be able to successfully set up XAMPP, create folders, and work on your PHP files using VSCode. Remember to regularly test your work by accessing the localhost address in your browser to evaluate your progress and make any necessary adjustments.</p>";
?> 

<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $title ?></title>
    <link rel='shortcut icon' href='media/MFI.png' type='image/x-icon'>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>

<?php
#one php echo(print) only to easy to check my code XD
echo "
    <h1> $title </h1>
    <div class='introduction'>
        <img src='media/Picture1.png' alt='Profile Picture' title=' $name '>
        <div class='name'>
            <h2>Name: </h2>
            <marquee behavior='slide' direction='up'><p><mark> $name </mark></p></marquee>
        </div>
        <div class='nickname'>
            <h2>Nickname: </h2>
            <marquee behavior='slide' direction='up'><p><mark> $nickname </mark></p></marquee>
        </div>
        <div class='age'>
            <h2>Age: </h2> $age
        </div>
        <div class='edu'>
            <h2>Educational Background: </h2>
            <ul>
                <li>Elementary: </li>  $school[0]
                <li>Highschool: </li>  $school[1]
            </ul>
            <img src='media/RES.jpg' alt='Rosario Elementary School image' title='Elementary school'>
            <img src='media/EHS.jpg' alt='Eusebio Highschool image' title='Highschool'>
        </div>
        <div class='address'>
            <h2>Address: </h2>
            <p> $address </p>
            <img src='media/location.jpg' alt='try to find me XD' title='location'>
        </div>
        <div class='knowledge'>
            <h2>Knowledge in programming: </h2> 
            <p> $knowledge </p>
            <img src='media/skills.jpg' alt='image of php program'>
        </div>
        <div class='informatiom'>
            <h2>Why IT? </h2>
            <ul>
                <li> $reason[0] </li>
                <li> $reason[1] </li>
                <li> $reason[2] </li>
                <li> $reason[3] </li>
            </ul>
        </div>
        <div class='mfi'>
            <h2>Why MFI? </h2> I choose to enroll in school because it is conveniently located near my house and it aligns with my previous academic focus in STEM.
        </div>
       <div class='expect'>
            <h2>Expectations: </h2> I hope that we can support each other along the way, and all of us will successfully graduate.
       </div>
       <div class='achievement'>
        <h2>Achievements: </h2>
        <ul>
            <li>  $achievement[0] </li>
            <li>  $achievement[1] </li>
            <li>  $achievement[2] </li>
        </ul>
        <img src='media/IMG1.jpeg' alt='3rd Place Capstone' title='3rd Place Capstone'>
        <img src='media/IMG2.jpeg' alt='2nd Tarpapel' title='2nd Tarpapel'>
        <img src='media/IMG3.jpg' alt='2nd place Skills' title='2nd place Skills'>
       </div>
       <div class='rest'>
        <div>
            <h2>Hobbies: </h2>
            <ul>
                <li>Cooking: $emoji[0] </li>
                <li>Reading: $emoji[1]</li>
                <li>Gaming: $emoji[2] </li>
            </ul>
        </div>
        <div>
            <h2>Motto:</h2>
            <q> $motto </q>
        </div>
        <div class='limit' title='250 words exact'>
            <h2>Things to do before making a website using PHP</h2>
            $essay
        </div>
       </div>
    </div>
    "
?>
</body>
</html>


