<?php
define('__LIBS__', dirname(dirname(__FILE__)).'/src/lib');
require_once(__LIBS__.'/db_utils.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

ini_set('display_errors',1);
error_reporting(E_ALL);
$title = 'Несвободные файлы в статьях о ныне живущих';
$slider = '';
require_once(__LIBS__.'/skeleton_1.php');
$db = getSqlConnection();
$th = 0;
$query = 'select DISTINCT il.il_to from ruwiki_p.categorylinks c1 JOIN ruwiki_p.imagelinks il ON c1.cl_from = il.il_from JOIN ruwiki_p.page p ON p.page_title = il.il_to JOIN ruwiki_p.categorylinks c2 ON p.page_id = c2.cl_from where c1.cl_to = "Википедия:Персоналии_без_указания_даты_смерти,_в_том_числе_—_ныне_живущие" or c1.cl_to = "Ныне_живущие" AND c2.cl_to = "Файлы:Несвободные"'; 
$stime = time();
$res = $db->query($query);
$etime = time();
$timed = $etime - $stime;
echo "<p>Total: $res->num_rows rows. (done in $timed sec.)</p>";
  echo '<table><tr><th>Disputed-fairuse file</th></tr><tr>'; 
  while ($row=$res->fetch_assoc()) { 
	 foreach ($row as $key => $value)
	 {
		$search  = array('<', '>', '"', '\'');
		$replace = array('&lt;', '&gt;', '&quot;', '%27');
		if (preg_match("/il_to/", $key))
		{
			echo "<td># [[:<a href=\"http://ru.wikipedia.org/wiki/File:".str_replace($search, $replace, $value)."\">File:".str_replace('_', ' ', $value)."</a>]]</td>"; 
		}
	}
	echo "</tr>\n"; 
}
echo "</table>"; 
$db->close();
require_once(__LIBS__.'/skeleton_2.php');
?>