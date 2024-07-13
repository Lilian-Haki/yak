<script type="text/javascript">
  function cli() {
	setInterval(() => {
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("cli").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "home/qcli.php", true);
  xhttp.send();
	}, 1000);
}
cli();
</script>
<script type="text/javascript">
  function par() {
	setInterval(() => {
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("par").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "home/qpar.php", true);
  xhttp.send();
	}, 1000);
}
par();
</script>
<script type="text/javascript">
  function men() {
	setInterval(() => {
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("men").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "home/qmen.php", true);
  xhttp.send();
	}, 1000);
}
men();
</script>
<script type="text/javascript">
  function ser() {
	setInterval(() => {
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("ser").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "home/qser.php", true);
  xhttp.send();
	}, 1000);
}
ser();
</script>
<script type="text/javascript">
  function tra() {
	setInterval(() => {
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("tra").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "home/qtra.php", true);
  xhttp.send();
	}, 1000);
}
tra();
</script>
<script type="text/javascript">
  function fin() {
	setInterval(() => {
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("fin").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "home/qCount.php", true);
  xhttp.send();
	}, 1000);
}
fin();
</script>
<script type="text/javascript">
  function eve() {
	setInterval(() => {
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("eve").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "home/qeve.php", true);
  xhttp.send();
	}, 1000);
}
eve();
</script>