#!/bin/sh
set -eu

if [ -n "${RENDER_EXTERNAL_URL:-}" ]; then
    render_app_url="${RENDER_EXTERNAL_URL%/}/"
else
    render_app_url="http://localhost:10000/"
fi

exec env \
    "app.baseURL=${render_app_url}" \
    "app.indexPage=" \
    apache2-foreground
