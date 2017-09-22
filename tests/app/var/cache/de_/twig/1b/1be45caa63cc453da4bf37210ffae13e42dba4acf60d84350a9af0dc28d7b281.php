<?php

/* node_modules/object-inspect/example/inspect.js */
class __TwigTemplate_9622fd1454afa48e8c3a2fca2019d83c2b200d32c31b9c39f49993284c3ca16e extends Twig_Template
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
        $__internal_fc29fe64db30e2bf0b7bd70e48aa77fdd52c2357b2f49b25466e0a01829840fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc29fe64db30e2bf0b7bd70e48aa77fdd52c2357b2f49b25466e0a01829840fe->enter($__internal_fc29fe64db30e2bf0b7bd70e48aa77fdd52c2357b2f49b25466e0a01829840fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/example/inspect.js"));

        // line 1
        echo "var inspect = require('../');

var d = document.createElement('div');
d.setAttribute('id', 'beep');
d.innerHTML = '<b>wooo</b><i>iiiii</i>';

console.log(inspect([ d, { a: 3, b : 4, c: [5,6,[7,[8,[9]]]] } ]));
";
        
        $__internal_fc29fe64db30e2bf0b7bd70e48aa77fdd52c2357b2f49b25466e0a01829840fe->leave($__internal_fc29fe64db30e2bf0b7bd70e48aa77fdd52c2357b2f49b25466e0a01829840fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/example/inspect.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');

var d = document.createElement('div');
d.setAttribute('id', 'beep');
d.innerHTML = '<b>wooo</b><i>iiiii</i>';

console.log(inspect([ d, { a: 3, b : 4, c: [5,6,[7,[8,[9]]]] } ]));
", "node_modules/object-inspect/example/inspect.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/example/inspect.js");
    }
}
