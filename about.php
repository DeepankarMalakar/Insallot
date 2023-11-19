<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="about.css">
    <style>
        /* h1 {
    font-family: 'Merienda', cursive;
} */

body {
    background-image: url(realistic-white-golden-geometric-background_79603-2032.avif);
    background-size: cover;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.heading h1 {
    font-family: 'Merienda', cursive;
    font-size: 50px;
    text-align: center;
    margin-top: 35px;
    position: relative;
}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 90%;
    margin: 65px auto;
}


.heading h1::after {
    content: '';
    background: #000;
    width: 100px;
    height: 5px;
    position: absolute;
    bottom: -7px;
    left: 50%;
    transform: translateX(-50%);
}

.about-section {
    flex: 1;
    width: 600px;
    margin: 0 25px;
    animation: fadeInUp 2s ease;
}

.about-image {
    flex: 1;
    width: 600px;
    margin: auto;
    animation: fadeRight 2s ease;
}

img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.about-section p {
    font-size: 24px;
    line-height: 1.5;
    margin-bottom: 40px;
}

.about-btn {
    display: inline-block;
    background-color: blue;
    color: #fff;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    font-size: 20px;
    border-radius: 5px;
    transition: 0.5s ease;
}

.about-btn:hover {
    background-color: #000;
    transform: scale(1.1);
}

@media  screen and (max-width: 768px) {
    .heading h1 {
        font-size: 45px;
        margin-top: 30px;
    }
    .about {
        margin: 0px;
    }
    .container {
        width: 100%;
        flex-direction: column;
        margin: 0px;
        padding: 0px 40px;
    }
    .about-section {
        width: 100%;
        margin: 35px 0;
    }
    .about-btn {
        font-size: 16px;
        padding: 8px 16px;
    }
    .about-image {
        width: 100%;
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}

@keyframes fadeRight {
    0% {
        opacity: 0;
        transform: translateY(-50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
    </style>
</head>
<body>
    <section class="about">
        <div class="heading">
            <h1>About Us</h1>
        </div>
        <div class="container">
            <div class="about-section">
                <p>"Welcome to Insallot, where convenience meets organization. We understand the challenges that come with managing classrooms and booking resources effectively. Our platform is designed to simplify this process, offering a seamless solution for educators, administrators, and students alike..</p>
                <button class="about-btn">Learn More</button>
            </div>
            <div class="about-image">
                <img src="unfocused-restaurant-with-tidy-tables_1203-595.avif" alt="classroom-image">
            </div>
        </div>
    </section>
</body>

</html>