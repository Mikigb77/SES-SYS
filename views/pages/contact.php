<div class="container MySection">
    <div style="text-align: center;">
        <h1>Contacto</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12">
            <style>
                .hover {
                    background-color: black;
                    display: inline-block;
                    /* Add this line */
                }

                .hover img {
                    max-width: 100%;
                    height: auto;
                    opacity: 0.5;
                }

                .centered {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    text-align: center;
                    color: whitesmoke;
                    width: 100%;
                    max-width: 100%;
                    /* Add this line */
                    font-size: larger;
                }

                @media (max-width: 768px) {
                    .centered {
                        position: static;
                        transform: translate(0%, -50%);
                        -ms-transform: translate(0%, -50%);
                        font-size: small;
                    }

                    .hover {
                        max-width: 100%;
                        height: auto;

                    }
                }
            </style>
            <div class="hover" style="background-color: black;">
                <font size="+2">
                    <img src="/media/images/Office/oficina.webp" alt="" style="width: 100%; opacity:0.5;">

                    <div class="centered centerText" style="color:whitesmoke; text-align:center;">

                        <img src="/media/images/Logos/LogoJFG.jpg" alt="" style="width:40%; margin-bottom:5%; opacity:1;">

                        <p>C/ Sant Antoni Maria Claret, 24, 3ªplanta</p>
                        <p>08037 Barcelona</p>
                        <p>Teléfono 93.011.54.64</p>
                        <p>No dude en hacernos llegar sus proyectos a <a style="text-decoration: none; color:whitesmoke;" href="mailto: info@ses.systems"><b>info@ses.systems</b></a> o contáctenos a través del formulario</p>
                        <br><br>
                        <a href="#form">
                            <button type="button" class="btn btn-dark btn-lg">Contáctanos</button>
                        </a>
                        <br>
                    </div>
                </font>
            </div>

        </div>
    </div>
</div>
<br><br><br id="form"><br>
<div class="container MySection">
    <div class="row" style="text-align: center;">

        <div class="col-md-6">
            <h2>¿Dónde estamos?</h2>
        </div>
        <div class="col-md-6">
            <h2>¿Quieres saber más?</h2>
        </div>
        <hr>
        <br>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.6338605084557!2d2.1625012153634118!3d41.40375717926265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a3c47ff51db7%3A0x7988cef06be97e1d!2sJFG%20CONSULTORS%20-%20Consultor%20d&#39;estructures%20en%20edificaci%C3%B3%20JFG%2C%20S.L.P.!5e0!3m2!1ses!2ses!4v1674334919667!5m2!1ses!2ses" width="600" height="450" style="border:0; border-radius:10%; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6">

            <form action="https://mailthis.to/SES-JFG" method="POST" encType="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="_replyto" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Consulta</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Archivos (Opcional)</label>
                    <input class="form-control" type="file" name="file" id="formFile">
                </div>
                <div>
                    <p>Al enviar este formulario aceptas nuestra <a href="/politica-de-privacidad/">política de privacidad</a>.</p>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>
<!--- all Camps:
<form action="https://mailthis.to/you@mail.com"
    method="POST" encType="multipart/form-data">
    <input type="text" name="name" placeholder="Your name">
    <input type="email" name="_replyto" placeholder="Your email">
    <textarea name="message" placeholder="Enter your message here"></textarea>
    <input type="file" name="file" placeholder="Attachments (optional)">
    <input type="hidden" name="_subject" value="Contact form submitted">
    <input type="hidden" name="_after" value="https://myhomepage.net/">
    <input type="hidden" name="_honeypot" value="">
    <input type="hidden" name="_confirmation" value="">
    <input type="submit" value="Send">
</form>
----->