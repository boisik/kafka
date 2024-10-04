#!/bin/sh

echo "Initializing MongoDB..."

mongo /docker-entrypoint-custom.d/create_index.js

echo "MongoDB initialization complete."
