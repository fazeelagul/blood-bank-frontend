<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Saver</title>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family:  Arial, sans-serif;
    box-sizing: border-box;
    border: border-box;
}
body {
    background-color:#fff;
    background-image: url('public/images/wecome.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position: center;
    background-attachment: fixed;
    top: 0;
}
.get-started-btn {
  background-color: #800000;;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  margin-top: 40%;
  margin-left: 48%;
}
.get-started-btn:hover {
  background-color:  #800000;;
}
</style>
  </head>
    <body>
    <button class="get-started-btn">Get Started</button>
  </body>
  <script>
  document.querySelector('.get-started-btn').addEventListener('click', function() {
  window.location.href = '/';
});
</script>
</html>