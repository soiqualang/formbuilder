<?php
#count Element 0 dieu kien
function countElement0($tbl_table,$element)
{
	$query_string = "SELECT $element FROM $tbl_table";
	$result = mysqli_getRow($query_string);
	return $result;
}
#count Element 
function countElement($tbl_table,$element, $where, $id)
{
	$query_string = "SELECT $element FROM $tbl_table WHERE $where='".$id."'";
	$result = mysqli_getRow($query_string);
	return $result;
}
#count Element 2 dieu kien
function countElement2($tbl_table,$element, $where1, $id1, $where2, $id2)
{
	$query_string = "SELECT $element FROM $tbl_table WHERE $where1='".$id1."' and $where2='".$id2."'";
	$result = mysqli_getRow($query_string);
	return $result;
}
function Delete($table, $where, $id)
{
	$query_string = "DELETE FROM $table WHERE $where ='".$id."'";
	$query = mysqli_query($connection,$query_string);
	if(!$query) die("Error: ".mysqli_error());
}
#Update table
function Update($table, $name, $value, $where, $id)
{
	$sql_string = "UPDATE $table SET $name = '".$value."' WHERE $where = '$id' ";
	$query = mysqli_query($connection,$sql_string);
	if(!$query) die("Error: ".mysqli_error());
}


//ham phan trang noi dung
$max_char =10000; // ki t? t?i da

function split_words($string, $max = 1)
{
$words = preg_split('/\s/', $string);
$lines = array();
$line = '';

foreach ($words as $k => $word) {
$length = strlen($line . ' ' . $word);
if ($length <= $max) {
$line .= ' ' . $word;
} else if ($length > $max) {
if (!empty($line)) $lines[] = trim($line);
$line = $word;
} else {
$lines[] = trim($line) . ' ' . $word;
$line = '';
}
}
$lines[] = ($line = trim($line)) ? $line : $word;
return $lines;
}

$loca=(isset($_GET['loca'])) ?(int)$_GET['loca'] :1;
$loca=($loca>=1)? $loca-=1 :1;

function split_string($string,$loca=0){
global $max_char;
$infor=split_words($string,$max_char);
$return['numloca']=count($infor);
$return['content']=$infor[$loca];
return $return;
}

function paging($numloca,$loca,$id,$title){
for($i=0;$i<$numloca;$i++){
if($i==$loca){
//echo "<a href='story".$row["id"]."/".seoname($row["title"])."/page1/' style='text-decoration:none; color:black;'><p class='dashed'>".$row["title"]."</p></a>";
//echo '<a href="?id='.$id.'&loca='.($i+1).'&title='.$title.'" id="loca">'.($i+1).'</a> ';
echo '<a href="../../../story'.$id.'/'.$title.'/page'.($i+1).'/" id="loca">'.($i+1).'</a> ';
}else{
//echo '<a href="?id='.$id.'&loca='.($i+1).'&title='.$title.'">'.($i+1).'</a> ';
echo '<a href="../../../story'.$id.'/'.$title.'/page'.($i+1).'/">'.($i+1).'</a> ';
}
}
}
//end ham phan trang noi dung
function seoname($str){
    if(!$str) return false;
    $unicode = array(
        'a'=>array('á','à','?','ã','?','a','?','?','?','?','?','â','?','?','?','?','?'),
        'A'=>array('Á','À','?','Ã','?','A','?','?','?','?','?','Â','?','?','?','?','?'),
        'd'=>array('d'),
        'D'=>array('Ð'),
        'e'=>array('é','è','?','?','?','ê','?','?','?','?','?'),
        'E'=>array('É','È','?','?','?','Ê','?','?','?','?','?'),
        'i'=>array('í','ì','?','i','?'),
        'I'=>array('Í','Ì','?','I','?'),
        'o'=>array('ó','ò','?','õ','?','ô','?','?','?','?','?','o','?','?','?','?','?'),
        'O'=>array('Ó','Ò','?','Õ','?','Ô','?','?','?','?','?','O','?','?','?','?','?'),
        'u'=>array('ú','ù','?','u','?','u','?','?','?','?','?'),
        'U'=>array('Ú','Ù','?','U','?','U','?','?','?','?','?'),
        'y'=>array('ý','?','?','?','?'),
        'Y'=>array('Ý','?','?','?','?'),
        '-'=>array(' ','&quot;','.','-–-')
    );
    foreach($unicode as $nonUnicode=>$uni){
        foreach($uni as $value)
        $str = @str_replace($value,$nonUnicode,$str);
        $str = preg_replace("/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/","-",$str);
        $str = preg_replace("/-+-/","-",$str);
        $str = preg_replace("/^\-+|\-+$/","",$str);
    }
    return strtolower($str);
}
?>