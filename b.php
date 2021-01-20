<?php
$logo="

           _    __ _   ____           
          | |  /_ | | |___ \          
 __      _| |__ | | |_  __) |         
 \ \ /\ / / '_ \| | __||__ <          
  \ V  V /| | | | | |_ ___) |         
   \_/\_/ |_| |_|_|\__|____/          
     | |             | |              
  ___| |__   __ _  __| | _____      __
 / __| '_ \ / _` |/ _` |/ _ \ \ /\ / /
 \__ \ | | | (_| | (_| | (_) \ V  V / 
 |___/_| |_|\__,_|\__,_|\___/ \_/\_/  
                                      
                                      
";
echo "\033[1;35m $logo";

echo"           Devolop  by  wh1t3  shadow        ";
echo"

";
echo "\033[1;36m  This tools specialy devolop for mamun ahmed";
echo"

";

$a=readline("\033[1;35m enter 1 for download 10+ pakeg : ");

if($a==1){
all();
}
else{
echo"enter a valid option";
}
function all(){
system("clear");
system("pkg update -y");
system("pkg upgrade -y");
system("pkg install python -y");
system("pkg install python2 -y");
system("pkg install nano -y");
system("apt install unzip -y");
system("pkg install pip -y");

system("pip install requests -y");
system("pip install python3 -y");
system("clear");
echo"\033[1;35m   all pkg are download. tnx for useing this tools";
echo"


";
}



?>
