#!/bin/sh
set -eu

if [ -n "${RENDER_EXTERNAL_URL:-}" ]; then
    render_app_url="${RENDER_EXTERNAL_URL%/}/"
    export app_baseURL="${render_app_url}"
fi

export app_indexPage=""

exec apache2-foreground
