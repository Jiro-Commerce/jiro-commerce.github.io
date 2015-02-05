if [[ -n "$NEW_RELIC_LICENSE_KEY" ]]; then
    export NEW_RELIC_APP_NAME=${NEW_RELIC_APP_NAME:-"PHP Application on Heroku"}
    export NEW_RELIC_LOG_LEVEL=${NEW_RELIC_LOG_LEVEL:-"warning"}

    # The daemon is a spawned process, invoked by the PHP agent, which is truly
    # daemonized (i.e., it is disassociated from the controlling TTY and
    # running in the background). Therefore, the daemon is configured to write
    # its log output to a file instead of to STDIO
    # (see .heroku/php/etc/php/conf.d/ext-newrelic.ini).
    #
    # Perpetually tail and redirect the daemon log file to stderr so that it
    # may be observed via 'heroku logs'.
    touch /tmp/heroku.ext-newrelic.newrelic-daemon.${PORT}.log
    tail -qF -n 0 /tmp/heroku.ext-newrelic.newrelic-daemon.${PORT}.log 1>&2 &
fi