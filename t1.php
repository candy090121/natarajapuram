<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thirukkural Test </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<table width="1020" height="354" border="0" align="center" bgcolor="#ffffff">
  <tr>
                            <td width="504" height="350">
                                <table align="left">
                                    <tr>
                                        <td width="470" height="40">
                                            <table background="images/bg2.jpg" width="486" height="38" align="left">
                                                <tr>
                                                    <td width="57" height="32" align="center"><img src="images/tic.png" width="30" height="30" /></td>
                                                    <td width="431" height="32">
                                                        <div align="left" class="names style12">Kural of the day</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
<!-- Thirukkural Access                                    -->

                                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thirukkral";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, Verse, Translation FROM thirukkural";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
//    echo "id: " . $row["id"]. " - verse: " . $row["Verse"]. " " . $row["Translation"]. "<br>";
      echo "id: " . $row["id"]. " " . $row["Verse"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>






<!--                                    -->


                                    <tr>
                                        <td height="89">அகர முதல எழுத்தெல்லாம் ஆதி </br> பகவன் முதற்றே உலகு </td>
                                    </tr>
                                    <tr>
                                        <td><table background="images/bg2.jpg" width="486" height="10">
                                          <tr>
                                            <td width="56" height="10" align="center"><img src="images/kannadasan2.png" width="30" height="30" /></td>
                                            <td width="432" height="10"><div align="left" class="names style12">Kannadasan Songs</div></td>
                                          </tr>
                                        </table></td>
                                        </tr>
                                    <tr>
                                      <td height="162"><table align="center" width="300" height="100">
                                        <tr>
                                          <td align="center" width="150"><a href="kannadasan_devotional.html" target="_blank"><img src="images/i1.png" width="50" height="40" /></a></td>
                                          <td align="center" width="150"><a href="kannadasan_cinema.html" target="_blank"><img src="images/i2.png" width="40" height="40" /></a></td>
                                        <tr>
                                          <td align="center" width="150"><a href="kannadasan_devotional.html" target="_blank"><span class="style15">Devotional Songs</span></a></td>
                                          <td align="center" width="150"><a href="kannadasan_cinema.html" target="_blank"><span class="style15">Cinema Songs</span></a></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                </table>
      </td>
                            <td width="506">
                                <table width="503" border="0">
                                    <tr>
                                        <td width="497">
                                            <table background="images/bg2.jpg" width="500" height="10">
                                                <tr>
                                                    <td width="38" height="10" align="center"><img src="images/mapslogo.png" width="30" height="30" /></td>
                                                    <td width="450" height="10">
                                                        <div align="left" class="names style12">Map view</div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12737.13963835975!2d78.78731494691183!3d10.81494704526839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf2fc2bc4bc7d%3A0x41bb6ba9184964a9!2sNatarajapuram%2C+Tamil+Nadu+620013!5e1!3m2!1sen!2sin!4v1561783150432!5m2!1sen!2sin" width="480" height="300" frameborder="0" style="border:0"></iframe>
                                        </td>
                                    </tr>
                                </table>
                            </td>
  </table>
  
 <form name="jksearch" action="http://www.google.com/search"  target="_blank" method="get" onSubmit="jksitesearch(this)">

<input id="hiddenquery" type="hidden" name="q" />
<input name="qfront" type="text" style="width: 200px" placeholder="Search.." /> 
<br />


<script type="text/javascript">
function jksitesearch(curobj){
document.getElementById("hiddenquery").value=curobj.qfront.value
}
</script>

</p>

</form>

</body>
</html>
