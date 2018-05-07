<!DOCTYPE html>
<html>
  <head>
    <title>Piticli - convert vowels to i</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script>
      document.addEventListener('DOMContentLoaded', function(e) {
        document.querySelector('#sentence').addEventListener('keyup', piticli)
        piticli()
      })
      function piticli () {
        document.querySelector('#result').innerHTML = document.querySelector('#sentence').value.replace(/a|e|i|o|u/g, 'i')
      }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <header>
            <h1>PITICLI</h1>
          </header>
          <textarea id="sentence"><?= urldecode($_GET['s']) ?></textarea>
          <div id="result"></div>
        </div>
      </div>
    </div>
  </body>
</html>
