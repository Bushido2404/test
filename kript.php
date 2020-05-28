/*
* input  = my time start and begin
* result = mn yitg iembe sdt anrat
* awal dan akhir
* expetced code
*/
$input = 'Name you as mine';
//'Nuao mye '
        //1, Name
        //2,  you
$length = strlen($input);
$length2 = strlen($input)-1;
$content = [];
$output = '';
$i2=0;
var_dump($length);
for($i=0;$i<strlen($input);$i++){
  if ($length%2 == 0) {
      array_push($content,$input[$i2]);
      $i2++;
    }elseif ($length%2 == 1) {
      array_push($content,$input[$length2]);
      $length2--;
    }
  var_dump($length2);
var_dump($length);
  $length--;
}
$rawOutput = implode('',$content);
$boxs = explode(' ', $input);

var_dump($rawOutput);

var_dump($content);
var_dump($length);
var_dump($boxs);


foreach($boxs as $i => $box){
  //Nean
  $str = substr($rawOutput,0,strlen($boxs[$i]));
  $rawOutput = str_replace($str,'',$rawOutput);
  
  //$boxs[$i] = substr($rawOutput, strlen($boxs[$i]))
  $boxs[$i] = $str;
  var_dump($str);
}
var_dump($boxs);
var_dump(implode(".",$boxs));