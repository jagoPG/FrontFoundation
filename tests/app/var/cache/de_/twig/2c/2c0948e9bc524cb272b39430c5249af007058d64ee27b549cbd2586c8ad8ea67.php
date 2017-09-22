<?php

/* node_modules/rc/test/nested-env-vars.js */
class __TwigTemplate_da76cb755a30c9b8b671b617eecd16d76ea3860c04910e352ceb076ddca16fcd extends Twig_Template
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
        $__internal_cd2f463260be5421560a226293e1d831f1819ac0e6ad78bd4ca584d250fa419c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2f463260be5421560a226293e1d831f1819ac0e6ad78bd4ca584d250fa419c->enter($__internal_cd2f463260be5421560a226293e1d831f1819ac0e6ad78bd4ca584d250fa419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/rc/test/nested-env-vars.js"));

        // line 1
        echo "
var seed = Math.random();
var n = 'rc'+ seed;
var N = 'RC'+ seed;
var assert = require('assert')


// Basic usage
process.env[n+'_someOpt__a'] = 42
process.env[n+'_someOpt__x__'] = 99
process.env[n+'_someOpt__a__b'] = 186
process.env[n+'_someOpt__a__b__c'] = 243
process.env[n+'_someOpt__x__y'] = 1862
process.env[n+'_someOpt__z'] = 186577

// Should ignore empty strings from orphaned '__'
process.env[n+'_someOpt__z__x__'] = 18629
process.env[n+'_someOpt__w__w__'] = 18629

// Leading '__' should ignore everything up to 'z'
process.env[n+'___z__i__'] = 9999

// should ignore case for config name section.
process.env[N+'_test_upperCase'] = 187

function testPrefix(prefix) {
\tvar config = require('../')(prefix, {
\t  option: true
\t})

\tconsole.log('\\n\\n------ nested-env-vars ------\\n',{prefix: prefix}, '\\n', config);

\tassert.equal(config.option, true)
\tassert.equal(config.someOpt.a, 42)
\tassert.equal(config.someOpt.x, 99)
\t// Should not override `a` once it's been set
\tassert.equal(config.someOpt.a/*.b*/, 42)
\t// Should not override `x` once it's been set
\tassert.equal(config.someOpt.x/*.y*/, 99)
\tassert.equal(config.someOpt.z, 186577)
\t// Should not override `z` once it's been set
\tassert.equal(config.someOpt.z/*.x*/, 186577)
\tassert.equal(config.someOpt.w.w, 18629)
\tassert.equal(config.z.i, 9999)

\tassert.equal(config.test_upperCase, 187)
}

testPrefix(n);
testPrefix(N);
";
        
        $__internal_cd2f463260be5421560a226293e1d831f1819ac0e6ad78bd4ca584d250fa419c->leave($__internal_cd2f463260be5421560a226293e1d831f1819ac0e6ad78bd4ca584d250fa419c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/rc/test/nested-env-vars.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
var seed = Math.random();
var n = 'rc'+ seed;
var N = 'RC'+ seed;
var assert = require('assert')


// Basic usage
process.env[n+'_someOpt__a'] = 42
process.env[n+'_someOpt__x__'] = 99
process.env[n+'_someOpt__a__b'] = 186
process.env[n+'_someOpt__a__b__c'] = 243
process.env[n+'_someOpt__x__y'] = 1862
process.env[n+'_someOpt__z'] = 186577

// Should ignore empty strings from orphaned '__'
process.env[n+'_someOpt__z__x__'] = 18629
process.env[n+'_someOpt__w__w__'] = 18629

// Leading '__' should ignore everything up to 'z'
process.env[n+'___z__i__'] = 9999

// should ignore case for config name section.
process.env[N+'_test_upperCase'] = 187

function testPrefix(prefix) {
\tvar config = require('../')(prefix, {
\t  option: true
\t})

\tconsole.log('\\n\\n------ nested-env-vars ------\\n',{prefix: prefix}, '\\n', config);

\tassert.equal(config.option, true)
\tassert.equal(config.someOpt.a, 42)
\tassert.equal(config.someOpt.x, 99)
\t// Should not override `a` once it's been set
\tassert.equal(config.someOpt.a/*.b*/, 42)
\t// Should not override `x` once it's been set
\tassert.equal(config.someOpt.x/*.y*/, 99)
\tassert.equal(config.someOpt.z, 186577)
\t// Should not override `z` once it's been set
\tassert.equal(config.someOpt.z/*.x*/, 186577)
\tassert.equal(config.someOpt.w.w, 18629)
\tassert.equal(config.z.i, 9999)

\tassert.equal(config.test_upperCase, 187)
}

testPrefix(n);
testPrefix(N);
", "node_modules/rc/test/nested-env-vars.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/rc/test/nested-env-vars.js");
    }
}
