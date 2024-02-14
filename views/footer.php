<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Localização</h4>
                <p class="lead mb-0">
                    Rua Groelândia, E5 - Novo Mundo
                    <br />
                    Várzea Grande, MT 78148-150
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Redes Sociais</h4>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://www.facebook.com/weslley.ferraz" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://twitter.com/weslleyhvferraz" target="_blank"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://www.linkedin.com/in/weslley-henrique-vieira-ferraz-8b95b3127" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://github.com/weslley281" target="_blank"><i class="fab fa-fw fa-github"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://api.whatsapp.com/send/?phone=5565999157130&text=Olá%20Gostária%20de%20solicitar%20um%20orçamento&source=https://engenheirosoftwareweslley.com.br&preset=oi&lang=pt-br" target="_blank"><i class="fab fa-fw fa-whatsapp"></i></a>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://www.estudonauta.com/aluno/weslley-henrique-vieira-ferraz" target="_blank"><img class="img-fluid" src="../files/estudonalta.png" alt="logo estudonalta"></a>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://www.dio.me/users/weslleyhenrique800" target="_blank"><img class="img-fluid" src="../files/dio.png" alt="logo da Digital Inovation One" title="Dio"></a>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://www.coursera.org/user/a69fe8a3c05b5e85a3fa4cbba6c3b992" target="_blank"><img class="img-fluid" src="../files/coursera.png" alt="logo da Coursera" title="Coursera"></a>
                <a class="btn btn-outline-light btn-social mx-1 mb-3" href="https://app.rocketseat.com.br/me/weslley-henrique-vieira-ferraz" target="_blank"><img class="img-fluid" src="../files/rocketseat.png" alt="logo da Rocketseat" title="Rocketseat"></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Sobre Mim</h4>
                <p class="lead mb-0">
                    Sou um grande estudante da área de técnologia como um todo, converse comigo pelo
                    <a href="https://api.whatsapp.com/send/?phone=5565999157130">whatsapp clicando aqui</a>
                    .
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; Engenheiro de Software Weslley <?php date("Y")?></small></div>
</div>
<script src="../libs/alertifyjs/alertify.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="../libs/tinymce/tinymce.min.js"></script>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    language: 'pt_BR',
});
</script>
<!-- Scripts de Telefone -->
<script type="text/javascript">
  function mask(o, f) {
     setTimeout(function() {
        var v = mphone(o.value);
        if (v != o.value) {
           o.value = v;
       }
   }, 1);
 }

 function mphone(v) {
     var r = v.replace(/\D/g, "");
     r = r.replace(/^0/, "");
     if (r.length > 10) {
				r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
     } else if (r.length > 5) {
				r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
     } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        r = r.replace(/^(\d*)/, "($1");
    }
    return r;
}
</script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
