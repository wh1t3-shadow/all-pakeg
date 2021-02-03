<?php
$logo="


  _______                           
 |__   __|                          
    | | ___    __ _   _ __ ___      
    | |/ _ \  / _` | | '_ ` _ \     
    | |  __/ | (_| | | | | | | |    
  _ |_|\___|  \__,_| |_| |_| |_|    
 | \ | |                            
 |  \| |   ___  __  __  _   _   ___ 
 | . ` |  / _ \ \ \/ / | | | | / __|
 | |\  | |  __/  >  <  | |_| | \__ \
 |_| \_|  \___| /_/\_\  \__,_| |___/
                                    
                                    
";
echo "\033[1;35m $logo";

echo"           Devolop  by  wh1t3  shadow        ";
echo"

";

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
