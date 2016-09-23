<div class="menunotmobile">
    <ul class="hr menu">
        <li><a href="/"><img style="float: left; width: 297px; margin: 10px;" src="imgs/header_logo@2x.png"></a></li>
        <li><a class="contact-button" href="contact.php">Contact</a></li>
        <li style="float:right;margin-top:30px;"><a style="color: black;" href="company.php">Company</a></li>
        <li style="float:right;margin-top:30px;"><a style="color: black;" href="#">Products</a></li>
        <li style="float:right;margin-top:30px;"><a style="color: black;" href="services.php">Services</a></li>
    </ul>
</div>
<div class="menu"><a href="/"><img style="float: left; width: 200px; margin: 10px;" src="imgs/header_logo@2x.png"></a></div>
<div class="mobilemenuhamb"></div>
<div class="mobilemenuopen">
    <img class="closemobilemenubutton"
         style="width: 62px;height: auto;margin: 0 auto;display: block;padding-top: 10%;padding-bottom: 30px;"
         src="imgs/close@2x.png">
    <a class="popup-link-1" href="/services.php">
        <div class="menumobiletext">Services</div>
    </a>
    <a class="popup-link-1" href="company.php">
        <div class="menumobiletext">Company</div>
    </a>
    <a class="popup-link-1" href="contact.php">
        <div class="menumobiletext">Contact</div>
    </a>
</div>
<script type="text/javascript">
    $('.closemobilemenubutton').click(function () {
        $('.mobilemenuopen').hide();
        $('body').css('overflow', 'auto');
    });
    $('.mobilemenuhamb').click(function () {
        $('.mobilemenuopen').show();
        $('body').css('overflow', 'hidden');
    });
</script>