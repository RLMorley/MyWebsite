

    <!-- This script deals with the updating of the page content when using the navbar links. It takes some text and 
         appends it to a base address. This address should then be a valid call to a method in the main controller.
         I use ajax here so as not to reload the entire page when only a small area needs changing. -->
	<script>
	function changePage(str) {
		if (str.length==0) { 
			document.getElementById("content").innerHTML="";
			return;
		}
		if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
  		document.getElementById("content").innerHTML=xmlhttp.responseText;
  	}
  }
  xmlhttp.open("GET","/project_2/home/" + str ,true);
  xmlhttp.send();
}
</script>

<div class = "bottom_banner">
  <p id = "signature">Created by Reef Longdon-Morley</p>
</div>


</body>
</html>