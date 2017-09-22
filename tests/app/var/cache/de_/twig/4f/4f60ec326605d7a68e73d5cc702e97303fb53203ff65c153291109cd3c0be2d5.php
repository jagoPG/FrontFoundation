<?php

/* node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html */
class __TwigTemplate_e97dcfa0c14c80f9fc2f6d931e9f502d2cd71f67b8295642560cd07e153fdced extends Twig_Template
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
        $__internal_b0b986f6cad202d5f468785665b015b95d9df68265bf6751d2ffcf4949cd243d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b986f6cad202d5f468785665b015b95d9df68265bf6751d2ffcf4949cd243d->enter($__internal_b0b986f6cad202d5f468785665b015b95d9df68265bf6751d2ffcf4949cd243d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html"));

        // line 1
        echo "<!doctype html>
<html>
<head>
<meta charset=\"utf-8\">
<title>Node-webkit-based module test</title>
<script>
function nwModuleTest(){
   var util = require('util');
   var moduleFolder = require('nw.gui').App.argv[0];
   try {
      require(moduleFolder);
   } catch(e) {
      if( process.platform !== 'win32' ){
         util.log('nw-pre-gyp error:');
         util.log(e.stack);
      }
      process.exit(1);
   }
   process.exit(0);
}
</script>
</head>
<body onload=\"nwModuleTest()\">
<h1>Node-webkit-based module test</h1>
</body>
</html>
";
        
        $__internal_b0b986f6cad202d5f468785665b015b95d9df68265bf6751d2ffcf4949cd243d->leave($__internal_b0b986f6cad202d5f468785665b015b95d9df68265bf6751d2ffcf4949cd243d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html";
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
<meta charset=\"utf-8\">
<title>Node-webkit-based module test</title>
<script>
function nwModuleTest(){
   var util = require('util');
   var moduleFolder = require('nw.gui').App.argv[0];
   try {
      require(moduleFolder);
   } catch(e) {
      if( process.platform !== 'win32' ){
         util.log('nw-pre-gyp error:');
         util.log(e.stack);
      }
      process.exit(1);
   }
   process.exit(0);
}
</script>
</head>
<body onload=\"nwModuleTest()\">
<h1>Node-webkit-based module test</h1>
</body>
</html>
", "node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html");
    }
}
