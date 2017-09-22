<?php

/* node_modules/get-stream/readme.md */
class __TwigTemplate_95ea1a8f0118bf2d5d5201dc33713bc8ca84b1f41d2e7b4e390c57ad9f4eabbe extends Twig_Template
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
        $__internal_7ece15e3ddae4f3669ff588815342b514298e61cc6108d6d412b6257980bb011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ece15e3ddae4f3669ff588815342b514298e61cc6108d6d412b6257980bb011->enter($__internal_7ece15e3ddae4f3669ff588815342b514298e61cc6108d6d412b6257980bb011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/get-stream/readme.md"));

        // line 1
        echo "# get-stream [![Build Status](https://travis-ci.org/sindresorhus/get-stream.svg?branch=master)](https://travis-ci.org/sindresorhus/get-stream)

> Get a stream as a string, buffer, or array


## Install

```
\$ npm install --save get-stream
```


## Usage

```js
const fs = require('fs');
const getStream = require('get-stream');
const stream = fs.createReadStream('unicorn.txt');

getStream(stream).then(str => {
\tconsole.log(str);
\t/*
\t              ,,))))))));,
\t           __)))))))))))))),
\t\\|/       -\\(((((''''((((((((.
\t-*-==//////((''  .     `)))))),
\t/|\\      ))| o    ;-.    '(((((                                  ,(,
\t         ( `|    /  )    ;))))'                               ,_))^;(~
\t            |   |   |   ,))((((_     _____------~~~-.        %,;(;(>';'~
\t            o_);   ;    )))(((` ~---~  `::           \\      %%~~)(v;(`('~
\t                  ;    ''''````         `:       `:::|\\,__,%%    );`'; ~
\t                 |   _                )     /      `:|`----'     `-'
\t           ______/\\/~    |                 /        /
\t         /~;;.____/;;'  /          ___--,-(   `;;;/
\t        / //  _;______;'------~~~~~    /;;/\\    /
\t       //  | |                        / ;   \\;;,\\
\t      (<_  | ;                      /',/-----'  _>
\t       \\_| ||_                     //~;~~~~~~~~~
\t           `\\_|                   (,~~
\t                                   \\~\\
\t                                    ~~
\t*/
});
```


## API

The methods returns a promise that resolves when the `end` event fires on the stream, indicating that there is no more data to be read. The stream is switched to flowing mode.

### getStream(stream, [options])

Get the `stream` as a string.

#### options

##### encoding

Type: `string`<br>
Default: `utf8`

[Encoding](https://nodejs.org/api/buffer.html#buffer_buffer) of the incoming stream.

##### maxBuffer

Type: `number`<br>
Default: `Infinity`

Maximum length of the returned string. If it exceeds this value before the stream ends, the promise will be rejected.

### getStream.buffer(stream, [options])

Get the `stream` as a buffer.

It honors the `maxBuffer` option as above, but it refers to byte length rather than string length.

### getStream.array(stream, [options])

Get the `stream` as an array of values.

It honors both the `maxBuffer` and `encoding` options. The behavior changes slightly based on the encoding chosen:

- When `encoding` is unset, it assumes an [object mode stream](https://nodesource.com/blog/understanding-object-streams/) and collects values emitted from `stream` unmodified. In this case `maxBuffer` refers to the number of items in the array (not the sum of their sizes).

- When `encoding` is set to `buffer`, it collects an array of buffers. `maxBuffer` refers to the summed byte lengths of every buffer in the array.

- When `encoding` is set to anything else, it collects an array of strings. `maxBuffer` refers to the summed character lengths of every string in the array.


## Errors

If the input stream emits an `error` event, the promise will be rejected with the error. The buffered data will be attached to the `bufferedData` property of the error.

```js
getStream(streamThatErrorsAtTheEnd('unicorn'))
\t.catch(err => {
\t\tconsole.log(err.bufferedData);
\t\t//=> 'unicorn'
\t});
```


## FAQ

### How is this different from [`concat-stream`](https://github.com/maxogden/concat-stream)?

This module accepts a stream instead of being one and returns a promise instead of using a callback. The API is simpler and it only supports returning a string, buffer, or array. It doesn't have a fragile type inference. You explicitly choose what you want. And it doesn't depend on the huge `readable-stream` package.


## Related

- [get-stdin](https://github.com/sindresorhus/get-stdin) - Get stdin as a string or buffer


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_7ece15e3ddae4f3669ff588815342b514298e61cc6108d6d412b6257980bb011->leave($__internal_7ece15e3ddae4f3669ff588815342b514298e61cc6108d6d412b6257980bb011_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/get-stream/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# get-stream [![Build Status](https://travis-ci.org/sindresorhus/get-stream.svg?branch=master)](https://travis-ci.org/sindresorhus/get-stream)

> Get a stream as a string, buffer, or array


## Install

```
\$ npm install --save get-stream
```


## Usage

```js
const fs = require('fs');
const getStream = require('get-stream');
const stream = fs.createReadStream('unicorn.txt');

getStream(stream).then(str => {
\tconsole.log(str);
\t/*
\t              ,,))))))));,
\t           __)))))))))))))),
\t\\|/       -\\(((((''''((((((((.
\t-*-==//////((''  .     `)))))),
\t/|\\      ))| o    ;-.    '(((((                                  ,(,
\t         ( `|    /  )    ;))))'                               ,_))^;(~
\t            |   |   |   ,))((((_     _____------~~~-.        %,;(;(>';'~
\t            o_);   ;    )))(((` ~---~  `::           \\      %%~~)(v;(`('~
\t                  ;    ''''````         `:       `:::|\\,__,%%    );`'; ~
\t                 |   _                )     /      `:|`----'     `-'
\t           ______/\\/~    |                 /        /
\t         /~;;.____/;;'  /          ___--,-(   `;;;/
\t        / //  _;______;'------~~~~~    /;;/\\    /
\t       //  | |                        / ;   \\;;,\\
\t      (<_  | ;                      /',/-----'  _>
\t       \\_| ||_                     //~;~~~~~~~~~
\t           `\\_|                   (,~~
\t                                   \\~\\
\t                                    ~~
\t*/
});
```


## API

The methods returns a promise that resolves when the `end` event fires on the stream, indicating that there is no more data to be read. The stream is switched to flowing mode.

### getStream(stream, [options])

Get the `stream` as a string.

#### options

##### encoding

Type: `string`<br>
Default: `utf8`

[Encoding](https://nodejs.org/api/buffer.html#buffer_buffer) of the incoming stream.

##### maxBuffer

Type: `number`<br>
Default: `Infinity`

Maximum length of the returned string. If it exceeds this value before the stream ends, the promise will be rejected.

### getStream.buffer(stream, [options])

Get the `stream` as a buffer.

It honors the `maxBuffer` option as above, but it refers to byte length rather than string length.

### getStream.array(stream, [options])

Get the `stream` as an array of values.

It honors both the `maxBuffer` and `encoding` options. The behavior changes slightly based on the encoding chosen:

- When `encoding` is unset, it assumes an [object mode stream](https://nodesource.com/blog/understanding-object-streams/) and collects values emitted from `stream` unmodified. In this case `maxBuffer` refers to the number of items in the array (not the sum of their sizes).

- When `encoding` is set to `buffer`, it collects an array of buffers. `maxBuffer` refers to the summed byte lengths of every buffer in the array.

- When `encoding` is set to anything else, it collects an array of strings. `maxBuffer` refers to the summed character lengths of every string in the array.


## Errors

If the input stream emits an `error` event, the promise will be rejected with the error. The buffered data will be attached to the `bufferedData` property of the error.

```js
getStream(streamThatErrorsAtTheEnd('unicorn'))
\t.catch(err => {
\t\tconsole.log(err.bufferedData);
\t\t//=> 'unicorn'
\t});
```


## FAQ

### How is this different from [`concat-stream`](https://github.com/maxogden/concat-stream)?

This module accepts a stream instead of being one and returns a promise instead of using a callback. The API is simpler and it only supports returning a string, buffer, or array. It doesn't have a fragile type inference. You explicitly choose what you want. And it doesn't depend on the huge `readable-stream` package.


## Related

- [get-stdin](https://github.com/sindresorhus/get-stdin) - Get stdin as a string or buffer


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/get-stream/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/get-stream/readme.md");
    }
}
