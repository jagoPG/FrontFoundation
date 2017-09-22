<?php

/* node_modules/json5/lib/require.js */
class __TwigTemplate_0b1a54eee17ec6d0deeb6f99ec00ba5061715582bf8f3b8bbad5694c24168768 extends Twig_Template
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
        $__internal_6554982cce20a8f2d8eeceddd5c689fc4f48c7f8851d020e4b20bd25e8c2d9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6554982cce20a8f2d8eeceddd5c689fc4f48c7f8851d020e4b20bd25e8c2d9d4->enter($__internal_6554982cce20a8f2d8eeceddd5c689fc4f48c7f8851d020e4b20bd25e8c2d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json5/lib/require.js"));

        // line 1
        echo "// require.js
// Node.js only: adds a require() hook for .json5 files, just like the native
// hook for .json files.
//
// Usage:
// require('json5/require');
// require('./foo');    // will check foo.json5 after foo.js, foo.json, etc.
// require('./bar.json5');

var FS = require('fs');
var JSON5 = require('./json5');

// Modeled off of (v0.6.18 link; check latest too):
// https://github.com/joyent/node/blob/v0.6.18/lib/module.js#L468-L472
require.extensions['.json5'] = function (module, filename) {
    var content = FS.readFileSync(filename, 'utf8');
    module.exports = JSON5.parse(content);
};
";
        
        $__internal_6554982cce20a8f2d8eeceddd5c689fc4f48c7f8851d020e4b20bd25e8c2d9d4->leave($__internal_6554982cce20a8f2d8eeceddd5c689fc4f48c7f8851d020e4b20bd25e8c2d9d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json5/lib/require.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// require.js
// Node.js only: adds a require() hook for .json5 files, just like the native
// hook for .json files.
//
// Usage:
// require('json5/require');
// require('./foo');    // will check foo.json5 after foo.js, foo.json, etc.
// require('./bar.json5');

var FS = require('fs');
var JSON5 = require('./json5');

// Modeled off of (v0.6.18 link; check latest too):
// https://github.com/joyent/node/blob/v0.6.18/lib/module.js#L468-L472
require.extensions['.json5'] = function (module, filename) {
    var content = FS.readFileSync(filename, 'utf8');
    module.exports = JSON5.parse(content);
};
", "node_modules/json5/lib/require.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json5/lib/require.js");
    }
}
