<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="https://kit.fontawesome.com/4c648c1491.js" crossorigin="anonymous"></script>
<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.background = "#fff";
        } else {
            document.getElementById("navbar").style.background = "none";
        }
    }
</script>
