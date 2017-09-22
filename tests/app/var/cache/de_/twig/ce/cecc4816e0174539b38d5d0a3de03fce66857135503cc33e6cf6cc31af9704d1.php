<?php

/* node_modules/resolve/example/async.js */
class __TwigTemplate_31066dd47dabc1bb82b0f0afdb47640d63bd9d8d44150c3d7be01783cc877f5c extends Twig_Template
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
        $__internal_df804335ce8c7e349093b10827b9ad34bc153768c0e82b2f576b847ecc6c2725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df804335ce8c7e349093b10827b9ad34bc153768c0e82b2f576b847ecc6c2725->enter($__internal_df804335ce8c7e349093b10827b9ad34bc153768c0e82b2f576b847ecc6c2725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/example/async.js"));

        // line 1
        echo "var resolve = require('../');
resolve('tap', { basedir: __dirname }, function (err, res) {
    if (err) console.error(err);
    else console.log(res);
});
";
        
        $__internal_df804335ce8c7e349093b10827b9ad34bc153768c0e82b2f576b847ecc6c2725->leave($__internal_df804335ce8c7e349093b10827b9ad34bc153768c0e82b2f576b847ecc6c2725_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/example/async.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var resolve = require('../');
resolve('tap', { basedir: __dirname }, function (err, res) {
    if (err) console.error(err);
    else console.log(res);
});
", "node_modules/resolve/example/async.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/example/async.js");
    }
}
