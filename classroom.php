<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classrooms</title>
    <link rel="stylesheet" href="classroom.css">
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body {
    background-image: url(realistic-white-golden-geometric-background_79603-2032.avif);
    background-size: cover;
}

.container {
    padding: 0 8%;
    width: 100%;
    height: 100vh;
}

.container h1 {
    text-align: center;
    padding-top: 10%;
    margin-bottom: 60px;
    font-weight: 700;
    position: relative;
}

.container h1::after {
    content: '';
    background: #000;
    width: 100px;
    height: 5px;
    position: absolute;
    bottom: -7px;
    left: 50%;
    transform: translateX(-50%);
}

.container h2 {
    font-weight: 700;
    margin-bottom: 8px;
}

.row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 30px;
}

.classrooms {
    text-align: center;
    padding: 25px 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    background: transparent;
    transition: transform 0.5s, background 0.3s;
}

.classrooms i {
    font-size: 30px;
    margin-bottom: 8px;
}

.classrooms a {
    text-decoration: none;
    color: blue;
}

.classrooms:hover {
    background: #000;
    color: blue;
    transform: scale(1.05);
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Classrooms</h1>
        <div class="row">
            <div class="classrooms">
                <i class="fa-solid fa-building-columns"></i>
                <a href=""><h2>Lab-1</h2></a>
            </div>

            <div class="classrooms">
                <i class="fa-solid fa-building-columns"></i>
                <a href=""><h2>Lab-1</h2></a>
            </div>

            <div class="classrooms">
                <i class="fa-solid fa-building-columns"></i>
                <a href=""><h2>Lab-1</h2></a>
            </div>

            <div class="classrooms">
                <i class="fa-solid fa-building-columns"></i>
                <a href=""><h2>Lab-1</h2></a>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/3f22af6024.js" crossorigin="anonymous"></script>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.log(entry);
                if (entry.isIntersecting) {
                    entry.target.classList.add('Show');
                }
                else {
                    entry.target.classList.remove('Show');
                }
            });
        });

        const hiddenElements = document.querySelectorAll(".text-box");
        hiddenElements.forEach((el) => observer.observe(el));
    </script>
</body>
</html>