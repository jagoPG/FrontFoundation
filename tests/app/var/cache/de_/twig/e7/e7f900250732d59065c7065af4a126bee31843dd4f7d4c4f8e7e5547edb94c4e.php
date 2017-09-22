<?php

/* node_modules/resolve/test/resolver/without_basedir/main.js */
class __TwigTemplate_23a5b5557890a4705a0a29970a4cff9f3dac9a669a50064c885d4541ed102ffc extends Twig_Template
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
        $__internal_97829d6297cc30aad457c4bc39f208f27c43f66eb4580341fa81e620148c482a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97829d6297cc30aad457c4bc39f208f27c43f66eb4580341fa81e620148c482a->enter($__internal_97829d6297cc30aad457c4bc39f208f27c43f66eb4580341fa81e620148c482a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/resolver/without_basedir/main.js"));

        // line 1
        echo "var resolve = require('../../../');

module.exports = function (t, cb) {
    resolve('mymodule', null, cb);
};
";
        
        $__internal_97829d6297cc30aad457c4bc39f208f27c43f66eb4580341fa81e620148c482a->leave($__internal_97829d6297cc30aad457c4bc39f208f27c43f66eb4580341fa81e620148c482a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/resolver/without_basedir/main.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var resolve = require('../../../');

module.exports = function (t, cb) {
    resolve('mymodule', null, cb);
};
", "node_modules/resolve/test/resolver/without_basedir/main.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/resolver/without_basedir/main.js");
    }
}
