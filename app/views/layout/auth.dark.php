<!DOCTYPE html>
<html lang="@{locale}">
<head>
    <title>${title}</title>
    <block:head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="/css/vendor.css">
        <link rel="stylesheet" href="/css/auth.css">
        <stack:collect name="styles" level="2"/>
    </block:head>
</head>
<body>
<block:content>
    <div id="wrapper" class="wrapper">
        <block:body/>
    </div>
</block:content>
<block:footer>
    <footer/>
</block:footer>
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/auth.js"></script>
<stack:collect name="scripts" level="1"/>
</body>
<hidden>${context}</hidden>
</html>