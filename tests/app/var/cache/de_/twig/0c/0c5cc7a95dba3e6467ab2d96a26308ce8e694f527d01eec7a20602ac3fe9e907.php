<?php

/* node_modules/tape/example/static/index.html */
class __TwigTemplate_bd365e0a0ce222cb3980325ae9f67d9e80ab2c96b4315846656aab3bb9e3aa71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e27b1c4996c0c87dbcd343442017552d3355fdc384d751c32edcf41bcdcb715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e27b1c4996c0c87dbcd343442017552d3355fdc384d751c32edcf41bcdcb715->enter($__internal_2e27b1c4996c0c87dbcd343442017552d3355fdc384d751c32edcf41bcdcb715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/static/index.html"));

        // line 1
        echo "<!doctype html>
<html>
<head>
<style>
body {
    font-family: monospace;
    white-space: pre;
}
</style>
</head>
<body>
<script>
if (typeof console === 'undefined') console = {};
console.log = function (msg) {
    var txt = document.createTextNode(msg);
    document.body.appendChild(txt);
};
</script>
<script src=\"bundle.js\"></script>
</body>
</html>
";
        
        $__internal_2e27b1c4996c0c87dbcd343442017552d3355fdc384d751c32edcf41bcdcb715->leave($__internal_2e27b1c4996c0c87dbcd343442017552d3355fdc384d751c32edcf41bcdcb715_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/static/index.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
<style>
body {
    font-family: monospace;
    white-space: pre;
}
</style>
</head>
<body>
<script>
if (typeof console === 'undefined') console = {};
console.log = function (msg) {
    var txt = document.createTextNode(msg);
    document.body.appendChild(txt);
};
</script>
<script src=\"bundle.js\"></script>
</body>
</html>
", "node_modules/tape/example/static/index.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/static/index.html");
    }
}
