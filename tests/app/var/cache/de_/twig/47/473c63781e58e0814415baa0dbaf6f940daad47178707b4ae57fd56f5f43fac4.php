<?php

/* node_modules/minimalistic-crypto-utils/test/utils-test.js */
class __TwigTemplate_cecc4df2263a299769753728b1a111219bc474320384bd5e821dd9a23e47c0e5 extends Twig_Template
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
        $__internal_9f462c8fe85b3d80682e35ec6f48c678b2ca6fd672477d17a1fb9afb46a542df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f462c8fe85b3d80682e35ec6f48c678b2ca6fd672477d17a1fb9afb46a542df->enter($__internal_9f462c8fe85b3d80682e35ec6f48c678b2ca6fd672477d17a1fb9afb46a542df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimalistic-crypto-utils/test/utils-test.js"));

        // line 1
        echo "'use strict';

const assert = require('assert');
const utils = require('../');

describe('utils', () => {
  it('should convert to array', () => {
    assert.deepEqual(utils.toArray('1234', 'hex'), [ 0x12, 0x34 ]);
    assert.deepEqual(utils.toArray('1234'), [ 49, 50, 51, 52 ]);
    assert.deepEqual(utils.toArray('1234', 'utf8'), [ 49, 50, 51, 52 ]);
    assert.deepEqual(utils.toArray('\\u1234234'), [ 18, 52, 50, 51, 52 ]);
    assert.deepEqual(utils.toArray([ 1, 2, 3, 4 ]), [ 1, 2, 3, 4 ]);
  });

  it('should zero pad byte to hex', () => {
    assert.equal(utils.zero2('0'), '00');
    assert.equal(utils.zero2('01'), '01');
  });

  it('should convert to hex', () => {
    assert.equal(utils.toHex([ 0, 1, 2, 3 ]), '00010203');
  });

  it('should encode', () => {
    assert.deepEqual(utils.encode([ 0, 1, 2, 3 ]), [ 0, 1, 2, 3 ]);
    assert.deepEqual(utils.encode([ 0, 1, 2, 3 ], 'hex'), '00010203');
  });
});
";
        
        $__internal_9f462c8fe85b3d80682e35ec6f48c678b2ca6fd672477d17a1fb9afb46a542df->leave($__internal_9f462c8fe85b3d80682e35ec6f48c678b2ca6fd672477d17a1fb9afb46a542df_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimalistic-crypto-utils/test/utils-test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

const assert = require('assert');
const utils = require('../');

describe('utils', () => {
  it('should convert to array', () => {
    assert.deepEqual(utils.toArray('1234', 'hex'), [ 0x12, 0x34 ]);
    assert.deepEqual(utils.toArray('1234'), [ 49, 50, 51, 52 ]);
    assert.deepEqual(utils.toArray('1234', 'utf8'), [ 49, 50, 51, 52 ]);
    assert.deepEqual(utils.toArray('\\u1234234'), [ 18, 52, 50, 51, 52 ]);
    assert.deepEqual(utils.toArray([ 1, 2, 3, 4 ]), [ 1, 2, 3, 4 ]);
  });

  it('should zero pad byte to hex', () => {
    assert.equal(utils.zero2('0'), '00');
    assert.equal(utils.zero2('01'), '01');
  });

  it('should convert to hex', () => {
    assert.equal(utils.toHex([ 0, 1, 2, 3 ]), '00010203');
  });

  it('should encode', () => {
    assert.deepEqual(utils.encode([ 0, 1, 2, 3 ]), [ 0, 1, 2, 3 ]);
    assert.deepEqual(utils.encode([ 0, 1, 2, 3 ], 'hex'), '00010203');
  });
});
", "node_modules/minimalistic-crypto-utils/test/utils-test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimalistic-crypto-utils/test/utils-test.js");
    }
}
