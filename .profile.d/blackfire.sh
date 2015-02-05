if [[ -n "$BLACKFIRE_SERVER_TOKEN" && -n "$BLACKFIRE_SERVER_TOKEN" ]]; then
    touch /app/.heroku/php/var/blackfire/run/agent.sock
    /app/.heroku/php/bin/blackfire-agent -config=/app/.heroku/php/etc/blackfire/agent.ini -socket="unix:///app/.heroku/php/var/blackfire/run/agent.sock" &
fi