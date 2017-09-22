<?php

/* node_modules/foreach/Readme.md */
class __TwigTemplate_d17aa8a035af91b51ea83d9f423a2f014b9f0f9ce239cbb8ace7d926feff7bbb extends Twig_Template
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
        $__internal_de50bced5bc6ae9a357d8e44ea6c3de0beb5170b46dd7d33261f5bedd2f2d1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de50bced5bc6ae9a357d8e44ea6c3de0beb5170b46dd7d33261f5bedd2f2d1bd->enter($__internal_de50bced5bc6ae9a357d8e44ea6c3de0beb5170b46dd7d33261f5bedd2f2d1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/foreach/Readme.md"));

        // line 1
        echo "
# foreach

Iterate over the key value pairs of either an array-like object or a dictionary like object.

[![browser support][1]][2]

## API

### foreach(object, function, [context])

```js
var each = require('foreach');

each([1,2,3], function (value, key, array) {
    // value === 1, 2, 3
    // key === 0, 1, 2
    // array === [1, 2, 3]
});

each({0:1,1:2,2:3}, function (value, key, object) {
    // value === 1, 2, 3
    // key === 0, 1, 2
    // object === {0:1,1:2,2:3}
});
```

[1]: https://ci.testling.com/manuelstofer/foreach.png
[2]: https://ci.testling.com/manuelstofer/foreach

";
        
        $__internal_de50bced5bc6ae9a357d8e44ea6c3de0beb5170b46dd7d33261f5bedd2f2d1bd->leave($__internal_de50bced5bc6ae9a357d8e44ea6c3de0beb5170b46dd7d33261f5bedd2f2d1bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/foreach/Readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
# foreach

Iterate over the key value pairs of either an array-like object or a dictionary like object.

[![browser support][1]][2]

## API

### foreach(object, function, [context])

```js
var each = require('foreach');

each([1,2,3], function (value, key, array) {
    // value === 1, 2, 3
    // key === 0, 1, 2
    // array === [1, 2, 3]
});

each({0:1,1:2,2:3}, function (value, key, object) {
    // value === 1, 2, 3
    // key === 0, 1, 2
    // object === {0:1,1:2,2:3}
});
```

[1]: https://ci.testling.com/manuelstofer/foreach.png
[2]: https://ci.testling.com/manuelstofer/foreach

", "node_modules/foreach/Readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/foreach/Readme.md");
    }
}
