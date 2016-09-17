---
layout: home
menu: Home
title: 경기과학고 텍 사용자협회
description: "LaTeX is a high-quality typesetting system; it includes features designed for the production of technical and scientific documentation."
---
<?php
$size_1=number_format(filesize("files/gshslatexintro.zip")/1024/1024,2);
$size_2=number_format(filesize("files/examples.zip")/1024/1024,2);
$size_3=number_format(filesize("files/An-Introduction-to-LaTeX.zip")/1024/1024,2);
$size_4=number_format(filesize("files/pdf-cloud.zip")/1024/1024,2);		
?>
# 다운로드
<a href="files/gshslatexintro.zip" class="btn"><b>양식(R&E보고서, 졸업논문 등) </b>(<?php echo $size_1 ?>MB)</a>
<a href="files/examples.zip" class="btn"><b> TeX 예시코드 </b>(<?php echo $size_2 ?>MB)</a>
<a href="files/An-Introduction-to-LaTeX.zip" class="btn"><b> TeX 입문서 </b>(<?php echo $size_3 ?>MB)</a>
<a href="files/pdf-cloud.zip" class="btn"><b> 기타 자료 모음집 </b>(<?php echo $size_4 ?>MB)</a>
<a href="fileList.php" class="btn">전체 파일 목록</a>
