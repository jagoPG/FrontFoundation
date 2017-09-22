<?php

/* node_modules/fsevents/node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html */
class __TwigTemplate_2da9f813962d37fa5f670c0420a88bbc8d8dfac708c0c1b43b6b429c8b03192e extends Twig_Template
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
        $__internal_170c10ef9dc4f025ca2861eb15f836da697a1193ab0bcd4ec25badc5872629e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170c10ef9dc4f025ca2861eb15f836da697a1193ab0bcd4ec25badc5872629e0->enter($__internal_170c10ef9dc4f025ca2861eb15f836da697a1193ab0bcd4ec25badc5872629e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html"));

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
        
        $__internal_170c10ef9dc4f025ca2861eb15f836da697a1193ab0bcd4ec25badc5872629e0->leave($__internal_170c10ef9dc4f025ca2861eb15f836da697a1193ab0bcd4ec25badc5872629e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html";
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
", "node_modules/fsevents/node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/node-pre-gyp/lib/util/nw-pre-gyp/index.html");
    }
}
