# Agendum Vtiger Adapter

A PHP library that provides backward compatibility for Vtiger modules running on Agendum CRM platform.

## Overview

This adapter library enables legacy Vtiger modules to work seamlessly with Agendum CRM by providing class mapping between the old Vtiger naming convention (`Vtiger_*`) and the new Agendum naming convention (`Agendum_*`).

## Why Install This Library?

When migrating from Vtiger CRM to Agendum CRM, existing modules may fail to load because they reference classes using the old `Vtiger_*` naming convention. Agendum CRM has modernized these class names to use the `Agendum_*` prefix.

This library solves this compatibility issue by:

- Creating empty wrapper classes that extend their Agendum equivalents
- Maintaining the original `Vtiger_*` class names for backward compatibility
- Allowing legacy modules to run without modification on Agendum instances

## Supported Classes

The library provides compatibility mappings for the following core classes:

- `Vtiger_Session` → `Agendum_Session`
- `Vtiger_WebUI` → `Agendum_WebUI`
- `Vtiger_Response` → `Agendum_Response`
- `Vtiger_Loader` → `Agendum_Loader`
- `Vtiger_Request` → `Agendum_Request`
- `Vtiger_Base_Model` → `Agendum_Base_Model`
- `Vtiger_Viewer` → `Agendum_Viewer`
- `Vtiger_Language_Handler` → `Agendum_Language_Handler`
- `Vtiger_Theme` → `Agendum_Theme`
- `Vtiger_Cache` → `Agendum_Cache`
- `Vtiger_EntryPoint` → `Agendum_EntryPoint`
- `Vtiger_Cache_Connector` → `Agendum_Cache_Connector`
- `Vtiger_Cache_Connector_Memory` → `Agendum_Cache_Connector_Memory`
- `Vtiger_JavaScript` → `Agendum_JavaScript`
- `Vtiger_Controller` → `Agendum_Controller`
- `Vtiger_Action_Controller` → `Agendum_Action_Controller`
- `Vtiger_View_Controller` → `Agendum_View_Controller`

## Installation

Install via Composer:

```bash
composer require agendum/vtiger-adapter
```

### Production Setup

For production use, add the following to your `composer.json` autoload section:

```json
{
  "autoload": {
    "files": [
      "vendor/agendum/vtiger-adapter/src/autoload.php"
    ]
  }
}
```

Then regenerate the autoloader:

```bash
composer dump-autoload
```

## Usage

Once installed, the adapter classes are automatically available. Legacy Vtiger modules will be able to find and use the `Vtiger_*` classes, which seamlessly extend their modern `Agendum_*` counterparts.

No code changes are required in your existing modules - they will continue to work as expected.

## License

To be defined. Final license terms will clarify compatibility with the Vtiger CRM Public License 1.1 for derivative portions of the work.