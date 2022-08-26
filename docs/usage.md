# Usage

## Prerequisites
To use this plugin it is necessary to have a [Stack Wordpress](https://github.com/TheFirstSquad/stack-wordpress) created by the [StackSpot CLI](https://docs.stackspot.com/v4.0.0/docs/stk-cli/), which you can download [here](https://stackspot.com/download).

### Dependencies
- StackSpot CLI ~3.8
- [Stack Wordpress](https://github.com/TheFirstSquad/stack-wordpress)
- [Template Default - Stack Wordpress](https://github.com/TheFirstSquad/template-wordpress-default) applied

## Applying the plugin

### Option 01 - Downloading version from Stackspot portal
1) Access your application folder created with stackspot from Stack Wordpress
2) Run the stackspot plugins application command
```bash
stk apply plugin stack-wordpress/wordpress-scaffold-generic-theme
```

### Option 02 - Downloading directly from the repository and apply to your stack
1) Download the plugin as in a folder outside your stack

```bash
git clone https://github.com/TheFirstSquad/plugin-wordpress-scaffold-generic-theme.git
```
2) Access your application folder

2) Apply the plugin to your application folder with the Stackspot CLI

```bash
stk apply plugin -p PATH_PLUGIN_LOCAL_REPOSITORY
```
