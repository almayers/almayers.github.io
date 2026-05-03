<footer>
  <p style="color:red;">&copy; <?php echo date("Y"); ?> Amy Mayers</p>
  <p>Email: <a href="mailto:amy@example.com">amy@example.com</a> | 
     Phone: <a href="tel:1234567890">(123) 456-7890</a></p>

  <div>
    <img src="images/icon1.png" alt="Icon 1" width="40">
    <img src="images/icon2.png" alt="Icon 2" width="40">
  </div>
</footer>

<script>
document.querySelector('.hamburger').onclick = () => {
  document.querySelector('nav ul').classList.toggle('active');
};
</script>

</body>
</html>
