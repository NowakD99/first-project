<div class="burger">
       <i class="a line"></i>
       <i class="b line"></i>
       <i class="c line"></i>
</div>
<nav>
    <ul>
        <li><a href="o-nas.php">O nas</a></li>
        <li><a href="spolecznosc.php">Społeczność</a></li>
        <li><a href="wzrastaj.php">Wzrastaj</a></li>
        <li><a href="przeslanie.php">Przesłanie</a></li>
        <li><a href="wesprzyj.php">Wesprzyj</a></li>
        <li><a href="kalendarz.php">Kalendarz</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
    </ul>
</nav>
<script>
    const burger = document.querySelector(".burger");
            const lines = [...burger.children];
            burger.addEventListener("click", function(){
                this.classList.toggle("active");
                lines.forEach(line => line.classList.toggle("act"))
            })
</script>