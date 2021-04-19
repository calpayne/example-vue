# Aero storefront example Vue.js component

This module outlines the steps required to register custom Vue.js components into the storefront dynamic component system provided by the `aerocommerce/components` package.

## Twig usage

Include in your Twig template file:

```twig
{% vue %}
    <example-component count="100" />
{% endvue %}
```

To share data between multiple sibling components you can declare the data within the opening Twig tag:

```twig
{% vue with {count: 100} %}
    <example-component :count="count" />
    <another-example-component v-model="count" />
{% endvue %}
```

By default, the `{% vue %}` Twig tag renders the Vue template on the client-side.
To make use of server-side rendering, simply specify the `ssr` option at the end of the opening Twig tag:

```twig
{% vue ssr %}
    // ...
{% endvue %}

// or

{% vue with {count: 100} ssr %}
    // ...
{% endvue %}
```
