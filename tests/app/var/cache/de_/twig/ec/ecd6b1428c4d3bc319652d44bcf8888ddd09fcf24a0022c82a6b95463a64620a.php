<?php

/* node_modules/json-schema/test/tests.js */
class __TwigTemplate_bf67f6dd2042d41a56fa8aaf14e18dbd9d57a966d6a10e7f853de496ab756f0a extends Twig_Template
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
        $__internal_c840a13b3b6b5ca2264b9166dc373c41bde4873d164c4e77a82903ccfa1956a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c840a13b3b6b5ca2264b9166dc373c41bde4873d164c4e77a82903ccfa1956a2->enter($__internal_c840a13b3b6b5ca2264b9166dc373c41bde4873d164c4e77a82903ccfa1956a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-schema/test/tests.js"));

        // line 1
        echo "var assert = require('assert');
var vows = require('vows');
var path = require('path');
var fs = require('fs');

var validate = require('../lib/validate').validate;


var revision = 'draft-03';
var schemaRoot = path.join(__dirname, '..', revision);
var schemaNames = ['schema', 'hyper-schema', 'links', 'json-ref' ];
var schemas = {};

schemaNames.forEach(function(name) {
    var file = path.join(schemaRoot, name);
    schemas[name] = loadSchema(file);
});

schemaNames.forEach(function(name) {
    var s, n = name+'-nsd', f = path.join(schemaRoot, name);
    schemas[n] = loadSchema(f);
    s = schemas[n];
    delete s['\$schema'];
});

function loadSchema(path) {
    var data = fs.readFileSync(path, 'utf-8');
    var schema = JSON.parse(data);
    return schema;
}

function resultIsValid() {
    return function(result) {
        assert.isObject(result);
        //assert.isBoolean(result.valid);
        assert.equal(typeof(result.valid), 'boolean');
        assert.isArray(result.errors);
        for (var i = 0; i < result.errors.length; i++) {
            assert.notEqual(result.errors[i], null, 'errors['+i+'] is null');
        }
    }
}

function assertValidates(doc, schema) {
    var context = {};

    context[': validate('+doc+', '+schema+')'] = {
        topic: validate(schemas[doc], schemas[schema]),
        'returns valid result': resultIsValid(),
        'with valid=true': function(result) { assert.equal(result.valid, true); },
        'and no errors':   function(result) {
            // XXX work-around for bug in vows: [null] chokes it
            if (result.errors[0] == null) assert.fail('(errors contains null)');
            assert.length(result.errors, 0);
        }
    };

    return context;
}

function assertSelfValidates(doc) {
    var context = {};

    context[': validate('+doc+')'] = {
        topic: validate(schemas[doc]),
        'returns valid result': resultIsValid(),
        'with valid=true': function(result) { assert.equal(result.valid, true); },
        'and no errors':   function(result) { assert.length(result.errors, 0); }
    };

    return context;
}

var suite = vows.describe('JSON Schema').addBatch({
    'Core-NSD self-validates': assertSelfValidates('schema-nsd'),
    'Core-NSD/Core-NSD': assertValidates('schema-nsd', 'schema-nsd'),
    'Core-NSD/Core': assertValidates('schema-nsd', 'schema'),

    'Core self-validates': assertSelfValidates('schema'),
    'Core/Core': assertValidates('schema', 'schema'),

    'Hyper-NSD self-validates': assertSelfValidates('hyper-schema-nsd'),
    'Hyper self-validates': assertSelfValidates('hyper-schema'),
    'Hyper/Hyper': assertValidates('hyper-schema', 'hyper-schema'),
    'Hyper/Core': assertValidates('hyper-schema', 'schema'),

    'Links-NSD self-validates': assertSelfValidates('links-nsd'),
    'Links self-validates': assertSelfValidates('links'),
    'Links/Hyper': assertValidates('links', 'hyper-schema'),
    'Links/Core': assertValidates('links', 'schema'),

    'Json-Ref self-validates': assertSelfValidates('json-ref'),
    'Json-Ref/Hyper': assertValidates('json-ref', 'hyper-schema'),
    'Json-Ref/Core': assertValidates('json-ref', 'schema')
}).export(module);
";
        
        $__internal_c840a13b3b6b5ca2264b9166dc373c41bde4873d164c4e77a82903ccfa1956a2->leave($__internal_c840a13b3b6b5ca2264b9166dc373c41bde4873d164c4e77a82903ccfa1956a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-schema/test/tests.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assert = require('assert');
var vows = require('vows');
var path = require('path');
var fs = require('fs');

var validate = require('../lib/validate').validate;


var revision = 'draft-03';
var schemaRoot = path.join(__dirname, '..', revision);
var schemaNames = ['schema', 'hyper-schema', 'links', 'json-ref' ];
var schemas = {};

schemaNames.forEach(function(name) {
    var file = path.join(schemaRoot, name);
    schemas[name] = loadSchema(file);
});

schemaNames.forEach(function(name) {
    var s, n = name+'-nsd', f = path.join(schemaRoot, name);
    schemas[n] = loadSchema(f);
    s = schemas[n];
    delete s['\$schema'];
});

function loadSchema(path) {
    var data = fs.readFileSync(path, 'utf-8');
    var schema = JSON.parse(data);
    return schema;
}

function resultIsValid() {
    return function(result) {
        assert.isObject(result);
        //assert.isBoolean(result.valid);
        assert.equal(typeof(result.valid), 'boolean');
        assert.isArray(result.errors);
        for (var i = 0; i < result.errors.length; i++) {
            assert.notEqual(result.errors[i], null, 'errors['+i+'] is null');
        }
    }
}

function assertValidates(doc, schema) {
    var context = {};

    context[': validate('+doc+', '+schema+')'] = {
        topic: validate(schemas[doc], schemas[schema]),
        'returns valid result': resultIsValid(),
        'with valid=true': function(result) { assert.equal(result.valid, true); },
        'and no errors':   function(result) {
            // XXX work-around for bug in vows: [null] chokes it
            if (result.errors[0] == null) assert.fail('(errors contains null)');
            assert.length(result.errors, 0);
        }
    };

    return context;
}

function assertSelfValidates(doc) {
    var context = {};

    context[': validate('+doc+')'] = {
        topic: validate(schemas[doc]),
        'returns valid result': resultIsValid(),
        'with valid=true': function(result) { assert.equal(result.valid, true); },
        'and no errors':   function(result) { assert.length(result.errors, 0); }
    };

    return context;
}

var suite = vows.describe('JSON Schema').addBatch({
    'Core-NSD self-validates': assertSelfValidates('schema-nsd'),
    'Core-NSD/Core-NSD': assertValidates('schema-nsd', 'schema-nsd'),
    'Core-NSD/Core': assertValidates('schema-nsd', 'schema'),

    'Core self-validates': assertSelfValidates('schema'),
    'Core/Core': assertValidates('schema', 'schema'),

    'Hyper-NSD self-validates': assertSelfValidates('hyper-schema-nsd'),
    'Hyper self-validates': assertSelfValidates('hyper-schema'),
    'Hyper/Hyper': assertValidates('hyper-schema', 'hyper-schema'),
    'Hyper/Core': assertValidates('hyper-schema', 'schema'),

    'Links-NSD self-validates': assertSelfValidates('links-nsd'),
    'Links self-validates': assertSelfValidates('links'),
    'Links/Hyper': assertValidates('links', 'hyper-schema'),
    'Links/Core': assertValidates('links', 'schema'),

    'Json-Ref self-validates': assertSelfValidates('json-ref'),
    'Json-Ref/Hyper': assertValidates('json-ref', 'hyper-schema'),
    'Json-Ref/Core': assertValidates('json-ref', 'schema')
}).export(module);
", "node_modules/json-schema/test/tests.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-schema/test/tests.js");
    }
}
