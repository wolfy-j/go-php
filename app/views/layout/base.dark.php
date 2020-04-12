<!DOCTYPE html>
<html lang="@{locale}">
<head>
    <title>${title}</title>
    <block:head>
        <link rel="stylesheet" href="/css/vendor.css">
        <link rel="stylesheet" href="/css/app.css">
        <stack:collect name="styles" level="2"/>
    </block:head>
</head>
<body>
<use:element path="layout/partial/header"/>
<use:element path="layout/partial/footer"/>
<use:element path="layout/partial/left-sidebar"/>
<use:element path="layout/partial/right-sidebar"/>
<block:header>
    <header/>
</block:header>
<block:content>
    <block:left-sidebar>
        <left-sidebar/>
    </block:left-sidebar>
    <block:body/>
    <block:right-sidebar>
        <right-sidebar/>
    </block:right-sidebar>
</block:content>
<block:footer>
    <footer/>
</block:footer>
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
<stack:collect name="scripts" level="1"/>
</body>
<hidden>${context}</hidden>
</html>