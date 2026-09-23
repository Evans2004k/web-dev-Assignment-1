<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-----------header-->
    <header>
        <div id="logo">
            <img src="images/Evans.jpg" alt="Evans image">
        </div>
        <div>
            <h1>Welcome my Resume</h1>
        </div>
        <!-----Navagation buttons-->
        <div id="nav-buttons">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="Help.html">Help</a>
        </div>
    </header>
    <main>
       <section class="help-section">
        <div id="container">
             <h1>Help</h1>
        <p>For any help or inquiries, please contact us at <a href="mailto:example@email.com">example@email.com</a></p>

        <div id="form">
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <br>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <br>
                <label for="message">Comment:</label>
                <br>
                <textarea id="message" name="message" required></textarea>

                <br>
                <button type="submit">Submit</button>
            </form>
        </div>

        </div>
       
       </section>

    </main>
    
</body>
</html>