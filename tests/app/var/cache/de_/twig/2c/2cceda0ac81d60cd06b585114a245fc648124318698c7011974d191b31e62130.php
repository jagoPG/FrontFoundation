<?php

/* node_modules/fsevents/node_modules/json-schema/test/tests.js */
class __TwigTemplate_62ce585a903d85817a905778b58052e3b288bdf848fd7712b43714c2f7cc017d extends Twig_Template
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
        $__internal_82a26ef64dee377e6bfc421da48ffb7d718491cd94041017151626df831c6540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a26ef64dee377e6bfc421da48ffb7d718491cd94041017151626df831c6540->enter($__internal_82a26ef64dee377e6bfc421da48ffb7d718491cd94041017151626df831c6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-schema/test/tests.js"));

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
        
        $__internal_82a26ef64dee377e6bfc421da48ffb7d718491cd94041017151626df831c6540->leave($__internal_82a26ef64dee377e6bfc421da48ffb7d718491cd94041017151626df831c6540_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-schema/test/tests.js";
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
", "node_modules/fsevents/node_modules/json-schema/test/tests.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-schema/test/tests.js");
    }
}
