<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<div id="results">
</div>

<script>
  setInterval(function ()
  {
    $.ajax({
      type: "GET",
      url: 'http://localhost/Hackathon 2022/get_data.php', // CHANGE THAT
      success: function(res){
        $('#results').html(res);
      },
      dataType:'html',
    });
  }, 2000);
</script>