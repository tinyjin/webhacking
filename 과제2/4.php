<?php

echo "PHP에서 1+1은 1+1 입니다";
echo "<table border=\"1\">";

echo "<tr><th>GET POST 차이점</th><th>GET</th><th>POST</th></tr>";
echo "<tr><td>설명</td><td>주소에 값이 포함된다, 많은 값을 보낼 수 없다</td><td>body에 값이 포함된다, GET방식보다 많은 데이터를 보낼 수 있다</td></tr>";

echo "<tr><th>PHP에서 \$_SERVER 변수에 담긴 정보 설명</th><th colspan=\"2\">*중요하다고 생각하는 것 정리</th></tr>";

echo "<tr><td>사이트가 위치한 서버상의 위치는 DOCUMENT_ROOT에 저장됨</td><td colspan=\"2\">".$_SERVER['DOCUMENT_ROOT']."</td></tr>";
echo "<tr><td>인코딩 방식은 HTTP_ACCEPT_ENCODING에 저장됨</td><td colspan=\"2\">".$_SERVER['HTTP_ACCEPT_ENCODING']."</td></tr>";
echo "<tr><td>언어는 HTTP_ACCEPT_LANGUAGE에 저장됨</td><td colspan=\"2\">".$_SERVER['HTTP_ACCEPT_LANGUAGE']."</td></tr>";
echo "<tr><td>사이트 접속자 환경은 HTTP_USER_AGENT에 저장됨</td><td colspan=\"2\">".$_SERVER['HTTP_USER_AGENT']."</td></tr>";
echo "<tr><td>사이트 접속자 IP는 REMOTE_ADDR에 저장됨</td><td colspan=\"2\">".$_SERVER['REMOTE_ADDR']."</td></tr>";
echo "<tr><td>실행되고 있는 위치와 파일명은 SCRIPT_FILE_NAME에 저장됨</td><td colspan=\"2\">".$_SERVER['SCRIPT_FILE_NAME']."</td></tr>";
echo "<tr><td>사이트 도메인은 SERVER_NAME에 저장됨</td><td colspan=\"2\">".$_SERVER['SERVER_NAME']."</td></tr>";
echo "<tr><td>사이트가 사용하는 포트는 SERVER_PORT에 저장됨</td><td colspan=\"2\">".$_SERVER['SERVER_PORT']."</td></tr>";
echo "<tr><td>서버의 소프트웨어 정보는 SERVER_SOFTWARE에 저장됨</td><td colspan=\"2\">".$_SERVER['SERVER_SOFTWARE']."</td></tr>";
echo "<tr><td>서버의 프로토콜은 SERVER_PROTOCOL에 저장됨</td><td colspan=\"2\">".$_SERVER['SERVER_PROTOCOL']."</td></tr>";
echo "<tr><td>현재주소에서 도메인 제외한 값은 REQUEST_URI에 저장됨</td><td colspan=\"2\">".$_SERVER['REQUEST_URI']."</td></tr>";


echo "</table>";

?>
