<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uni table</title>
    <link rel="stylesheet" href="css/datauni.css">
    
</head>
<body>

<img src="image/logo.png" class="logo"title="logo USG" alt="Logo">
<div class="filter"></div>


    <?php
     $con = mysqli_connect("localhost","root","","usg");
     if(!$con)
       die('<p> general error occurence</p>');
       $query = "select uid,uname,usymbol,uaddress,uphone,uemail from uni";
       $result = mysqli_query($con,$query);
       if(!$result){
           die("something went wrong");
       }
    ?>
<table>
    <tr>
        <th>UNI ID</th>
        <th>Uni name</th>
        <th>Symbol</th>
        <th>Uni Address</th>
        <th>Uni Phone</th>
        <th>Uni email</th>
        <th>pdf</th>
    </tr>

<?php
/*for each record in the returned data, crrate its html code
in the table
*/
for ($i=0;$i<mysqli_num_rows($result);$i++){
//<mysqli_num_rows($result): bta3tini kam kteb 3ndi
//get one record from the set $result:
$row = mysqli_fetch_assoc($result); //y3ni kl satr la7alo
echo "<tr>";
echo "<td>".$row['uid']."</td>";
echo "<td class='uname'>".$row['uname']."</td>";
echo "<td class='symbol'>".$row['usymbol']."</td>";
echo "<td>".$row['uaddress']."</td>";
echo "<td>".$row['uphone']."</td>";
echo "<td>
       <a class='unisite' href='https://".$row['uemail']." 'target=_blank'>
       ".$row['uemail']."
       </a> </td>";
  
       //suitch for pdf 
switch($row['usymbol']) {
  case "ul":
     echo "<td>
       <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:ab588280-2156-42dc-9bbe-8f977ca7a20a'>
       <img class='imgpdf' src='imguni/ul.png'>
       </a>
         </td>";
     echo "</tr>";
  break;
  case "aub":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:fa1f7dfb-2af3-4fc8-9774-92b732c6d65a'>
       <img class='imgpdf' src='imguni/aub.jpg'> </a></td>";
    echo "</tr>";
  break;
 
  case "usj":
     echo "<td>
       <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:a29fd623-47cc-43d9-a20c-580b5250daa2'>
       <img class='imgpdf' src='imguni/usj.jpg'> </a></td>";
     echo "</tr>";
   break;
   case "bau":
     echo "<td>
       <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:f5e7b033-fead-49a7-8c74-0b605bca3108'>
        <img class='imgpdf' src='imguni/bau.png'> </a> </td>";
     echo "</tr>";
  break;
  case "mu":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:f032a631-06b6-42d0-a443-5fdf2b7727dc'>
      <img class='imgpdf' src='imguni/mu.png'> </a></td>";
    echo "</tr>";
  break;
  case "liu":
    echo "<td>
      <a class='pdf' href=' https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:e14476ac-5c8b-412f-9d47-71215877fdf0'>
       <img class='imgpdf' src='imguni/liu.png'> </a> </td>";
    echo "</tr>";
 break;
 case "hu":
    echo "<td>
      <a class='pdf' href=' https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:05cd3ec1-f3f2-42b7-a761-3c9c8482399c'>
      <img class='imgpdf' src='imguni/hu.jpg'> </a></td>";
    echo "</tr>";
  break;
  case "ndu":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:55a2ba00-c2d3-490a-8cf1-da51ed4b3615'>
       <img class='imgpdf' src='imguni/ndu.jpg'> </a> </td>";
    echo "</tr>";
 break;
 case "bu":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:664bbe13-926c-420a-a846-8e6ba3a0a895'>
      <img class='imgpdf' src='imguni/bu.png'> </a></td>";
    echo "</tr>";
  break;
  case "iul":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:a703cde2-74af-484d-b8ad-70c83cc6511a'>
       <img class='imgpdf' src='imguni/iul.png'> </a> </td>";
    echo "</tr>";
 break;
 case "lcu":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:fb83eff9-f147-4240-a6a4-df430da33506'>
      <img class='imgpdf' src='imguni/lcu.png'> </a> </td>";
    echo "</tr>";
  break;
  case "mut":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:071a9fb3-6a26-4dee-bd35-ff918807045c'>
       <img class='imgpdf' src='imguni/mut.jpg'> </a> </td>";
    echo "</tr>";
 break;
 case "ju":
    echo "<td>
      <a class='pdf' href=' https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:509d283d-ebf6-4fa3-b8a2-c76b961209c2'>
      <img class='imgpdf' src='imguni/ju.jpg'> </a></td>";
    echo "</tr>";
  break;
  case "usek":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:be326502-766d-437d-97b3-b405c8f8e417'>
       <img class='imgpdf' src='imguni/usek.jpg'> </a> </td>";
    echo "</tr>";
 break;
 case "gu":
    echo "<td>
      <a class='pdf' href=' https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:86c38cb0-bda8-4109-856f-15585291bfc3'>
      <img class='imgpdf' src='imguni/gu.png'> </a></td>";
    echo "</tr>";
  break;
  case "aou":
    echo "<td>
      <a class='pdf' href=' https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:371d6386-193b-4f5b-8c86-f7b8293197db'>
       <img class='imgpdf' src='imguni/aou.jpg'> </a> </td>";
    echo "</tr>";
 break;
 case "meu":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:34dbc63b-3545-44d7-9f6a-e93ffab110d0'>
      <img class='imgpdf' src='imguni/meu.jpg'> </a></td>";
    echo "</tr>";
  break;
  case "ua":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:011080cf-7aaa-40d8-8c00-c654b62a105a'>
       <img class='imgpdf' src='imguni/ua.jpg'> </a> </td>";
    echo "</tr>";
 break;
 case "aul":
    echo "<td>
      <a class='pdf' href=' https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:c5962bfb-1f4c-42b0-a369-0cb0ae65b6f5'>
      <img class='imgpdf' src='imguni/aul.jpg'> </a></td>";
    echo "</tr>";
  break;
  case "aust":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:fd5ac791-963e-49f3-8155-a85b8a562089'>
       <img class='imgpdf' src='imguni/aust.png'></a> </td>";
    echo "</tr>";
 break;
 case "mubs":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:bbbe9e8c-c987-4a85-8aad-c9940ae4e077'>
      <img class='imgpdf' src='imguni/mubs.png'> </a></td>";
    echo "</tr>";
  break;
  case "rhu":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:0cac4201-1ac5-49ec-b29d-865bb14291fc'>
       <img class='imgpdf' src='imguni/rhu.jpg'> </a> </td>";
    echo "</tr>";
 break;
 case "auce":
    echo "<td>
      <a class='pdf' href=' https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:80ccb977-0fdc-470f-80da-925823f7d5e4'>
      <img class='imgpdf' src='imguni/auce.jpg'> </a></td>";
    echo "</tr>";
  break;
  case "aut":
    echo "<td>
      <a class='pdf' href=' https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:981f8ce0-a179-4a8c-a3bd-b0118271b8d3'>
      <img class='imgpdf' src='imguni/aut.png'> </a> </td>";
    echo "</tr>";
  break;
  case "lgu":
    echo "<td>
      <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:a2e7d60f-a4a8-4988-9343-e1b1bdc1b53d'>
       <img class='imgpdf' src='imguni/lgu.png'> </a> </td>";
    echo "</tr>";
 break;
 case "ulf":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:17ecddba-8bfd-4554-a270-0c3a70823733'>
     <img class='imgpdf' src='imguni/ulf.png'> </a> </td>";
  echo "</tr>";
break;
case "usf":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:7f8c026f-1482-48a6-a7a6-98056072489a'>
     <img class='imgpdf' src='imguni/usf.jpg'> </a> </td>";
  echo "</tr>";
break;
case "ut":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:57aa0b08-630c-4c18-a3b0-4c8150fd9db3'>
     <img class='imgpdf' src='imguni/ut.jpg'> </a> </td>";
  echo "</tr>";
break;
case "aku":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:90c426cc-f806-4a4a-94e2-f26135a18537'>
     <img class='imgpdf' src='imguni/aku.png'> </a> </td>";
  echo "</tr>";
break;
case "usal":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:e21361bb-c00e-41c4-88cf-165a6ffb92b0'>
     <img class='imgpdf' src='imguni/usal.png'> </a> </td>";
  echo "</tr>";
break;
case "azmu":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:fe90f34b-bc17-498c-a6a6-d971db68385c'>
     <img class='imgpdf' src='imguni/azmu.jpg'> </a> </td>";
  echo "</tr>";
break;
case "pu":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:2f34d952-9760-47c6-8afd-fb5747bd101d'>
     <img class='imgpdf' src='imguni/pu.png'> </a> </td>";
  echo "</tr>";
break;
case "mub":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:448c9a5a-88fa-47e8-b646-42b603d0b42d'>
     <img class='imgpdf' src='imguni/mub.jpg'> </a> </td>";
  echo "</tr>";
break;
case "ous":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:0be45f97-23aa-4849-8eab-34947123a050'>
     <img class='imgpdf' src='imguni/ous.png'> </a> </td>";
  echo "</tr>";
break;
case "uls":
  echo "<td>
    <a class='pdf' href='https://documentcloud.adobe.com/link/review?uri=urn:aaid:scds:US:4703e023-68d1-427a-abc7-c063f24fd131'>
     <img class='imgpdf' src='imguni/uls.jpg'> </a> </td>";
  echo "</tr>";
break;
 
}   

}
echo"</table>";
?>


</body>
</html>
