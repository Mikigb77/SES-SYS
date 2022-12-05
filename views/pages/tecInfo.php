<div class="MySection container">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;">Systemas SES</h1>
            <hr>
            <h2 style="text-align:center;">Detalles</h2>
        </div>
        <div class="col-md-3">
            <img src="/media/images/Hand drawings/all.jpg" alt="" style="width:100%; border-radius:10%;">
        </div>
        <div class="col-md-9">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aspernatur at quod dignissimos, pariatur numquam aliquam beatae molestias ratione aliquid impedit inventore quidem voluptatem nam dolorum dicta atque! Harum, rerum!</p>
            <p>Officia corporis, amet neque magnam inventore, hic sed, exercitationem accusamus laboriosam perspiciatis consectetur quae ut animi laborum itaque. Consectetur eius magni vitae nisi, necessitatibus a pariatur sint veritatis ducimus deserunt.</p>
            <p>Consequatur vel id sequi amet minima, necessitatibus consequuntur quasi eaque assumenda vitae doloremque doloribus, porro iste maxime impedit debitis dolorem dicta. Repellat porro voluptate labore molestiae eveniet soluta reiciendis sunt.</p>
            <p>Ullam ipsa sunt expedita animi eius laboriosam quas autem, mollitia pariatur quae sequi corrupti esse ratione et impedit unde. Esse cupiditate quis dolore officiis illo ab, incidunt ullam temporibus adipisci?</p>
        </div>
    </div>
</div>
<br><br><br><br>
<div class="MySection container">
    <div class="row">
        <div class="col-md-4">
            <div class="hover">
                <a href="/informacion-tecnica/mixto">
                    <img class="MyImage" src="/media/images/Hand drawings/forjado mixto seccion.jpg" alt="<b>Mixto</b>" style="width:100%; border-radius:10%;">
                    <div class="middle">
                        <div class="text">
                            Mixto
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="hover">
                <a href="/informacion-tecnica/seco">
                    <img class="MyImage" src="/media/images/Hand drawings/Forjado seco seccion.jpg" alt="<b>Seco</b>" style="width:100%; border-radius:10%;">
                    <div class="middle">
                        <div class="text">
                            Seco
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <form action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="message" type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $to = urldecode($_GET['email']);
    $tema = 'TEST';
    $message = urldecode($_GET['message']);
    mail($to, $tema, $message);
}
?>