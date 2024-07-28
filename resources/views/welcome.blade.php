<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  <meta name="description" content="Modern publishing platform. Grow your audience and build your online brand">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;600&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <title>Blog page</title>
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-size: 16px;
}

body,html{
    overflow-x: hidden;
    background: hsl(0, 26%, 96%);
}

/** Header starts here **/

.header{
    width: 100%;
    height: 100vh;
    position: relative;
    background: url(images/bg-pattern-intro.svg);
    background-position: center;
    background-size: 150%;
    padding: 4rem 10rem;
    border-bottom-left-radius: 6rem;
    background-repeat: no-repeat;
    background-color: darkviolet;
}

.header .navigation{
    display: flex;
    align-items: center;
}

.header .navigation .site-nav{
    flex: 1;
    margin-left: 3.5rem;
    display: flex;
    align-items: center;
}

.header .navigation .site-nav li{
    margin-right: 1.5rem;
    list-style: none;
    position: relative;
}

.header .navigation .site-nav li a{
    text-decoration: none;
    color: hsl(0, 0%, 100%);
    cursor: pointer;
    transition: 1s;
    font-family: 'Ubuntu', sans-serif;
}

.header .navigation .site-nav li a:hover{
    text-decoration: underline;
}

.header .navigation .site-nav li img{
    margin-left: .5rem;
    transition: .5s;
}

.header .navigation .site-nav li:hover img{
    transform: rotate(-180deg);
}

.header .navigation .site-nav li .dropdown-menu{
    display: none;
    transition: .5s;
    z-index: 10;
}

.header .navigation .site-nav li:hover .dropdown-menu{
    display: block;
}

.header .navigation .site-nav li .dropdown-menu ul{
    position: absolute;
    margin-top: .2rem;
    margin-left: -2rem;
    background: hsl(0, 0%, 100%);
    padding: 1.5rem;
    text-align: left;
    border-radius: 5px;
    box-shadow: 0 0 15px 3px rgba(0, 0, 0, 0.4);
}

.header .navigation .site-nav li .dropdown-menu ul li{
    display: block;
    margin-bottom: 1rem;
}

.header .navigation .site-nav li .dropdown-menu ul li:last-child{
    margin-bottom: 0;
}

.header .navigation .site-nav li .dropdown-menu ul li a{
    color: hsl(240, 0%, 56%);
    transition: .5s;
    cursor: pointer;
    text-decoration: none;
}

.header .navigation .site-nav li .dropdown-menu ul li a:hover{
    color: hsl(0, 0%, 5%);
}

.header .navigation .register{
    display: flex;
    align-items: center;
}

.header .navigation .register li{
    margin-left: 2rem;
    list-style: none;
}

.header .navigation .register li a{
    text-decoration: none;
    color: hsl(0, 0%, 100%);
    cursor: pointer;
    font-weight: 700;
    font-size: 0.9rem;
    font-family: 'Ubuntu', sans-serif;
}

.header .navigation .register li .signup{
    padding: .8rem 2.5rem;
    background: hsl(0, 0%, 100%);
    color: hsl(356, 100%, 66%);
    border: none;
    border-radius: 2rem;
    transition: .5s;
}

.header .navigation .register li .signup:hover{
    background: hsl(355, 100%, 74%);
    color: hsl(0, 0%, 100%);
}

.header .navigation #mobilemenu{
    display: none;
}

.header .header-content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    width: 100%;
}

.header .header-content h1{
    font-size: 3.5rem;
    color: hsl(0, 0%, 100%);
    margin-bottom: 1rem;
    font-family: 'Overpass', sans-serif;
}

.header .header-content p{
    font-size: 1.2rem;
    color: hsl(0, 0%, 100%);
    margin-bottom: 3rem;
    font-family: 'Ubuntu', sans-serif;
    font-weight: 400;
}

.header .header-content .header-content-links{
    display: flex;
    align-items: center;
    justify-content: center;
}

.header .header-content .header-content-links li{
    list-style: none;
    margin: 0 .5rem;
}

.header .header-content .header-content-links li a{
    text-decoration: none;
    padding: .7rem 1.5rem;
    cursor: pointer;
    font-size: .9rem;
    font-weight: 700;
    font-family: 'Ubuntu', sans-serif;
}

.header .header-content .header-content-links li .start{
    background: hsl(0, 0%, 100%);
    color: violet;
    border-radius: 2rem;
    transition: .5s;
}

.header .header-content .header-content-links li .start:hover{
    background: hsl(355, 100%, 74%);
    color: hsl(0, 0%, 100%);
}

.header .header-content .header-content-links li .learn{
    background: transparent;
    color: hsl(0, 0%, 100%);
    border-radius: 2rem;
    transition: .5s;
    border: 1px solid hsl(0, 0%, 100%);
}

.header .header-content .header-content-links li .learn:hover{
    background: hsl(0, 0%, 100%);
    color: hsl(355, 100%, 74%);
}

.mobilenav{
    display: none;
}


  </style>
</head>
<body>

  <!-- Header starts here -->
  <section class="header">
    
    

    <div class="header-content">
      <h1>A Blog System</h1>
      <p>Click the follwing button for login first to start creating the blogs</p>
      <ul class="header-content-links">
        <li><a href="login" class="start">Login</a></li>
        <li><a href="register" class="learn">Signup</a></li>
      </ul>
    </div>
  </section>


</body>
</html>