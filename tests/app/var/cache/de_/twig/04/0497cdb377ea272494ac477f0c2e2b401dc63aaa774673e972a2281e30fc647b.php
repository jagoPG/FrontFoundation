<?php

/* node_modules/lodash/fp/keysIn.js */
class __TwigTemplate_8f6b009781f59d25e15070a871322fcb1ea9bc439c0916af62e3cb366be98b90 extends Twig_Template
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
        $__internal_c50ee190ad747ddfcdfa17b10eb61c2211b31521014eb8a660feac683f054d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50ee190ad747ddfcdfa17b10eb61c2211b31521014eb8a660feac683f054d16->enter($__internal_c50ee190ad747ddfcdfa17b10eb61c2211b31521014eb8a660feac683f054d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/keysIn.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('keysIn', require('../keysIn'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c50ee190ad747ddfcdfa17b10eb61c2211b31521014eb8a660feac683f054d16->leave($__internal_c50ee190ad747ddfcdfa17b10eb61c2211b31521014eb8a660feac683f054d16_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/keysIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('keysIn', require('../keysIn'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/keysIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/keysIn.js");
    }
}
