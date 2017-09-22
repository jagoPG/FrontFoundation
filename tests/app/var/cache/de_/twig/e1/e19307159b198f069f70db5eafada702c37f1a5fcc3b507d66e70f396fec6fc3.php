<?php

/* node_modules/mime/build/build.js */
class __TwigTemplate_e6feb8346bb620f357913a15526123c14da10666d4985ce6210d8dad6652191d extends Twig_Template
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
        $__internal_b87af3388206e0eabc314713b344a84d2aa4f6be88e8975eab49b833f1d29dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87af3388206e0eabc314713b344a84d2aa4f6be88e8975eab49b833f1d29dc8->enter($__internal_b87af3388206e0eabc314713b344a84d2aa4f6be88e8975eab49b833f1d29dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mime/build/build.js"));

        // line 1
        echo "var db = require('mime-db');

var mapByType = {};
Object.keys(db).forEach(function(key) {
  var extensions = db[key].extensions;
  if (extensions) {
    mapByType[key] = extensions;
  }
});

console.log(JSON.stringify(mapByType));
";
        
        $__internal_b87af3388206e0eabc314713b344a84d2aa4f6be88e8975eab49b833f1d29dc8->leave($__internal_b87af3388206e0eabc314713b344a84d2aa4f6be88e8975eab49b833f1d29dc8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mime/build/build.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var db = require('mime-db');

var mapByType = {};
Object.keys(db).forEach(function(key) {
  var extensions = db[key].extensions;
  if (extensions) {
    mapByType[key] = extensions;
  }
});

console.log(JSON.stringify(mapByType));
", "node_modules/mime/build/build.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mime/build/build.js");
    }
}
