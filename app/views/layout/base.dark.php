<!DOCTYPE html>
<html lang="@{locale}">
<head>
    <title>${title}</title>
    <block:head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
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
    <div id="wrapper" class="wrapper">
        <block:left-sidebar>
            <left-sidebar/>
        </block:left-sidebar>
        <block:body/>
        <block:right-sidebar>
            <right-sidebar/>
        </block:right-sidebar>
    </div>
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