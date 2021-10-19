<html>
<head>



<title>Contoh Kalendar Input Data Phpdanmysql.com</title>
</head>
<link rel="stylesheet" href="normal.css">
<body>
<center>
<div id="konten">

<h3>Contoh Kalender Input Date</h3>
<form name="postform" action="aksi.php" target="_blank" method="post"><table align="center" id="tabeledit" width="350">
<tr>
<td>Dari Tanggal :</td> <td><input type="text" id="from" name="from" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
</tr>
<tr>
<td>Sampai Tanggal :</td> <td>
<input type="text" id="to" name="to" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.to);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.to);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
</tr>
</table>
</form>

</div></div><center>
  <div id="footer">Copyright @ PhpdanMySQL.Com </div>
</center>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
<script src="plugin.js"></script>
<script src="normal.js"></script>