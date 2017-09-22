<?php

/* node_modules/duplexer/README.md */
class __TwigTemplate_753ec04c23d8b7608a409658fcbc62fdc85687aec6d899ae3162a1d9271a27d3 extends Twig_Template
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
        $__internal_24c5dcdbe40c3948d6a0f21d45c91cd5cb475641a802c9a70c20c868e55b1e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c5dcdbe40c3948d6a0f21d45c91cd5cb475641a802c9a70c20c868e55b1e97->enter($__internal_24c5dcdbe40c3948d6a0f21d45c91cd5cb475641a802c9a70c20c868e55b1e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/duplexer/README.md"));

        // line 1
        echo "# duplexer

[![build status][1]][2] [![dependency status][3]][4]

[![browser support][5]][6]

Creates a duplex stream

Taken from [event-stream][7]

## duplex (writeStream, readStream)

Takes a writable stream and a readable stream and makes them appear as a readable writable stream.

It is assumed that the two streams are connected to each other in some way.

## Example

```js
var grep = cp.exec('grep Stream')

duplex(grep.stdin, grep.stdout)
```

## Installation

`npm install duplexer`

## Tests

`npm test`

## Contributors

 - Dominictarr
 - Raynos
 - samccone

## MIT Licenced

  [1]: https://secure.travis-ci.org/Raynos/duplexer.png
  [2]: https://travis-ci.org/Raynos/duplexer
  [3]: https://david-dm.org/Raynos/duplexer.png
  [4]: https://david-dm.org/Raynos/duplexer
  [5]: https://ci.testling.com/Raynos/duplexer.png
  [6]: https://ci.testling.com/Raynos/duplexer
  [7]: https://github.com/dominictarr/event-stream#duplex-writestream-readstream
";
        
        $__internal_24c5dcdbe40c3948d6a0f21d45c91cd5cb475641a802c9a70c20c868e55b1e97->leave($__internal_24c5dcdbe40c3948d6a0f21d45c91cd5cb475641a802c9a70c20c868e55b1e97_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/duplexer/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# duplexer

[![build status][1]][2] [![dependency status][3]][4]

[![browser support][5]][6]

Creates a duplex stream

Taken from [event-stream][7]

## duplex (writeStream, readStream)

Takes a writable stream and a readable stream and makes them appear as a readable writable stream.

It is assumed that the two streams are connected to each other in some way.

## Example

```js
var grep = cp.exec('grep Stream')

duplex(grep.stdin, grep.stdout)
```

## Installation

`npm install duplexer`

## Tests

`npm test`

## Contributors

 - Dominictarr
 - Raynos
 - samccone

## MIT Licenced

  [1]: https://secure.travis-ci.org/Raynos/duplexer.png
  [2]: https://travis-ci.org/Raynos/duplexer
  [3]: https://david-dm.org/Raynos/duplexer.png
  [4]: https://david-dm.org/Raynos/duplexer
  [5]: https://ci.testling.com/Raynos/duplexer.png
  [6]: https://ci.testling.com/Raynos/duplexer
  [7]: https://github.com/dominictarr/event-stream#duplex-writestream-readstream
", "node_modules/duplexer/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/duplexer/README.md");
    }
}
