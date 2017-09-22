<?php

/* node_modules/babel-plugin-transform-es2015-arrow-functions/README.md */
class __TwigTemplate_71bab41ac775685fab6c1b1460936c4257ea800d87f6c7a5bdaa3479acb688b8 extends Twig_Template
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
        $__internal_c4eac326157b6f3db7409038f15b7773030910fddd9aa2333dc2a0b8fd1726ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4eac326157b6f3db7409038f15b7773030910fddd9aa2333dc2a0b8fd1726ed->enter($__internal_c4eac326157b6f3db7409038f15b7773030910fddd9aa2333dc2a0b8fd1726ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-arrow-functions/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-arrow-functions

> Compile ES2015 arrow functions to ES5

## Example

**In**

```javascript
var a = () => {};
var a = (b) => b;

const double = [1,2,3].map((num) => num * 2);
console.log(double); // [2,4,6]

var bob = {
  _name: \"Bob\",
  _friends: [\"Sally\", \"Tom\"],
  printFriends() {
    this._friends.forEach(f =>
      console.log(this._name + \" knows \" + f));
  }
};
console.log(bob.printFriends());
```

**Out**

```javascript
var a = function a() {};
var a = function a(b) {
  return b;
};

var double = [1, 2, 3].map(function (num) {
  return num * 2;
});
console.log(double); // [2,4,6]

var bob = {
  _name: \"Bob\",
  _friends: [\"Sally\", \"Tom\"],
  printFriends: function printFriends() {
    var _this = this;

    this._friends.forEach(function (f) {
      return console.log(_this._name + \" knows \" + f);
    });
  }
};
console.log(bob.printFriends());
```

[Try in REPL](http://babeljs.io/repl/#?evaluate=true&lineWrap=true&presets=es2015%2Ces2015-loose&experimental=false&loose=false&spec=false&code=var%20a%20%3D%20()%20%3D%3E%20%7B%7D%3B%0Avar%20a%20%3D%20(b)%20%3D%3E%20b%3B%0A%0Aconst%20double%20%3D%20%5B1%2C2%2C3%5D.map((num)%20%3D%3E%20num%20*%202)%3B%0Aconsole.log(double)%3B%20%2F%2F%20%5B2%2C4%2C6%5D%0A%0Avar%20bob%20%3D%20%7B%0A%20%20_name%3A%20%22Bob%22%2C%0A%20%20_friends%3A%20%5B%22Sally%22%2C%20%22Tom%22%5D%2C%0A%20%20printFriends()%20%7B%0A%20%20%20%20this._friends.forEach(f%20%3D%3E%0A%20%20%20%20%20%20console.log(this._name%20%2B%20%22%20knows%20%22%20%2B%20f))%3B%0A%20%20%7D%0A%7D%3B%0Aconsole.log(bob.printFriends())%3B&playground=true)

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-arrow-functions
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-arrow-functions\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-arrow-functions\", { \"spec\": true }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-arrow-functions script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-arrow-functions\"]
});
```

## Options

* `spec` - This option wraps the generated function in `.bind(this)` and keeps uses of `this` inside the function as-is, instead of using a renamed `this`. It also adds a runtime check to ensure the functions are not instantiated.
";
        
        $__internal_c4eac326157b6f3db7409038f15b7773030910fddd9aa2333dc2a0b8fd1726ed->leave($__internal_c4eac326157b6f3db7409038f15b7773030910fddd9aa2333dc2a0b8fd1726ed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-arrow-functions/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-arrow-functions

> Compile ES2015 arrow functions to ES5

## Example

**In**

```javascript
var a = () => {};
var a = (b) => b;

const double = [1,2,3].map((num) => num * 2);
console.log(double); // [2,4,6]

var bob = {
  _name: \"Bob\",
  _friends: [\"Sally\", \"Tom\"],
  printFriends() {
    this._friends.forEach(f =>
      console.log(this._name + \" knows \" + f));
  }
};
console.log(bob.printFriends());
```

**Out**

```javascript
var a = function a() {};
var a = function a(b) {
  return b;
};

var double = [1, 2, 3].map(function (num) {
  return num * 2;
});
console.log(double); // [2,4,6]

var bob = {
  _name: \"Bob\",
  _friends: [\"Sally\", \"Tom\"],
  printFriends: function printFriends() {
    var _this = this;

    this._friends.forEach(function (f) {
      return console.log(_this._name + \" knows \" + f);
    });
  }
};
console.log(bob.printFriends());
```

[Try in REPL](http://babeljs.io/repl/#?evaluate=true&lineWrap=true&presets=es2015%2Ces2015-loose&experimental=false&loose=false&spec=false&code=var%20a%20%3D%20()%20%3D%3E%20%7B%7D%3B%0Avar%20a%20%3D%20(b)%20%3D%3E%20b%3B%0A%0Aconst%20double%20%3D%20%5B1%2C2%2C3%5D.map((num)%20%3D%3E%20num%20*%202)%3B%0Aconsole.log(double)%3B%20%2F%2F%20%5B2%2C4%2C6%5D%0A%0Avar%20bob%20%3D%20%7B%0A%20%20_name%3A%20%22Bob%22%2C%0A%20%20_friends%3A%20%5B%22Sally%22%2C%20%22Tom%22%5D%2C%0A%20%20printFriends()%20%7B%0A%20%20%20%20this._friends.forEach(f%20%3D%3E%0A%20%20%20%20%20%20console.log(this._name%20%2B%20%22%20knows%20%22%20%2B%20f))%3B%0A%20%20%7D%0A%7D%3B%0Aconsole.log(bob.printFriends())%3B&playground=true)

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-arrow-functions
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-arrow-functions\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-arrow-functions\", { \"spec\": true }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-arrow-functions script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-arrow-functions\"]
});
```

## Options

* `spec` - This option wraps the generated function in `.bind(this)` and keeps uses of `this` inside the function as-is, instead of using a renamed `this`. It also adds a runtime check to ensure the functions are not instantiated.
", "node_modules/babel-plugin-transform-es2015-arrow-functions/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-arrow-functions/README.md");
    }
}
