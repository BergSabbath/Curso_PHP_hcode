<!-- 
//RECAPTCHA -->

<html>
    <head>
        <title>reCAPTCHA demo: Simple page</title>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
    <form action="cadastrar.php" method="POST">
        <div class="g-recaptcha" data-sitekey="6LeG1JMUAAAAAKFTLg9XZI9CR-yxVBJ2otEi9WzH"></div><br>
        <!-- <input type="submit" value="Submit"><br><br> -->
        <input type="email" name="inputEmail">
        <button type="submit">Enviar</button>
    </form>
    </body>
</html>