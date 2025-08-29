# Symfony JsonStreamer Memory Test

## List

Uses a flat array:

```json
[
    {"itemId":  1000, "modificationDate": "2025-08-29T14:13:43+00:00"},
    {"itemId":  1001, "modificationDate": "2025-08-29T14:13:43+00:00"},
    {"itemId":  1002, "modificationDate": "2025-08-29T14:13:43+00:00"},
    ...
]
```

### Native Test - Uses ~200MB

Loads the entire json file into memory and iterates over the items:

```
php -d memory_limit=4G list_native.php
```

### Symfony Test - Uses ~84MB

Uses the JsonStreamer component to iterate over the items:

```
php -d memory_limit=4G list_symfony.php
```

### `halaxa/json-machine` Test - Uses ~84MB

Uses `halaxa/json-machine` to stream the json file to iterate over the items:

```
php -d memory_limit=4G list_json_machine.php
```


## Nested List

Uses a nested array:

```json
{
    "items": [
        {"itemId":  1000, "modificationDate": "2025-08-29T14:13:43+00:00"},
        {"itemId":  1001, "modificationDate": "2025-08-29T14:13:43+00:00"},
        {"itemId":  1002, "modificationDate": "2025-08-29T14:13:43+00:00"},
        ...
    ]
}
```

### Native Test - Uses ~200MB

Loads the entire json file into memory and iterates over the items:

```
php -d memory_limit=4G nested_list_native.php
```

### Symfony Test - Uses ~2.1GB

Uses the JsonStreamer component to iterate over the items:

```
php -d memory_limit=4G nested_list_symfony.php
```

### `halaxa/json-machine` Test - Uses ~84MB

Uses `halaxa/json-machine` to stream the json file to iterate over the items:

```
php -d memory_limit=4G nested_list_json_machine.php
```
