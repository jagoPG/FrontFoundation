<?php

/* node_modules/lodash/fp/sortedUniqBy.js */
class __TwigTemplate_39dc5c18aa92cb188a02d8ab6a330f5b66b5b19e4fd061697dd2da50acdad326 extends Twig_Template
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
        $__internal_c8de7cb6f787292b80507b11d3fa0b82d77057895af0fbbf4ed2711707d25924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8de7cb6f787292b80507b11d3fa0b82d77057895af0fbbf4ed2711707d25924->enter($__internal_c8de7cb6f787292b80507b11d3fa0b82d77057895af0fbbf4ed2711707d25924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sortedUniqBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sortedUniqBy', require('../sortedUniqBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_c8de7cb6f787292b80507b11d3fa0b82d77057895af0fbbf4ed2711707d25924->leave($__internal_c8de7cb6f787292b80507b11d3fa0b82d77057895af0fbbf4ed2711707d25924_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sortedUniqBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sortedUniqBy', require('../sortedUniqBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sortedUniqBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sortedUniqBy.js");
    }
}
