FROM mcr.microsoft.com/mssql/server:2017-latest

HEALTHCHECK --interval=30s --timeout=3s CMD [ "sqlcmd", "-Q", "select 1" ]

COPY init.sql .
COPY entrypoint.sh .
COPY startup.sh .

CMD /bin/bash entrypoint.sh

EXPOSE 1433
