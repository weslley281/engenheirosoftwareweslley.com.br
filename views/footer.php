<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Localização</h4>
                <p class="lead mb-0">
                    Rua Moisés, 30 - Paiaguas
                    <br />
                    Várzea Grande, MT 78148-804
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Redes Sociais</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/weslley.ferraz"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/weslleyhvferraz"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/weslley-henrique-vieira-ferraz-8b95b3127/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/weslley281"><i class="fab fa-fw fa-github"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">
                    Freelance is a free to use, MIT licensed Bootstrap theme created by
                    <a href="http://startbootstrap.com">Start Bootstrap</a>
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
