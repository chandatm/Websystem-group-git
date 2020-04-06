<!-- javascript -->
<script src="../assets/js/jquery-1.9.1.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/slippry.min.js"></script>
<script src="../assets/js/imagesloaded.js"></script>

<script>
    $(document).ready(function () {
        $('#slippry-slider').slippry(
            defaults = {
                transition: 'horizontal',
                useCSS: true,
                speed: 5000,
                pause: 3000,
                initSingle: false,
                auto: true,
                preload: 'visible',
                pager: false,
            }
        )
    });
</script>