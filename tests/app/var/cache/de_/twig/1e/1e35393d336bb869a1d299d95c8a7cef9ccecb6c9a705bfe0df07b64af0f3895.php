<?php

/* node_modules/lodash/fp/wrapperChain.js */
class __TwigTemplate_d65f8130efdc4720d99dfdc04117d9f97ee3323e05c758473f8d654073d610e3 extends Twig_Template
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
        $__internal_369de44c46f9e9bf946f3fe63d1969190187df470ee06b0c2be42eea4ab845ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369de44c46f9e9bf946f3fe63d1969190187df470ee06b0c2be42eea4ab845ca->enter($__internal_369de44c46f9e9bf946f3fe63d1969190187df470ee06b0c2be42eea4ab845ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/wrapperChain.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('wrapperChain', require('../wrapperChain'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_369de44c46f9e9bf946f3fe63d1969190187df470ee06b0c2be42eea4ab845ca->leave($__internal_369de44c46f9e9bf946f3fe63d1969190187df470ee06b0c2be42eea4ab845ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/wrapperChain.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('wrapperChain', require('../wrapperChain'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/wrapperChain.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/wrapperChain.js");
    }
}
