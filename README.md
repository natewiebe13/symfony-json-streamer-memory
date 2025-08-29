# Symfony JsonStreamer Memory Test

## Native Test - Uses ~200MB

Loads the entire json file into memory and iterates over the items:

```
php -d memory_limit=4G native.php
```

## Symfony Test - Uses ~2.1GB

Uses the JsonStreamer component to iterate over the items:

```
php -d memory_limit=4G symfony.php
```

## Native Test - Uses ~25MB

Uses `halaxa/json-machine` to stream the json file to iterate over the items:

```
php -d memory_limit=4G json_machine.php
```
