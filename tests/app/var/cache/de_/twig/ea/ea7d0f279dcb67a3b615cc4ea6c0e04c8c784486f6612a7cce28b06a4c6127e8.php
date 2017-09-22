<?php

/* node_modules/nopt/bin/nopt.js */
class __TwigTemplate_46b770b353c80e17b1989d75c7319581642bb76a56d9eaf64b4097b1ec48c416 extends Twig_Template
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
        $__internal_56657404031afc532f48e954582b1b0e7db54b9d33492e8d1967556bee34d35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56657404031afc532f48e954582b1b0e7db54b9d33492e8d1967556bee34d35a->enter($__internal_56657404031afc532f48e954582b1b0e7db54b9d33492e8d1967556bee34d35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nopt/bin/nopt.js"));

        // line 1
        echo "#!/usr/bin/env node
var nopt = require(\"../lib/nopt\")
  , path = require(\"path\")
  , types = { num: Number
            , bool: Boolean
            , help: Boolean
            , list: Array
            , \"num-list\": [Number, Array]
            , \"str-list\": [String, Array]
            , \"bool-list\": [Boolean, Array]
            , str: String
            , clear: Boolean
            , config: Boolean
            , length: Number
            , file: path
            }
  , shorthands = { s: [ \"--str\", \"astring\" ]
                 , b: [ \"--bool\" ]
                 , nb: [ \"--no-bool\" ]
                 , tft: [ \"--bool-list\", \"--no-bool-list\", \"--bool-list\", \"true\" ]
                 , \"?\": [\"--help\"]
                 , h: [\"--help\"]
                 , H: [\"--help\"]
                 , n: [ \"--num\", \"125\" ]
                 , c: [\"--config\"]
                 , l: [\"--length\"]
                 , f: [\"--file\"]
                 }
  , parsed = nopt( types
                 , shorthands
                 , process.argv
                 , 2 )

console.log(\"parsed\", parsed)

if (parsed.help) {
  console.log(\"\")
  console.log(\"nopt cli tester\")
  console.log(\"\")
  console.log(\"types\")
  console.log(Object.keys(types).map(function M (t) {
    var type = types[t]
    if (Array.isArray(type)) {
      return [t, type.map(function (type) { return type.name })]
    }
    return [t, type && type.name]
  }).reduce(function (s, i) {
    s[i[0]] = i[1]
    return s
  }, {}))
  console.log(\"\")
  console.log(\"shorthands\")
  console.log(shorthands)
}
";
        
        $__internal_56657404031afc532f48e954582b1b0e7db54b9d33492e8d1967556bee34d35a->leave($__internal_56657404031afc532f48e954582b1b0e7db54b9d33492e8d1967556bee34d35a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nopt/bin/nopt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
var nopt = require(\"../lib/nopt\")
  , path = require(\"path\")
  , types = { num: Number
            , bool: Boolean
            , help: Boolean
            , list: Array
            , \"num-list\": [Number, Array]
            , \"str-list\": [String, Array]
            , \"bool-list\": [Boolean, Array]
            , str: String
            , clear: Boolean
            , config: Boolean
            , length: Number
            , file: path
            }
  , shorthands = { s: [ \"--str\", \"astring\" ]
                 , b: [ \"--bool\" ]
                 , nb: [ \"--no-bool\" ]
                 , tft: [ \"--bool-list\", \"--no-bool-list\", \"--bool-list\", \"true\" ]
                 , \"?\": [\"--help\"]
                 , h: [\"--help\"]
                 , H: [\"--help\"]
                 , n: [ \"--num\", \"125\" ]
                 , c: [\"--config\"]
                 , l: [\"--length\"]
                 , f: [\"--file\"]
                 }
  , parsed = nopt( types
                 , shorthands
                 , process.argv
                 , 2 )

console.log(\"parsed\", parsed)

if (parsed.help) {
  console.log(\"\")
  console.log(\"nopt cli tester\")
  console.log(\"\")
  console.log(\"types\")
  console.log(Object.keys(types).map(function M (t) {
    var type = types[t]
    if (Array.isArray(type)) {
      return [t, type.map(function (type) { return type.name })]
    }
    return [t, type && type.name]
  }).reduce(function (s, i) {
    s[i[0]] = i[1]
    return s
  }, {}))
  console.log(\"\")
  console.log(\"shorthands\")
  console.log(shorthands)
}
", "node_modules/nopt/bin/nopt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nopt/bin/nopt.js");
    }
}
