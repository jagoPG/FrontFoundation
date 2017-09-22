<?php

/* node_modules/event-emitter/test/unify.js */
class __TwigTemplate_b2ea143ffa7354af4949377da1eb25aff8f949adefdc601f24f990a316fd2d0a extends Twig_Template
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
        $__internal_627c43693d55a236ce8ef48267e21eface7225bbe8280e23b0dc35cb4598072d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627c43693d55a236ce8ef48267e21eface7225bbe8280e23b0dc35cb4598072d->enter($__internal_627c43693d55a236ce8ef48267e21eface7225bbe8280e23b0dc35cb4598072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/test/unify.js"));

        // line 1
        echo "'use strict';

var ee = require('../');

module.exports = function (t) {

\treturn {
\t\t\"\": function (a) {
\t\t\tvar x = {}, y = {}, z = {}, count, count2, count3;

\t\t\tee(x);
\t\t\tee(y);
\t\t\tee(z);

\t\t\tcount = 0;
\t\t\tcount2 = 0;
\t\t\tcount3 = 0;
\t\t\tx.on('foo', function () { ++count; });
\t\t\ty.on('foo', function () { ++count2; });
\t\t\tz.on('foo', function () { ++count3; });

\t\t\tx.emit('foo');
\t\t\ta(count, 1, \"Pre unify, x\");
\t\t\ta(count2, 0, \"Pre unify, y\");
\t\t\ta(count3, 0, \"Pre unify, z\");

\t\t\tt(x, y);
\t\t\ta(x.__ee__, y.__ee__, \"Post unify y\");
\t\t\tx.emit('foo');
\t\t\ta(count, 2, \"Post unify, x\");
\t\t\ta(count2, 1, \"Post unify, y\");
\t\t\ta(count3, 0, \"Post unify, z\");

\t\t\ty.emit('foo');
\t\t\ta(count, 3, \"Post unify, on y, x\");
\t\t\ta(count2, 2, \"Post unify, on y, y\");
\t\t\ta(count3, 0, \"Post unify, on y, z\");

\t\t\tt(x, z);
\t\t\ta(x.__ee__, x.__ee__, \"Post unify z\");
\t\t\tx.emit('foo');
\t\t\ta(count, 4, \"Post unify z, x\");
\t\t\ta(count2, 3, \"Post unify z, y\");
\t\t\ta(count3, 1, \"Post unify z, z\");
\t\t},
\t\t\"On empty\": function (a) {
\t\t\tvar x = {}, y = {}, z = {}, count, count2, count3;

\t\t\tee(x);
\t\t\tee(y);
\t\t\tee(z);

\t\t\tcount = 0;
\t\t\tcount2 = 0;
\t\t\tcount3 = 0;
\t\t\ty.on('foo', function () { ++count2; });
\t\t\tx.emit('foo');
\t\t\ta(count, 0, \"Pre unify, x\");
\t\t\ta(count2, 0, \"Pre unify, y\");
\t\t\ta(count3, 0, \"Pre unify, z\");

\t\t\tt(x, y);
\t\t\ta(x.__ee__, y.__ee__, \"Post unify y\");
\t\t\tx.on('foo', function () { ++count; });
\t\t\tx.emit('foo');
\t\t\ta(count, 1, \"Post unify, x\");
\t\t\ta(count2, 1, \"Post unify, y\");
\t\t\ta(count3, 0, \"Post unify, z\");

\t\t\ty.emit('foo');
\t\t\ta(count, 2, \"Post unify, on y, x\");
\t\t\ta(count2, 2, \"Post unify, on y, y\");
\t\t\ta(count3, 0, \"Post unify, on y, z\");

\t\t\tt(x, z);
\t\t\ta(x.__ee__, z.__ee__, \"Post unify z\");
\t\t\tz.on('foo', function () { ++count3; });
\t\t\tx.emit('foo');
\t\t\ta(count, 3, \"Post unify z, x\");
\t\t\ta(count2, 3, \"Post unify z, y\");
\t\t\ta(count3, 1, \"Post unify z, z\");
\t\t},
\t\tMany: function (a) {
\t\t\tvar x = {}, y = {}, z = {}, count, count2, count3;

\t\t\tee(x);
\t\t\tee(y);
\t\t\tee(z);

\t\t\tcount = 0;
\t\t\tcount2 = 0;
\t\t\tcount3 = 0;
\t\t\tx.on('foo', function () { ++count; });
\t\t\ty.on('foo', function () { ++count2; });
\t\t\ty.on('foo', function () { ++count2; });
\t\t\tz.on('foo', function () { ++count3; });

\t\t\tx.emit('foo');
\t\t\ta(count, 1, \"Pre unify, x\");
\t\t\ta(count2, 0, \"Pre unify, y\");
\t\t\ta(count3, 0, \"Pre unify, z\");

\t\t\tt(x, y);
\t\t\ta(x.__ee__, y.__ee__, \"Post unify y\");
\t\t\tx.emit('foo');
\t\t\ta(count, 2, \"Post unify, x\");
\t\t\ta(count2, 2, \"Post unify, y\");
\t\t\ta(count3, 0, \"Post unify, z\");

\t\t\ty.emit('foo');
\t\t\ta(count, 3, \"Post unify, on y, x\");
\t\t\ta(count2, 4, \"Post unify, on y, y\");
\t\t\ta(count3, 0, \"Post unify, on y, z\");

\t\t\tt(x, z);
\t\t\ta(x.__ee__, x.__ee__, \"Post unify z\");
\t\t\tx.emit('foo');
\t\t\ta(count, 4, \"Post unify z, x\");
\t\t\ta(count2, 6, \"Post unify z, y\");
\t\t\ta(count3, 1, \"Post unify z, z\");
\t\t}
\t};
};
";
        
        $__internal_627c43693d55a236ce8ef48267e21eface7225bbe8280e23b0dc35cb4598072d->leave($__internal_627c43693d55a236ce8ef48267e21eface7225bbe8280e23b0dc35cb4598072d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/test/unify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var ee = require('../');

module.exports = function (t) {

\treturn {
\t\t\"\": function (a) {
\t\t\tvar x = {}, y = {}, z = {}, count, count2, count3;

\t\t\tee(x);
\t\t\tee(y);
\t\t\tee(z);

\t\t\tcount = 0;
\t\t\tcount2 = 0;
\t\t\tcount3 = 0;
\t\t\tx.on('foo', function () { ++count; });
\t\t\ty.on('foo', function () { ++count2; });
\t\t\tz.on('foo', function () { ++count3; });

\t\t\tx.emit('foo');
\t\t\ta(count, 1, \"Pre unify, x\");
\t\t\ta(count2, 0, \"Pre unify, y\");
\t\t\ta(count3, 0, \"Pre unify, z\");

\t\t\tt(x, y);
\t\t\ta(x.__ee__, y.__ee__, \"Post unify y\");
\t\t\tx.emit('foo');
\t\t\ta(count, 2, \"Post unify, x\");
\t\t\ta(count2, 1, \"Post unify, y\");
\t\t\ta(count3, 0, \"Post unify, z\");

\t\t\ty.emit('foo');
\t\t\ta(count, 3, \"Post unify, on y, x\");
\t\t\ta(count2, 2, \"Post unify, on y, y\");
\t\t\ta(count3, 0, \"Post unify, on y, z\");

\t\t\tt(x, z);
\t\t\ta(x.__ee__, x.__ee__, \"Post unify z\");
\t\t\tx.emit('foo');
\t\t\ta(count, 4, \"Post unify z, x\");
\t\t\ta(count2, 3, \"Post unify z, y\");
\t\t\ta(count3, 1, \"Post unify z, z\");
\t\t},
\t\t\"On empty\": function (a) {
\t\t\tvar x = {}, y = {}, z = {}, count, count2, count3;

\t\t\tee(x);
\t\t\tee(y);
\t\t\tee(z);

\t\t\tcount = 0;
\t\t\tcount2 = 0;
\t\t\tcount3 = 0;
\t\t\ty.on('foo', function () { ++count2; });
\t\t\tx.emit('foo');
\t\t\ta(count, 0, \"Pre unify, x\");
\t\t\ta(count2, 0, \"Pre unify, y\");
\t\t\ta(count3, 0, \"Pre unify, z\");

\t\t\tt(x, y);
\t\t\ta(x.__ee__, y.__ee__, \"Post unify y\");
\t\t\tx.on('foo', function () { ++count; });
\t\t\tx.emit('foo');
\t\t\ta(count, 1, \"Post unify, x\");
\t\t\ta(count2, 1, \"Post unify, y\");
\t\t\ta(count3, 0, \"Post unify, z\");

\t\t\ty.emit('foo');
\t\t\ta(count, 2, \"Post unify, on y, x\");
\t\t\ta(count2, 2, \"Post unify, on y, y\");
\t\t\ta(count3, 0, \"Post unify, on y, z\");

\t\t\tt(x, z);
\t\t\ta(x.__ee__, z.__ee__, \"Post unify z\");
\t\t\tz.on('foo', function () { ++count3; });
\t\t\tx.emit('foo');
\t\t\ta(count, 3, \"Post unify z, x\");
\t\t\ta(count2, 3, \"Post unify z, y\");
\t\t\ta(count3, 1, \"Post unify z, z\");
\t\t},
\t\tMany: function (a) {
\t\t\tvar x = {}, y = {}, z = {}, count, count2, count3;

\t\t\tee(x);
\t\t\tee(y);
\t\t\tee(z);

\t\t\tcount = 0;
\t\t\tcount2 = 0;
\t\t\tcount3 = 0;
\t\t\tx.on('foo', function () { ++count; });
\t\t\ty.on('foo', function () { ++count2; });
\t\t\ty.on('foo', function () { ++count2; });
\t\t\tz.on('foo', function () { ++count3; });

\t\t\tx.emit('foo');
\t\t\ta(count, 1, \"Pre unify, x\");
\t\t\ta(count2, 0, \"Pre unify, y\");
\t\t\ta(count3, 0, \"Pre unify, z\");

\t\t\tt(x, y);
\t\t\ta(x.__ee__, y.__ee__, \"Post unify y\");
\t\t\tx.emit('foo');
\t\t\ta(count, 2, \"Post unify, x\");
\t\t\ta(count2, 2, \"Post unify, y\");
\t\t\ta(count3, 0, \"Post unify, z\");

\t\t\ty.emit('foo');
\t\t\ta(count, 3, \"Post unify, on y, x\");
\t\t\ta(count2, 4, \"Post unify, on y, y\");
\t\t\ta(count3, 0, \"Post unify, on y, z\");

\t\t\tt(x, z);
\t\t\ta(x.__ee__, x.__ee__, \"Post unify z\");
\t\t\tx.emit('foo');
\t\t\ta(count, 4, \"Post unify z, x\");
\t\t\ta(count2, 6, \"Post unify z, y\");
\t\t\ta(count3, 1, \"Post unify z, z\");
\t\t}
\t};
};
", "node_modules/event-emitter/test/unify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/test/unify.js");
    }
}
