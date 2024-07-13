<div id="footer-sec">
    Youth Alive Kenya
</div>
<script>
    function printContent(el) {
          var restorepage = document.body.innerHTML;
          var printcontent = document.getElementById(el).innerHTML;
          document.body.innerHTML = printcontent;
          window.print();
          document.body.innerHTML = restorepage;
      }
</script>