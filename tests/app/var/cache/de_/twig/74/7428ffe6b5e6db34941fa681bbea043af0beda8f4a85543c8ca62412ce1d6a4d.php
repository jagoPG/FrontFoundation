<?php

/* node_modules/event-emitter/test/pipe.js */
class __TwigTemplate_22701c38167e8a87878ec137eb66835941f84a76f0d8df913eee2bbd2ea3aedc extends Twig_Template
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
        $__internal_77a54941b9ae2acabdf2b9011e125bedf3cac2d5a8b7ca6062244da95fac15b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a54941b9ae2acabdf2b9011e125bedf3cac2d5a8b7ca6062244da95fac15b8->enter($__internal_77a54941b9ae2acabdf2b9011e125bedf3cac2d5a8b7ca6062244da95fac15b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/test/pipe.js"));

        // line 1
        echo "'use strict';

var ee = require('../');

module.exports = function (t, a) {
\tvar x = {}, y = {}, z = {}, count, count2, count3, pipe;

\tee(x);
\tx = Object.create(x);
\tee(y);
\tee(z);

\tcount = 0;
\tcount2 = 0;
\tcount3 = 0;
\tx.on('foo', function () {
\t\t++count;
\t});
\ty.on('foo', function () {
\t\t++count2;
\t});
\tz.on('foo', function () {
\t\t++count3;
\t});

\tx.emit('foo');
\ta(count, 1, \"Pre pipe, x\");
\ta(count2, 0, \"Pre pipe, y\");
\ta(count3, 0, \"Pre pipe, z\");

\tpipe = t(x, y);
\tx.emit('foo');
\ta(count, 2, \"Post pipe, x\");
\ta(count2, 1, \"Post pipe, y\");
\ta(count3, 0, \"Post pipe, z\");

\ty.emit('foo');
\ta(count, 2, \"Post pipe, on y, x\");
\ta(count2, 2, \"Post pipe, on y, y\");
\ta(count3, 0, \"Post pipe, on y, z\");

\tt(x, z);
\tx.emit('foo');
\ta(count, 3, \"Post pipe z, x\");
\ta(count2, 3, \"Post pipe z, y\");
\ta(count3, 1, \"Post pipe z, z\");

\tpipe.close();
\tx.emit('foo');
\ta(count, 4, \"Close pipe y, x\");
\ta(count2, 3, \"Close pipe y, y\");
\ta(count3, 2, \"Close pipe y, z\");
};
";
        
        $__internal_77a54941b9ae2acabdf2b9011e125bedf3cac2d5a8b7ca6062244da95fac15b8->leave($__internal_77a54941b9ae2acabdf2b9011e125bedf3cac2d5a8b7ca6062244da95fac15b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/test/pipe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ee = require('../');

module.exports = function (t, a) {
\tvar x = {}, y = {}, z = {}, count, count2, count3, pipe;

\tee(x);
\tx = Object.create(x);
\tee(y);
\tee(z);

\tcount = 0;
\tcount2 = 0;
\tcount3 = 0;
\tx.on('foo', function () {
\t\t++count;
\t});
\ty.on('foo', function () {
\t\t++count2;
\t});
\tz.on('foo', function () {
\t\t++count3;
\t});

\tx.emit('foo');
\ta(count, 1, \"Pre pipe, x\");
\ta(count2, 0, \"Pre pipe, y\");
\ta(count3, 0, \"Pre pipe, z\");

\tpipe = t(x, y);
\tx.emit('foo');
\ta(count, 2, \"Post pipe, x\");
\ta(count2, 1, \"Post pipe, y\");
\ta(count3, 0, \"Post pipe, z\");

\ty.emit('foo');
\ta(count, 2, \"Post pipe, on y, x\");
\ta(count2, 2, \"Post pipe, on y, y\");
\ta(count3, 0, \"Post pipe, on y, z\");

\tt(x, z);
\tx.emit('foo');
\ta(count, 3, \"Post pipe z, x\");
\ta(count2, 3, \"Post pipe z, y\");
\ta(count3, 1, \"Post pipe z, z\");

\tpipe.close();
\tx.emit('foo');
\ta(count, 4, \"Close pipe y, x\");
\ta(count2, 3, \"Close pipe y, y\");
\ta(count3, 2, \"Close pipe y, z\");
};
", "node_modules/event-emitter/test/pipe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/test/pipe.js");
    }
}
