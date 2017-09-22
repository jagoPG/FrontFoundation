<?php

/* node_modules/parse-json/readme.md */
class __TwigTemplate_37472f1dd86e21db026ef99bd4865d3411e62dbc428609ddf1ce86fce9cedfd5 extends Twig_Template
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
        $__internal_6b13a9b8c3fac08b010408c5200d9d45c9a57b1c95b50da4e584441123da81c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b13a9b8c3fac08b010408c5200d9d45c9a57b1c95b50da4e584441123da81c9->enter($__internal_6b13a9b8c3fac08b010408c5200d9d45c9a57b1c95b50da4e584441123da81c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parse-json/readme.md"));

        // line 1
        echo "# parse-json [![Build Status](https://travis-ci.org/sindresorhus/parse-json.svg?branch=master)](https://travis-ci.org/sindresorhus/parse-json)

> Parse JSON with more helpful errors


## Install

```
\$ npm install --save parse-json
```


## Usage

```js
var parseJson = require('parse-json');
var json = '{\\n\\t\"foo\": true,\\n}';


JSON.parse(json);
/*
undefined:3
}
^
SyntaxError: Unexpected token }
*/


parseJson(json);
/*
JSONError: Trailing comma in object at 3:1
}
^
*/


parseJson(json, 'foo.json');
/*
JSONError: Trailing comma in object at 3:1 in foo.json
}
^
*/


// you can also add the filename at a later point
try {
\tparseJson(json);
} catch (err) {
\terr.fileName = 'foo.json';
\tthrow err;
}
/*
JSONError: Trailing comma in object at 3:1 in foo.json
}
^
*/
```

## API

### parseJson(input, [reviver], [filename])

#### input

Type: `string`

#### reviver

Type: `function`

Prescribes how the value originally produced by parsing is transformed, before being returned. See [`JSON.parse` docs](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON/parse#Using_the_reviver_parameter
) for more.

#### filename

Type: `string`

Filename displayed in the error message.


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_6b13a9b8c3fac08b010408c5200d9d45c9a57b1c95b50da4e584441123da81c9->leave($__internal_6b13a9b8c3fac08b010408c5200d9d45c9a57b1c95b50da4e584441123da81c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parse-json/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# parse-json [![Build Status](https://travis-ci.org/sindresorhus/parse-json.svg?branch=master)](https://travis-ci.org/sindresorhus/parse-json)

> Parse JSON with more helpful errors


## Install

```
\$ npm install --save parse-json
```


## Usage

```js
var parseJson = require('parse-json');
var json = '{\\n\\t\"foo\": true,\\n}';


JSON.parse(json);
/*
undefined:3
}
^
SyntaxError: Unexpected token }
*/


parseJson(json);
/*
JSONError: Trailing comma in object at 3:1
}
^
*/


parseJson(json, 'foo.json');
/*
JSONError: Trailing comma in object at 3:1 in foo.json
}
^
*/


// you can also add the filename at a later point
try {
\tparseJson(json);
} catch (err) {
\terr.fileName = 'foo.json';
\tthrow err;
}
/*
JSONError: Trailing comma in object at 3:1 in foo.json
}
^
*/
```

## API

### parseJson(input, [reviver], [filename])

#### input

Type: `string`

#### reviver

Type: `function`

Prescribes how the value originally produced by parsing is transformed, before being returned. See [`JSON.parse` docs](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON/parse#Using_the_reviver_parameter
) for more.

#### filename

Type: `string`

Filename displayed in the error message.


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/parse-json/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parse-json/readme.md");
    }
}
