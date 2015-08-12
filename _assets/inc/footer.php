
		<footer>

		</footer>

   <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

	</body>
</html>