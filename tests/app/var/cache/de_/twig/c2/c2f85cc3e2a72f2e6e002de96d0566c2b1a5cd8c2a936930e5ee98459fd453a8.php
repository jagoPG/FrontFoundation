<?php

/* node_modules/abbrev/README.md */
class __TwigTemplate_ebb7a95a8d1ba51efa0edb63f5e315df964a81d0041708bb68c5403293571a66 extends Twig_Template
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
        $__internal_dc860658e79de8fb0aa9e72bf3821ea2fc96b43fc1dac37402811e399269f0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc860658e79de8fb0aa9e72bf3821ea2fc96b43fc1dac37402811e399269f0f1->enter($__internal_dc860658e79de8fb0aa9e72bf3821ea2fc96b43fc1dac37402811e399269f0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/abbrev/README.md"));

        // line 1
        echo "# abbrev-js

Just like [ruby's Abbrev](http://apidock.com/ruby/Abbrev).

Usage:

    var abbrev = require(\"abbrev\");
    abbrev(\"foo\", \"fool\", \"folding\", \"flop\");
    
    // returns:
    { fl: 'flop'
    , flo: 'flop'
    , flop: 'flop'
    , fol: 'folding'
    , fold: 'folding'
    , foldi: 'folding'
    , foldin: 'folding'
    , folding: 'folding'
    , foo: 'foo'
    , fool: 'fool'
    }

This is handy for command-line scripts, or other cases where you want to be able to accept shorthands.
";
        
        $__internal_dc860658e79de8fb0aa9e72bf3821ea2fc96b43fc1dac37402811e399269f0f1->leave($__internal_dc860658e79de8fb0aa9e72bf3821ea2fc96b43fc1dac37402811e399269f0f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/abbrev/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# abbrev-js

Just like [ruby's Abbrev](http://apidock.com/ruby/Abbrev).

Usage:

    var abbrev = require(\"abbrev\");
    abbrev(\"foo\", \"fool\", \"folding\", \"flop\");
    
    // returns:
    { fl: 'flop'
    , flo: 'flop'
    , flop: 'flop'
    , fol: 'folding'
    , fold: 'folding'
    , foldi: 'folding'
    , foldin: 'folding'
    , folding: 'folding'
    , foo: 'foo'
    , fool: 'fool'
    }

This is handy for command-line scripts, or other cases where you want to be able to accept shorthands.
", "node_modules/abbrev/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/abbrev/README.md");
    }
}
