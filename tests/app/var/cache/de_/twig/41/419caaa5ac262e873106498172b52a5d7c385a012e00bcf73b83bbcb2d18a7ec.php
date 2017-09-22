<?php

/* node_modules/https-browserify/readme.markdown */
class __TwigTemplate_f9410676a3f11627d21bfe9dda75b992603c2d24fa13091568a9e64c7cdbc60d extends Twig_Template
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
        $__internal_28b261c1b31190baa5eb12dde745a0c7ff897830a85e84c09cc92279abd733d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b261c1b31190baa5eb12dde745a0c7ff897830a85e84c09cc92279abd733d8->enter($__internal_28b261c1b31190baa5eb12dde745a0c7ff897830a85e84c09cc92279abd733d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/https-browserify/readme.markdown"));

        // line 1
        echo "# https-browserify

https module compatability for browserify

# example

``` js
var https = require('https-browserify');
var r = https.request('https://github.com');
r.on('request', function (res) {
    console.log(res);
});
```

# methods

The API is the same as the client portion of the
[node core https module](http://nodejs.org/docs/latest/api/https.html).

# license

MIT
";
        
        $__internal_28b261c1b31190baa5eb12dde745a0c7ff897830a85e84c09cc92279abd733d8->leave($__internal_28b261c1b31190baa5eb12dde745a0c7ff897830a85e84c09cc92279abd733d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/https-browserify/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# https-browserify

https module compatability for browserify

# example

``` js
var https = require('https-browserify');
var r = https.request('https://github.com');
r.on('request', function (res) {
    console.log(res);
});
```

# methods

The API is the same as the client portion of the
[node core https module](http://nodejs.org/docs/latest/api/https.html).

# license

MIT
", "node_modules/https-browserify/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/https-browserify/readme.markdown");
    }
}
