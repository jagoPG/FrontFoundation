<?php

/* node_modules/nopt/examples/my-program.js */
class __TwigTemplate_bd5cf005607fdb41543d37a1f95563c38e1917ce7c306ca986d712b401cad1f6 extends Twig_Template
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
        $__internal_ad63adb6b9a1249101d1b67023183c613996f7238915357057c18522f6170ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad63adb6b9a1249101d1b67023183c613996f7238915357057c18522f6170ba6->enter($__internal_ad63adb6b9a1249101d1b67023183c613996f7238915357057c18522f6170ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nopt/examples/my-program.js"));

        // line 1
        echo "#!/usr/bin/env node

//process.env.DEBUG_NOPT = 1

// my-program.js
var nopt = require(\"../lib/nopt\")
  , Stream = require(\"stream\").Stream
  , path = require(\"path\")
  , knownOpts = { \"foo\" : [String, null]
                , \"bar\" : [Stream, Number]
                , \"baz\" : path
                , \"bloo\" : [ \"big\", \"medium\", \"small\" ]
                , \"flag\" : Boolean
                , \"pick\" : Boolean
                }
  , shortHands = { \"foofoo\" : [\"--foo\", \"Mr. Foo\"]
                 , \"b7\" : [\"--bar\", \"7\"]
                 , \"m\" : [\"--bloo\", \"medium\"]
                 , \"p\" : [\"--pick\"]
                 , \"f\" : [\"--flag\", \"true\"]
                 , \"g\" : [\"--flag\"]
                 , \"s\" : \"--flag\"
                 }
             // everything is optional.
             // knownOpts and shorthands default to {}
             // arg list defaults to process.argv
             // slice defaults to 2
  , parsed = nopt(knownOpts, shortHands, process.argv, 2)

console.log(\"parsed =\\n\"+ require(\"util\").inspect(parsed))
";
        
        $__internal_ad63adb6b9a1249101d1b67023183c613996f7238915357057c18522f6170ba6->leave($__internal_ad63adb6b9a1249101d1b67023183c613996f7238915357057c18522f6170ba6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nopt/examples/my-program.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

//process.env.DEBUG_NOPT = 1

// my-program.js
var nopt = require(\"../lib/nopt\")
  , Stream = require(\"stream\").Stream
  , path = require(\"path\")
  , knownOpts = { \"foo\" : [String, null]
                , \"bar\" : [Stream, Number]
                , \"baz\" : path
                , \"bloo\" : [ \"big\", \"medium\", \"small\" ]
                , \"flag\" : Boolean
                , \"pick\" : Boolean
                }
  , shortHands = { \"foofoo\" : [\"--foo\", \"Mr. Foo\"]
                 , \"b7\" : [\"--bar\", \"7\"]
                 , \"m\" : [\"--bloo\", \"medium\"]
                 , \"p\" : [\"--pick\"]
                 , \"f\" : [\"--flag\", \"true\"]
                 , \"g\" : [\"--flag\"]
                 , \"s\" : \"--flag\"
                 }
             // everything is optional.
             // knownOpts and shorthands default to {}
             // arg list defaults to process.argv
             // slice defaults to 2
  , parsed = nopt(knownOpts, shortHands, process.argv, 2)

console.log(\"parsed =\\n\"+ require(\"util\").inspect(parsed))
", "node_modules/nopt/examples/my-program.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nopt/examples/my-program.js");
    }
}
