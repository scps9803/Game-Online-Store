<?php
//���o�ثe���|
$fileDir = getcwd();
//����R���ʧ@
if(isset($_GET["action"])&&$_GET["action"]=="delete"){
	unlink($_GET["file"]);	
	$fileDir =pathinfo($_GET["file"],PATHINFO_DIRNAME);
	//���s�୶��ثe�ؿ���
	header("Location: ?dir=".$fileDir);
}
//����W�ǰʧ@
if(isset($_GET["action"])&&$_GET["action"]=="upload"){
	if($_FILES["upload"]["error"]==0){
		move_uploaded_file($_FILES["upload"]["tmp_name"], $_POST["dir"]."\\".$_FILES["upload"]["name"]);
	}
	//���s�୶��ثe�ؿ���
	header("Location: ?dir=".$_POST["dir"]);
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>�ɮ׺޲z</title>
</head>
<body>
<?php
//�Y��URL�Ѽ�dir�A��ȧY���ثe���|
if(isset($_GET["dir"])&&$_GET["dir"]!=""){
	$fileDir = $_GET["dir"];
}
//�ثe���|�W�@�h���|
$fileUplevel = dirname($fileDir);
//���o�ثe���|�������e
$fileResource = scandir($fileDir);
echo '<table width="500" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000">';
//��ܥثe���|
echo '<tr><td bgcolor="#FAFAFA"colspan="3">�ثe���|�G'.$fileDir.'</td></tr>'; 
echo '<tr><td bgcolor="#FAFAFA"colspan="3" align="center">';
//�]�wURL�Ѽ�action��upload
echo '<form action="?action=upload" method="post" enctype="multipart/form-data" name="form1" id="form1">';
//�N�W�@�h���|�a�i�s����URL�Ѽ�dir��
echo '<a href="?dir='.$fileUplevel.'">�W�@�h</a> | ';
echo '�W���ɮ� <input type="file" name="upload" style="height:20px" />';
echo '<input type="submit" name="button" style="height:20px" value="�e�X" />';
echo '<input name="dir" type="hidden" id="dir" value="'.$fileDir.'" /></form>';
echo '<tr><td bgcolor="#FAFAFA">�W��</td><td bgcolor="#FAFAFA" width="120" align="center">�ɮפj�p</td><td bgcolor="#FAFAFA" width="80" align="center">�\��</td></tr>';
//��ܸ�Ƨ����e
foreach($fileResource as $fileName){
	if(is_dir($fileDir.'\\'.$fileName)){
		//����ܬ۹���|�u.�v�Ρu..�v
		if($fileName != "." && $fileName !=".."){			
			//��ܸ�Ƨ��A�ó]�w�Ӹ�Ƨ������|�a�i�s����URL�Ѽ�dir��
			echo '<tr><td bgcolor="#FAFAFA" width="300"><a href="?dir='.$fileDir.'\\'.$fileName.'">&lt;'.$fileName.'&gt;</a></td>';
			echo '<td bgcolor="#FAFAFA" width="120">&nbsp;</td><td bgcolor="#FAFAFA" width="80">&nbsp;</td></tr>';
		}
	}
}
//����ɮת����e
foreach($fileResource as $fileName){
	if(is_file($fileDir.'\\'.$fileName)){
		//�p���ɮפj�p
		$fsize = filesize($fileDir.'\\'.$fileName);
		//����ɮצW��
		echo '<tr><td bgcolor="#FAFAFA" width="300">'.$fileName.'</td>';
		//����ɮפj�p�A�åH�d��Ÿ��榡�����
		echo '<td bgcolor="#FAFAFA" width="120" align="right">'.number_format($fsize).' bytes</td>';
		//�b�R����r�W�[�W�s���A�ó]�w�Ӹ�Ƨ������|�a�i�s����URL�Ѽ�dir�B�Ѽ�action��delete
		echo '<td bgcolor="#FAFAFA" width="80" align="center"><a href="?file='.$fileDir.'\\'.$fileName.'&action=delete">�R��</a></td></tr>';
	}
}
echo '</table>';
?>
</body>
</html>