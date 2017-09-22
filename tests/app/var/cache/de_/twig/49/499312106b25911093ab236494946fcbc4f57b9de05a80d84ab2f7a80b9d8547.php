<?php

/* node_modules/constants-browserify/README.md */
class __TwigTemplate_06276870430a1943c212ac3fb96cbd7ee89935634775ed3d0aa672651dbabb49 extends Twig_Template
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
        $__internal_9755b54a06c89b941297e2a6755fdb481bc47c711e084e5d2406b37d93849885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9755b54a06c89b941297e2a6755fdb481bc47c711e084e5d2406b37d93849885->enter($__internal_9755b54a06c89b941297e2a6755fdb481bc47c711e084e5d2406b37d93849885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/constants-browserify/README.md"));

        // line 1
        echo "
# constants-browserify

Node's `constants` module for the browser.

[![downloads](https://img.shields.io/npm/dm/constants-browserify.svg)](https://www.npmjs.org/package/constants-browserify)

## Usage

To use with browserify cli:

```bash
\$ browserify -r constants:constants-browserify script.js
```

To use with browserify api:

```js
browserify()
  .require('constants-browserify', { expose: 'constants' })
  .add(__dirname + '/script.js')
  .bundle()
  // ...
```

## Installation

With [npm](http://npmjs.org) do

```bash
\$ npm install constants-browserify
```

## License

Copyright (c) 2013 Julian Gruber &lt;julian@juliangruber.com&gt;

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the \"Software\"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
";
        
        $__internal_9755b54a06c89b941297e2a6755fdb481bc47c711e084e5d2406b37d93849885->leave($__internal_9755b54a06c89b941297e2a6755fdb481bc47c711e084e5d2406b37d93849885_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/constants-browserify/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
# constants-browserify

Node's `constants` module for the browser.

[![downloads](https://img.shields.io/npm/dm/constants-browserify.svg)](https://www.npmjs.org/package/constants-browserify)

## Usage

To use with browserify cli:

```bash
\$ browserify -r constants:constants-browserify script.js
```

To use with browserify api:

```js
browserify()
  .require('constants-browserify', { expose: 'constants' })
  .add(__dirname + '/script.js')
  .bundle()
  // ...
```

## Installation

With [npm](http://npmjs.org) do

```bash
\$ npm install constants-browserify
```

## License

Copyright (c) 2013 Julian Gruber &lt;julian@juliangruber.com&gt;

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the \"Software\"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
", "node_modules/constants-browserify/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/constants-browserify/README.md");
    }
}
