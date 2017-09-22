<?php

/* node_modules/lodash/fp/wrap.js */
class __TwigTemplate_4685590cef7c3afa5beeffea2d89da7577092cee0b832da5dc6ed8a549f6d06b extends Twig_Template
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
        $__internal_1d0bd31b0a0583e12694bc5a8ca8bb49c510a2583ddac519dca59aacc845c1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0bd31b0a0583e12694bc5a8ca8bb49c510a2583ddac519dca59aacc845c1b4->enter($__internal_1d0bd31b0a0583e12694bc5a8ca8bb49c510a2583ddac519dca59aacc845c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/wrap.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('wrap', require('../wrap'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_1d0bd31b0a0583e12694bc5a8ca8bb49c510a2583ddac519dca59aacc845c1b4->leave($__internal_1d0bd31b0a0583e12694bc5a8ca8bb49c510a2583ddac519dca59aacc845c1b4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/wrap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('wrap', require('../wrap'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/wrap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/wrap.js");
    }
}
