<?php

/* node_modules/spdx-correct/README.md */
class __TwigTemplate_e7aaff5659f14700189df80e5406a49e1246afd2fdaff8a5cf7b90132cf8d7d2 extends Twig_Template
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
        $__internal_dadcc81307d85b87b7ce4554a14ca6ba9c268699e59ad852c300c9e227474579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadcc81307d85b87b7ce4554a14ca6ba9c268699e59ad852c300c9e227474579->enter($__internal_dadcc81307d85b87b7ce4554a14ca6ba9c268699e59ad852c300c9e227474579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/spdx-correct/README.md"));

        // line 1
        echo "```javascript
var correct = require('spdx-correct');
var assert = require('assert');

assert.equal(correct('mit'), 'MIT')

assert.equal(correct('Apache 2'), 'Apache-2.0')

assert(correct('No idea what license') === null)
```
";
        
        $__internal_dadcc81307d85b87b7ce4554a14ca6ba9c268699e59ad852c300c9e227474579->leave($__internal_dadcc81307d85b87b7ce4554a14ca6ba9c268699e59ad852c300c9e227474579_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/spdx-correct/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("```javascript
var correct = require('spdx-correct');
var assert = require('assert');

assert.equal(correct('mit'), 'MIT')

assert.equal(correct('Apache 2'), 'Apache-2.0')

assert(correct('No idea what license') === null)
```
", "node_modules/spdx-correct/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/spdx-correct/README.md");
    }
}
