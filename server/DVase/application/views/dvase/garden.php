<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta content="no-cache" http-equiv="pragma">
        <title>Dvase</title>

        <!-- 공통 CSS, JS 선언 -->
        <link href="http://api.nongsaro.go.kr/css/api.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="http://api.nongsaro.go.kr/js/framework.js"></script>
        <script type="text/javascript" src="http://api.nongsaro.go.kr/js/openapi_nongsaro.js"></script>

        <script type="text/javascript">
            nongsaroOpenApiRequest.apiKey = "nongsaroSampleKey";//Api Key  - 발급받은 인증키로변경
            nongsaroOpenApiRequest.serviceName = "garden";//서비스명
            nongsaroOpenApiRequest.operationName = "lightList";//오퍼레이션명 - nongsaroApiLoadingArea 영역에 로딩할 오퍼레이션
            nongsaroOpenApiRequest.htmlArea="nongsaroApiLoadingArea";//첫번째로 HTML을 로딩할영역
            nongsaroOpenApiRequest.callback = "http://api.nongsaro.go.kr/sample/ajax/ajax_local_callback.php";//크로스 도메인 처리를 위한 콜백페이지 - 샘플소스에 있는 콜백페이지를 서버에 올리고 올린 경로로 수정
        </script>
    </head>
    <body>
        <div id="nongsaroApiLoadingArea"></div><!-- 검색 HTML 로딩 영역 -->
        <div id="nongsaroApiLoadingAreaResult"></div><!-- 검색결과 HTML 로딩 영역 -->
    </body>
</html>
