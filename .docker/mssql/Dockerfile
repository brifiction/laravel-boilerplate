FROM mcr.microsoft.com/mssql/server:2019-latest

HEALTHCHECK --interval=30s --timeout=3s CMD [ "sqlcmd", "-Q", "select 1" ]

EXPOSE 1433
