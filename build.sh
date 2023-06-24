#!/bin/bash

PHP_PLUGIN_PATH="/???/grpc/cmake/build/grpc_php_plugin" # change to local installation
PROTOBUF_PROTO_LIB="/???/grpc/third_party/protobuf/src" # change to local installation
PLUGIN=protoc-gen-grpc=$PHP_PLUGIN_PATH

filename=example.proto

protoc --php_out=build/gen --grpc_out=build/gen --plugin=$PLUGIN \
    --proto_path proto/  --proto_path $PROTOBUF_PROTO_LIB \
    $filename

echo "compiled $filename"