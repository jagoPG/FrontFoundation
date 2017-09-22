<?php

/* node_modules/fsevents/node_modules/nopt/examples/my-program.js */
class __TwigTemplate_1005e3d4c08ea9f704de1b68c1fd0ea0f9849d15f7627505a84256f1a6af7e04 extends Twig_Template
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
        $__internal_ebe4c898ae894caf3e3ca931f157f3e2d5c1ca545bbbd7b649390dd4b72e1c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe4c898ae894caf3e3ca931f157f3e2d5c1ca545bbbd7b649390dd4b72e1c0f->enter($__internal_ebe4c898ae894caf3e3ca931f157f3e2d5c1ca545bbbd7b649390dd4b72e1c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/nopt/examples/my-program.js"));

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
        
        $__internal_ebe4c898ae894caf3e3ca931f157f3e2d5c1ca545bbbd7b649390dd4b72e1c0f->leave($__internal_ebe4c898ae894caf3e3ca931f157f3e2d5c1ca545bbbd7b649390dd4b72e1c0f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/nopt/examples/my-program.js";
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
", "node_modules/fsevents/node_modules/nopt/examples/my-program.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/nopt/examples/my-program.js");
    }
}
