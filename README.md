# PHP Model - View - Controller Basic Skeletton

## Server Setup
- Enable mod_rewrite ```sudo a2enmod rewrite```
- Enable override in *apache2.conf*, in server's directory  ```AllowOverride All```

## Routing

Routing works as follows. If no path is given after the base URL, redirect to home.
If there's a path, the first part is the controller to call.
The second one is the action from the controller to call. Remaining parts are
parameters passed to the action. If there is no action given, call default method for controller.

## File names Convention

The .php files that begin with an uppercase letter are only declarative, they do not have side-effects.
On the other hand, the .php files that begin with a lowercase display something.

## Todo

- Forbid access to error pages when url is ```/error/notFound``` for instance.
