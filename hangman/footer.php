
<script>hangman(<?php echo $_SESSION["hp"] ?>);</script>


<script src="jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
  $(function () {
    $('[data-toggle="tooltop"]').tooltip()
  })
</script>
<script>
  $(".alpha").click(function() {
    let id = $(this).attr("id");
    //alert(id);
    $.ajax({
      method: "POST",
      url: "functions.php",
      data: {
        guess: id
      }
    })
    .done(function(data){
      location.reload();
    });
  });
</script>
</body>
</html>