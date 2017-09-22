<?php

/* node_modules/mkdirp/examples/pow.js */
class __TwigTemplate_bfcb98b740ab1b9e287a7e211e9c9164dc096a09de92d13f6095a1a0aae5cd70 extends Twig_Template
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
        $__internal_7a3326fcfa56113e424b86695489e9a54cccbf0c281d6cd53439747c1ab62271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3326fcfa56113e424b86695489e9a54cccbf0c281d6cd53439747c1ab62271->enter($__internal_7a3326fcfa56113e424b86695489e9a54cccbf0c281d6cd53439747c1ab62271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/examples/pow.js"));

        // line 1
        echo "var mkdirp = require('mkdirp');

mkdirp('/tmp/foo/bar/baz', function (err) {
    if (err) console.error(err)
    else console.log('pow!')
});
";
        
        $__internal_7a3326fcfa56113e424b86695489e9a54cccbf0c281d6cd53439747c1ab62271->leave($__internal_7a3326fcfa56113e424b86695489e9a54cccbf0c281d6cd53439747c1ab62271_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/examples/pow.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var mkdirp = require('mkdirp');

mkdirp('/tmp/foo/bar/baz', function (err) {
    if (err) console.error(err)
    else console.log('pow!')
});
", "node_modules/mkdirp/examples/pow.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/examples/pow.js");
    }
}
