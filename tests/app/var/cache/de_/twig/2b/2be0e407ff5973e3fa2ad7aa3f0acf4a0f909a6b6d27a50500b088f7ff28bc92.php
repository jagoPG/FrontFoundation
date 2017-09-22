<?php

/* node_modules/object-inspect/test/holes.js */
class __TwigTemplate_725eb53dfd1993a31e24cc8566f8dc464c8ebeb76016a0a92a6427cf52f863bb extends Twig_Template
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
        $__internal_acfee2c6092c4e8bc5cc51a58e79393e49da9421382ede4710e9de8057ab7461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfee2c6092c4e8bc5cc51a58e79393e49da9421382ede4710e9de8057ab7461->enter($__internal_acfee2c6092c4e8bc5cc51a58e79393e49da9421382ede4710e9de8057ab7461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/holes.js"));

        // line 1
        echo "var test = require('tape');
var inspect = require('../');

var xs = [ 'a', 'b' ];
xs[5] = 'f';
xs[7] = 'j';
xs[8] = 'k';

test('holes', function (t) {
    t.plan(1);
    t.equal(
        inspect(xs),
        \"[ 'a', 'b', , , , 'f', , 'j', 'k' ]\"
    );
});
";
        
        $__internal_acfee2c6092c4e8bc5cc51a58e79393e49da9421382ede4710e9de8057ab7461->leave($__internal_acfee2c6092c4e8bc5cc51a58e79393e49da9421382ede4710e9de8057ab7461_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/holes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var inspect = require('../');

var xs = [ 'a', 'b' ];
xs[5] = 'f';
xs[7] = 'j';
xs[8] = 'k';

test('holes', function (t) {
    t.plan(1);
    t.equal(
        inspect(xs),
        \"[ 'a', 'b', , , , 'f', , 'j', 'k' ]\"
    );
});
", "node_modules/object-inspect/test/holes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/holes.js");
    }
}
