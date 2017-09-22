<?php

/* node_modules/minimist/test/bool.js */
class __TwigTemplate_218a3f2dd042fe6af40a4c833402636c1239de69d4c5cab2b07d3bbe8aa8c086 extends Twig_Template
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
        $__internal_87a70a989784093a8945e6369a5dfa5ea375d95e6164b3585be935fb3505b18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a70a989784093a8945e6369a5dfa5ea375d95e6164b3585be935fb3505b18b->enter($__internal_87a70a989784093a8945e6369a5dfa5ea375d95e6164b3585be935fb3505b18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/bool.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('flag boolean default false', function (t) {
    var argv = parse(['moo'], {
        boolean: ['t', 'verbose'],
        default: { verbose: false, t: false }
    });
    
    t.deepEqual(argv, {
        verbose: false,
        t: false,
        _: ['moo']
    });
    
    t.deepEqual(typeof argv.verbose, 'boolean');
    t.deepEqual(typeof argv.t, 'boolean');
    t.end();

});

test('boolean groups', function (t) {
    var argv = parse([ '-x', '-z', 'one', 'two', 'three' ], {
        boolean: ['x','y','z']
    });
    
    t.deepEqual(argv, {
        x : true,
        y : false,
        z : true,
        _ : [ 'one', 'two', 'three' ]
    });
    
    t.deepEqual(typeof argv.x, 'boolean');
    t.deepEqual(typeof argv.y, 'boolean');
    t.deepEqual(typeof argv.z, 'boolean');
    t.end();
});
test('boolean and alias with chainable api', function (t) {
    var aliased = [ '-h', 'derp' ];
    var regular = [ '--herp',  'derp' ];
    var opts = {
        herp: { alias: 'h', boolean: true }
    };
    var aliasedArgv = parse(aliased, {
        boolean: 'herp',
        alias: { h: 'herp' }
    });
    var propertyArgv = parse(regular, {
        boolean: 'herp',
        alias: { h: 'herp' }
    });
    var expected = {
        herp: true,
        h: true,
        '_': [ 'derp' ]
    };
    
    t.same(aliasedArgv, expected);
    t.same(propertyArgv, expected); 
    t.end();
});

test('boolean and alias with options hash', function (t) {
    var aliased = [ '-h', 'derp' ];
    var regular = [ '--herp', 'derp' ];
    var opts = {
        alias: { 'h': 'herp' },
        boolean: 'herp'
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);
    var expected = {
        herp: true,
        h: true,
        '_': [ 'derp' ]
    };
    t.same(aliasedArgv, expected);
    t.same(propertyArgv, expected);
    t.end();
});

test('boolean and alias array with options hash', function (t) {
    var aliased = [ '-h', 'derp' ];
    var regular = [ '--herp', 'derp' ];
    var alt = [ '--harp', 'derp' ];
    var opts = {
        alias: { 'h': ['herp', 'harp'] },
        boolean: 'h'
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);
    var altPropertyArgv = parse(alt, opts);
    var expected = {
        harp: true,
        herp: true,
        h: true,
        '_': [ 'derp' ]
    };
    t.same(aliasedArgv, expected);
    t.same(propertyArgv, expected);
    t.same(altPropertyArgv, expected);
    t.end();
});

test('boolean and alias using explicit true', function (t) {
    var aliased = [ '-h', 'true' ];
    var regular = [ '--herp',  'true' ];
    var opts = {
        alias: { h: 'herp' },
        boolean: 'h'
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);
    var expected = {
        herp: true,
        h: true,
        '_': [ ]
    };

    t.same(aliasedArgv, expected);
    t.same(propertyArgv, expected); 
    t.end();
});

// regression, see https://github.com/substack/node-optimist/issues/71
test('boolean and --x=true', function(t) {
    var parsed = parse(['--boool', '--other=true'], {
        boolean: 'boool'
    });

    t.same(parsed.boool, true);
    t.same(parsed.other, 'true');

    parsed = parse(['--boool', '--other=false'], {
        boolean: 'boool'
    });
    
    t.same(parsed.boool, true);
    t.same(parsed.other, 'false');
    t.end();
});

test('boolean --boool=true', function (t) {
    var parsed = parse(['--boool=true'], {
        default: {
            boool: false
        },
        boolean: ['boool']
    });

    t.same(parsed.boool, true);
    t.end();
});

test('boolean --boool=false', function (t) {
    var parsed = parse(['--boool=false'], {
        default: {
          boool: true
        },
        boolean: ['boool']
    });

    t.same(parsed.boool, false);
    t.end();
});
";
        
        $__internal_87a70a989784093a8945e6369a5dfa5ea375d95e6164b3585be935fb3505b18b->leave($__internal_87a70a989784093a8945e6369a5dfa5ea375d95e6164b3585be935fb3505b18b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/bool.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('flag boolean default false', function (t) {
    var argv = parse(['moo'], {
        boolean: ['t', 'verbose'],
        default: { verbose: false, t: false }
    });
    
    t.deepEqual(argv, {
        verbose: false,
        t: false,
        _: ['moo']
    });
    
    t.deepEqual(typeof argv.verbose, 'boolean');
    t.deepEqual(typeof argv.t, 'boolean');
    t.end();

});

test('boolean groups', function (t) {
    var argv = parse([ '-x', '-z', 'one', 'two', 'three' ], {
        boolean: ['x','y','z']
    });
    
    t.deepEqual(argv, {
        x : true,
        y : false,
        z : true,
        _ : [ 'one', 'two', 'three' ]
    });
    
    t.deepEqual(typeof argv.x, 'boolean');
    t.deepEqual(typeof argv.y, 'boolean');
    t.deepEqual(typeof argv.z, 'boolean');
    t.end();
});
test('boolean and alias with chainable api', function (t) {
    var aliased = [ '-h', 'derp' ];
    var regular = [ '--herp',  'derp' ];
    var opts = {
        herp: { alias: 'h', boolean: true }
    };
    var aliasedArgv = parse(aliased, {
        boolean: 'herp',
        alias: { h: 'herp' }
    });
    var propertyArgv = parse(regular, {
        boolean: 'herp',
        alias: { h: 'herp' }
    });
    var expected = {
        herp: true,
        h: true,
        '_': [ 'derp' ]
    };
    
    t.same(aliasedArgv, expected);
    t.same(propertyArgv, expected); 
    t.end();
});

test('boolean and alias with options hash', function (t) {
    var aliased = [ '-h', 'derp' ];
    var regular = [ '--herp', 'derp' ];
    var opts = {
        alias: { 'h': 'herp' },
        boolean: 'herp'
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);
    var expected = {
        herp: true,
        h: true,
        '_': [ 'derp' ]
    };
    t.same(aliasedArgv, expected);
    t.same(propertyArgv, expected);
    t.end();
});

test('boolean and alias array with options hash', function (t) {
    var aliased = [ '-h', 'derp' ];
    var regular = [ '--herp', 'derp' ];
    var alt = [ '--harp', 'derp' ];
    var opts = {
        alias: { 'h': ['herp', 'harp'] },
        boolean: 'h'
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);
    var altPropertyArgv = parse(alt, opts);
    var expected = {
        harp: true,
        herp: true,
        h: true,
        '_': [ 'derp' ]
    };
    t.same(aliasedArgv, expected);
    t.same(propertyArgv, expected);
    t.same(altPropertyArgv, expected);
    t.end();
});

test('boolean and alias using explicit true', function (t) {
    var aliased = [ '-h', 'true' ];
    var regular = [ '--herp',  'true' ];
    var opts = {
        alias: { h: 'herp' },
        boolean: 'h'
    };
    var aliasedArgv = parse(aliased, opts);
    var propertyArgv = parse(regular, opts);
    var expected = {
        herp: true,
        h: true,
        '_': [ ]
    };

    t.same(aliasedArgv, expected);
    t.same(propertyArgv, expected); 
    t.end();
});

// regression, see https://github.com/substack/node-optimist/issues/71
test('boolean and --x=true', function(t) {
    var parsed = parse(['--boool', '--other=true'], {
        boolean: 'boool'
    });

    t.same(parsed.boool, true);
    t.same(parsed.other, 'true');

    parsed = parse(['--boool', '--other=false'], {
        boolean: 'boool'
    });
    
    t.same(parsed.boool, true);
    t.same(parsed.other, 'false');
    t.end();
});

test('boolean --boool=true', function (t) {
    var parsed = parse(['--boool=true'], {
        default: {
            boool: false
        },
        boolean: ['boool']
    });

    t.same(parsed.boool, true);
    t.end();
});

test('boolean --boool=false', function (t) {
    var parsed = parse(['--boool=false'], {
        default: {
          boool: true
        },
        boolean: ['boool']
    });

    t.same(parsed.boool, false);
    t.end();
});
", "node_modules/minimist/test/bool.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/bool.js");
    }
}
