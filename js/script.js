window.onload = function() {
    var buttons = document.getElementsByClassName("button");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("mousedown", function() {
            this.style.transform = "translateY(2px)";
        });
        buttons[i].addEventListener("mouseup", function() {
            this.style.transform = "translateY(0)";
        });
    }
};
</script>
</head>
<body>
<h1>Тест с красивым шрифтом и анимированными кнопками</h1>
<form method="post" action="test_page.php">
<input type="submit" name="start_test" value="Начать тест" class="button">
</form>
</body>
</html>
